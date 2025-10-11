import { AutocompleteApiResponse } from './autocompleteApiResponse.type';

export type AutocompleteRegionsResponse = Pick<AutocompleteApiResponse, 'name' | 'code'>;
