export type ButtonRadio = {
    label: string;
    isActive?: boolean;
    onClick: (index: number) => void;
    index: number;
};
