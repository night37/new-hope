import React, {useRef} from 'react';
import { Swiper, SwiperSlide } from 'swiper/react';
import type { SwiperRef } from 'swiper/react';
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
    structure: {
        id: string,
        name: string
    }
}

interface CarouselProps {
    items: AnimalItem[];
}


function Carousel({ items}: CarouselProps) {
    const swiperRef = useRef<SwiperRef | null>(null);

    console.log(items);
    return (
        <>
        <Swiper
            modules={[Navigation]}   
            ref={swiperRef}
            className="animal-swiper"
            slidesPerView={4}
            spaceBetween={30}
            centeredSlides={false}
            keyboard={{
                enabled: true,
                onlyInViewport: true
            }}
            breakpoints= {{
                    300: {
                        slidesPerView: 1,
                        spaceBetween: 40
                    },
                    618: {
                        slidesPerView: 2,
                        spaceBetween: 40
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 40
                    },
                    1280: {
                        slidesPerView: 4,
                        spaceBetween: 40
                    }

            }}


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
        <button 
            className="custom-prev-btn"
            onClick={() => swiperRef.current?.swiper.slidePrev()}
        >
            &#8249;
        </button>
      

        <button 
            className="custom-next-btn"
            onClick={() => swiperRef.current?.swiper.slideNext()}
        >
            test
        </button>
        
        </>

    );
}

export default Carousel;