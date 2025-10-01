import React, { useRef } from 'react';
import Image from 'next/image';
import { Swiper, SwiperSlide } from 'swiper/react';
import type { SwiperRef } from 'swiper/react';
import { AnimalCard } from '@/Components/animalCard/AnimalCard';
import { Navigation } from 'swiper/modules';
import { Slider as SliderProps } from '@/types/slider-type';
import 'swiper/css';
import 'swiper/css/navigation';
import './style.scss';

function Slider({ items }: SliderProps) {
    const swiperRef = useRef<SwiperRef | null>(null);

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
                    onlyInViewport: true,
                }}
                breakpoints={{
                    300: {
                        slidesPerView: 1,
                        spaceBetween: 40,
                    },
                    618: {
                        slidesPerView: 2,
                        spaceBetween: 40,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 40,
                    },
                    1280: {
                        slidesPerView: 4,
                        spaceBetween: 40,
                    },
                }}
            >
                {items &&
                    items.length > 0 &&
                    items.map((item, key) => (
                        <SwiperSlide key={key}>
                            <AnimalCard
                                image={{
                                    src:
                                        typeof item.thumbnail === 'string'
                                            ? item.thumbnail
                                            : '/img/placeholder.svg',
                                    alt: `photo de ${item.name}`,
                                }}
                                animal={{
                                    id: item.id,
                                    name: item.name,
                                    type: item.type,
                                    breed: item.breed,
                                    gender: item.gender,
                                    structure: item.structure,
                                }}
                                path={`/animal/${item.name}`}
                            />
                        </SwiperSlide>
                    ))}
            </Swiper>
            <button
                className="custom-prev-btn absolute left-2 top-2/4 z-10 flex h-[40px] w-[40px] items-center justify-center rounded-full bg-custom-secondary hover:bg-custom-primary focus:bg-custom-primary active:bg-custom-secondary"
                onClick={() => swiperRef.current?.swiper.slidePrev()}
            >
                <Image
                    src="/assets/icons/leftArrow.svg"
                    alt=""
                    width={10}
                    height={10}
                    className="relative right-[2px]"
                />
            </button>

            <button
                className="custom-next-btn absolute right-2 top-2/4 z-10 flex h-[40px] w-[40px] items-center justify-center rounded-full bg-custom-secondary hover:bg-custom-primary focus:bg-custom-primary active:bg-custom-secondary"
                onClick={() => swiperRef.current?.swiper.slideNext()}
            >
                <Image
                    src="/assets/icons/rightArrow.svg"
                    alt=""
                    width={10}
                    height={10}
                    className="relative right-[-2px]"
                />
            </button>
        </>
    );
}

export default Slider;
