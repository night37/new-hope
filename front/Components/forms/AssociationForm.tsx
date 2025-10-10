import React from 'react';
import { Autocomplete} from '@/Components/ui/autocomplete/Autocomplete'

export default function AssociationForm() {

    const submitForm = (e) => {
        console.log("submit");
    }
    return (
        <form
            className="relative flex min-h-[300px] w-full flex-wrap justify-center gap-10 lg:justify-start"
            onSubmit={(e) => {
                submitForm(e);
            }}
        >
        <div className="flex w-full flex-wrap justify-center lg:justify-start">
            <div className="w-1/4 px-3">
                <Autocomplete option={"communes"}/>
            </div>
            <div className="w-1/4 px-3">
                <Autocomplete option={"departements"}/>
            </div>
            <div className="w-1/4    px-3">
                <Autocomplete option={"regions"}/>
            </div>
            <div className="w-1/4 px-3">
                <div className="flex flex-col">
                    <label htmlFor="distance-input" className="text-large font-caveat">Distance maximum (en km)</label>
                    <input id="distance-input" type="number" placeholder="ex: 10" className=" pl-3 z-1 h-[44px] font-caveat flex w-full cursor-pointer justify-between rounded-box rounded-xl border-solid border-custom-primary bg-white text-large shadow-sm"/>
                </div>
            </div>
        </div>
    </form>

    )
}
