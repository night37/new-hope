export type LocationValue = {
    code: string;
    name: string;
};

export type StructureAutocomplete = {
    option: 'regions' | 'departements' | 'communes';
    onChange?: (value: LocationValue | null) => void;
    formData?: {
        'autocomplete-regions': LocationValue | null;
        'autocomplete-departements': LocationValue | null;
        'autocomplete-communes': LocationValue | null;
    };
};
