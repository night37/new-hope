import React, {useState, useEffect} from 'react';
import AsyncSelect from 'react-select/async';
import { query } from "@/api/structure/location/query";

export function Autocomplete ({option})  {

    const [options, setOptions] = useState([])


    useEffect(() => {
        const fetchData = async () => {
        const response =  await query(option)
        console.log(response);
        }
        fetchData();
    }, [option]);




    // const loadOptions = (inputValue: string,  callback: (options: ColourOption[]) => void) => {

    //     setTimeout(() => {
    //     setOptions(async(oldValues) => {
    //         let newValues = [...oldValues]
    //         newValues = await query("regions", name)
    //     })
    //     }, 1000);
    // }

    return (
        <>test</>
        // <AsyncSelect cacheOptions loadOptions={options} defaultOptions />
    );
}
