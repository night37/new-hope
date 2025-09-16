import React, {useRef} from 'react';
import Image from 'next/image';
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
            className="animal-swiper relative"
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
                        path={`/animal/${item.name}`}
                    />              
                </SwiperSlide>
            ))}
        </Swiper>
        <button 
            className="custom-prev-btn bg-custom-secondary w-[40] h-[40] absolute left-2 top-2/4 rounded-full flex items-center justify-center z-10 hover:bg-custom-primary focus:bg-custom-primary active:bg-custom-secondary"
            onClick={() => swiperRef.current?.swiper.slidePrev()}
        >
            <Image src="/assets/icons/leftArrow.svg" alt="" width={10} height={10} className='relative right-[2px]'/>
        </button>
      

        <button 
            className="custom-next-btn bg-custom-secondary w-[40] h-[40] absolute right-2 z-10 top-2/4 rounded-full flex items-center justify-center hover:bg-custom-primary focus:bg-custom-primary active:bg-custom-secondary"
            onClick={() => swiperRef.current?.swiper.slideNext()}
        >
            <Image src="/assets/icons/rightArrow.svg" alt="" width={10} height={10} className='relative right-[-2px]'/>

        </button>
        
        </>

    );
}

export default Carousel;