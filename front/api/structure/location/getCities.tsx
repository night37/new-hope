import {query} from '@/api/structure/location/query'

export async function getCities (name: string) {

return  await query("communes", name)

}