'use client';
import React, { useState, useEffect } from 'react';
import { MapContainer, TileLayer, Popup, Marker, useMap } from 'react-leaflet';
import { StructureListProps } from '@/types/structureListProps.type';
import { useStructureStore } from '@/store/structureStore';
import L from 'leaflet';

import MapUpdater from './MapUpdater';
import 'leaflet/dist/leaflet.css';

export default function Map({ structures }: StructureListProps) {
    const searchParameters = useStructureStore((state) => state.searchParameters);
    const selectedStructureCoordinate = useStructureStore(
        (state) => state.selectedStructureCoordinate
    );

    const [mapCenter, setMapCenter] = useState<[number, number]>([46.616669, 1.85]);
    const [zoom, setZoom] = useState<number>(6);
    console.log(structures);
    useEffect(() => {
        let findCoordinate: [number, number] | null = null;
        let zoom: number = 12;
        Object.keys(searchParameters).forEach((data) => {
            if (searchParameters[data]['centre']) {
                if (data === 'autocomplete-communes') {
                    findCoordinate = [
                        searchParameters[data]['centre']['longitude'],
                        searchParameters[data]['centre']['latitude'],
                    ];
                    zoom = 12;
                } else {
                    findCoordinate = [
                        searchParameters[data]['centre']['latitude'],
                        searchParameters[data]['centre']['longitude'],
                    ];
                    zoom = 8;
                }
            }
        });
        if (selectedStructureCoordinate.latitude || selectedStructureCoordinate.longitude) {
            findCoordinate = [
                selectedStructureCoordinate.latitude,
                selectedStructureCoordinate.longitude,
            ];
            zoom = 12;
        }
        if (findCoordinate) {
            setMapCenter(findCoordinate);
            setZoom(zoom);
        } else {
            setMapCenter([46.616669, 1.85]);
            setZoom(6);
        }
    }, [searchParameters, selectedStructureCoordinate]);

    return (
        <div className="w-full" id="map">
            <MapContainer
                className="h-[300px] w-full md:h-[600px]"
                center={mapCenter}
                zoom={zoom}
                scrollWheelZoom={false}
            >
                <TileLayer
                    attribution='&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                    url="https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
                />
                <MapUpdater center={mapCenter} zoom={zoom} />
                {structures.map(
                    (structure, index) =>
                        structure.latitude !== undefined &&
                        structure.longitude !== undefined && (
                            <Marker
                                key={index}
                                position={[structure.latitude, structure.longitude]}
                                icon={L.icon({
                                        iconUrl: '/img/logo.svg',
                                        iconSize: [25, 41],
                                        iconAnchor: [12, 41],
                                        popupAnchor: [1, -34],
                                        shadowUrl: '/img/logo.svg',
                                        shadowSize: [41, 41]
                                    })}
                            >
                                <Popup>
                                    {structure.name} <br />
                                    {structure.street}<br />
                                    {structure.city}
                                </Popup>
                            </Marker>
                        )
                )}
            </MapContainer>
        </div>
    );
}
