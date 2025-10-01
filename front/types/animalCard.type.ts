import { Animal } from "./animal.type";
import { ImageData } from "./common.type";



export type AnimalCard = {
    image: ImageData;
    animal: Animal;
    path: string;
}
