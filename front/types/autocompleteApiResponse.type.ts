export type AutocompleteApiResponse = {
    name: string;
    code: string;
    codeDepartement?: string;
    codeRegion: string;
    centre: centerObject;
};

type centerObject = {
    latitude: number;
    longitude: number;
};
