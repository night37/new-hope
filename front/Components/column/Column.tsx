import React from 'react';
import Image from 'next/image';
import { Column as ColumnData } from '@/types/column';

function Column({ paragraph, picture }: ColumnData) {
    return (
        <div className="column relative w-full">
            {paragraph && (
                <div className="paragraph-container py:10 h-fit lg:px-[20px] lg:py-[112.5px]">
                    <h2 className="font-caveat">{paragraph.title}</h2>
                    <p className="font-handlee">{paragraph.content}</p>
                </div>
            )}
            {picture && (
                <div className="picture-container h-[420px]">
                    <Image className="object-cover" fill src={picture.src} alt={picture.alt} />
                </div>
            )}
        </div>
    );
}

export default Column;
