
import { Animal } from "./animal.type";



export type HighLightProps = {
    introduction: {
        title: string;
        content: string;
    };
    animals: Animal[];
    error: string;
    loading: boolean;
}