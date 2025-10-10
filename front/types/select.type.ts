export type SelectProps = {
    label: string;
    options: { name: string; value: string; isSelected: boolean }[];
    onChange: (event: React.ChangeEvent<HTMLSelectElement>) => void;
}
