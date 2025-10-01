import { Structure } from './structure.type';
import { ImageData } from './common.type';

export type Animal = {
    id: number;
    name: string;
    gender?: string;
    age?: number;
    out_department?: boolean;
    size?: string;
    color?: string;
    affinity?: string[];
    adoption_status?: string;
    breed: string[];
    type: string;
    thumbnail?: ImageData;
    images?: ImageData[];
    description?: string;
    structure: Structure;
};
