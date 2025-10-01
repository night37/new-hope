export type FilterOption = {
    isSelected: boolean;
    name: string;
    value: string;
    fieldName: string;
};

export type Filter = {
    [key: string]: FilterOption[];
};
