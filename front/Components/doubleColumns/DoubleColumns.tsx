import React from "react";
import Column from "@/Components/column/Column"

interface ColumnData  {
    paragraph?: {
        title: string,
        content: string,
    }
    picture?: {
        src:string,
        alt: string
    }
}

interface DoubleColumnsProps {
    columns: [ColumnData, ColumnData]; // Tuple de 2 éléments exactement
}

const DoubleColumns = ({columns}: DoubleColumnsProps) => {
    return (
        <div className="double-columns-container flex">
            {columns.map((column, index) => (
                <Column key={index} {...column} />
            ))}
        </div>
    );
};

export default DoubleColumns;                           