import Image from "next/image";
import { Hero } from "../Components/hero/Hero"

export default function Home() {
  return (
    <div>
      <main className="w-full">
        <Hero/>
      </main>
    </div>
  );
}
