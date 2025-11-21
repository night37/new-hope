import { ImageData } from './common.type';

export type Column = {
    paragraph?: {
        title: string;
        content: string;
    };
    picture?: ImageData;
};
