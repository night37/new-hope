import React, {useState, useRef, useEffect} from "react"
import Image from "next/image"
import "./style.scss"

interface SelectProps  {
  label : string,
  options : { name: string, value: string, isSelected : boolean}[],
  onChange: (event: React.ChangeEvent<HTMLSelectElement>) => void;
}

export default function Select({label, options, onChange} : SelectProps) {

  const [isOpen, setIsOpen] = useState(false);
  const [focusedIndex, setFocusedIndex] = useState(-1);
  const dropdownRef = useRef<HTMLDivElement>(null);

  useEffect(() => {
    const handleClickOutside = (event: MouseEvent) => {
      if (dropdownRef.current && !dropdownRef.current.contains(event.target as Node)) {
        setIsOpen(false);
      }
    };

    document.addEventListener("mousedown", handleClickOutside);
    return () => document.removeEventListener("mousedown", handleClickOutside);
  }, []);

  // Reset focused index when opening/closing
  useEffect(() => {
    if (isOpen) {
      setFocusedIndex(-1);
    }
  }, [isOpen]);

  const handleOptionClick = (optionValue: string,) => {
    const customEvent = {
      target: {
        value: optionValue
      }
    } as Pick<React.ChangeEvent<HTMLSelectElement>, "target">;

    onChange(customEvent as React.ChangeEvent<HTMLSelectElement>);
  };

  const getSelectedCount = () => {
    if (Array.isArray(options) && typeof options[0] === "object") {
      return (options as { name: string; value: string; isSelected: boolean }[])
        .filter(option => option.isSelected).length;
    }
    return 0;
  };

  const getDisplayText = () => {
    const selectedCount = getSelectedCount();
    return `${selectedCount > 0  ?  selectedCount > 1 ? selectedCount + " sélectionnés" : selectedCount + " sélectionné" : "Aucun filtre" } `;
  };

  const handleKeyDown = (e: React.KeyboardEvent) => {
    if (!Array.isArray(options) || options.length === 0) return;

    switch (e.key) {
      case "Enter":
      case " ": // Space
        e.preventDefault();
        if (!isOpen) {
          setIsOpen(true);
        } else if (focusedIndex >= 0) {
          // Sélectionner l"option focusée
          if (typeof options[0] === "object") {
            const option = (options as { name: string; value: string; isSelected: boolean }[])[focusedIndex];
            handleOptionClick(option.value);
          } else {
            // This branch is not needed since options are always objects
          }
        }
        break;

      case "Escape":
        setIsOpen(false);
        setFocusedIndex(-1);
        break;

      case "ArrowDown":
        e.preventDefault();
        if (!isOpen) {
          setIsOpen(true);
          setFocusedIndex(0);
        } else {
          setFocusedIndex(prev => 
            prev < options.length - 1 ? prev + 1 : prev
          );
        }
        break;

      case "ArrowUp":
        e.preventDefault();
        if (isOpen) {
          setFocusedIndex(prev => 
            prev > 0 ? prev - 1 : prev
          );
        }
        break;

      case "Tab":
        if (isOpen) {
          setIsOpen(false);
        }
        break;

      default:
        break;
    }
  };

  return (
    <div className="font-caveat w-full flex gap-2 flex-col">
      <p className="text-large">{label}</p>
      <div ref={dropdownRef} className="relative">
        <div 
          onClick={() => setIsOpen(!isOpen)}
          onKeyDown={handleKeyDown}
          tabIndex={0} 
          className="select bg-white rounded-box z-1 w-52 p-2 shadow-sm border-solid text-large rounded-xl border-custom-primary flex justify-between text-large cursor-pointer"
          role="combobox"
          aria-expanded={isOpen}
          aria-haspopup="listbox"
          aria-controls="select-listbox"

        >
          <span>{getDisplayText()}</span>
          <Image src="/assets/icons/patte.svg" width={16} height={16} alt=""/>
        </div>

        {isOpen && (
          <div 
            className="absolute top-full left-0 right-0 bg-white border border-custom-primary rounded-xl shadow-lg z-50 max-h-60 overflow-y-auto mt-1"
            role="listbox"
          >
            {options?.length > 0 ? (
              (options as { name: string; value: string; isSelected: boolean }[]).map((option, key) => (
                <div
                  key={option.name}
                  data-key={key}
                  onClick={() => handleOptionClick(option.value)}
                  onMouseEnter={() => setFocusedIndex(key)}
                  className={`p-2 hover:bg-slate-200 cursor-pointer text-large select-item ${
                    option?.isSelected ? "isSelected" : ""
                  } ${focusedIndex === key ? "bg-slate-200" : ""}`}
                  role="option"
                  aria-selected={option.isSelected}
                >
                  {option.value}
                </div>
              ))
            ) : <div className="p-2 text-gray-500">Aucun valeur dans ce filtre</div>}
          </div>
        )}
      </div>
      <div className="filters-list flex gap-2 flex-wrap w-52">
        {Array.isArray(options) && typeof options[0] === "object" && 
          (options as { name: string; value: string; isSelected: boolean }[]).map((option, key) => {
            if(option.isSelected) {
              return <div onClick={()=> handleOptionClick(option.value)} key={key} className="rounded-lg p-1 gap-2 bg-custom-secondary border-custom-secondary text-lg w-fit flex items-center justify-evenly h-fit">
                <p>{option.value}  </p>
                <span className="w-[16px] flex  items-center mt-[2px]">
                  <svg  className="w-[16px] h-[16px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.5" data-slot="icon" aria-hidden="true">
                    <path d="M6 18 18 6M6 6l12 12" strokeLinecap="round" strokeLinejoin="round"></path>
                  </svg>
                </span>
              </div>
            }
            return null;
          })
        }
      </div>
    </div>
  )
}
