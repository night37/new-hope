import React from 'react';
import Column from '@/Components/column/Column';

interface ColumnData {
    paragraph?: {
        title: string;
        content: string;
    };
    picture?: {
        src: string;
        alt: string;
    };
}

interface DoubleColumnsProps {
    columns: [ColumnData, ColumnData]; // Tuple de 2 éléments exactement
}

const DoubleColumns = ({ columns }: DoubleColumnsProps) => {
    const displayInMobileDevice = (columns: ColumnData[]): React.ReactNode => {
        const reorderColums: ColumnData[] = [];
        columns.forEach((column) => {
            column.picture ? reorderColums.unshift(column) : reorderColums.push(column);
        });
        return reorderColums.map((column, index) => {
            return <Column key={index} {...column} />;
        });
    };

    return (
        <>
            <div className="double-columns-container hidden lg:flex">
                {columns.map((column, index) => {
                    return <Column key={index} {...column} />;
                })}
            </div>
            <div className="double-columns-container flex-col px-3 lg:hidden">
                {displayInMobileDevice(columns)}
            </div>
        </>
    );
};

export default DoubleColumns;
