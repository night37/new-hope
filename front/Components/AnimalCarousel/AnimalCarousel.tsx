import React from 'react';
import { Swiper, SwiperSlide } from 'swiper/react';
import { AnimalCard } from "@/Components/animalCard/AnimalCard"
import { Navigation } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import './style.scss';

interface AnimalItem {
    thumbnail: string;
    name: string
    breed: string,
    gender: string,
    associationName: string
}

interface CarouselProps {
    items: object[];
}


function Carousel({ items}: CarouselProps) {
    console.log(items);
    return (
        <>
        <Swiper
            navigation={true}
            modules={[Navigation]}   
            className="animal-swiper"
            slidesPerView={4}
            spaceBetween={30}
            centeredSlides={false}
        >
            {items.map((item, key) => (
                <SwiperSlide key={key}>
                    <AnimalCard 
                        image={{
                            src: item.thumbnail,
                            alt: `photo de ${item.name}`
                        }}
                        animal={{
                            name: item.name,
                            race: item.breed,
                            sexe: item.gender,
                            associationName: item.structure.name
                        }}
                        path={`/animals/${item.name}`}
                    />              
                </SwiperSlide>
            ))}
        </Swiper>
        
        </>

    );
}

export default Carousel;