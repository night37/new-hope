import { Hero } from "../Components/layout/hero/Hero"
import DoubleColumns from "@/Components/doubleColumns/DoubleColumns";
import HighLightAnimals from "@/Components/HighLightAnimals/HighLightAnimals";

export default function Home() {
  return (
    <div>
      <main className="w-full gap-[40px] flex flex-col">
        <Hero/>
        <div className="content-container container mx-auto gap-[40px] flex flex-col">
          <div className="introduction-container flex flex-col gap-[40px]">
            <DoubleColumns 
              columns={[
                {
                  paragraph:
                  {
                    title: "Main dans la patte pour l’adoption",
                    content: "Ensemble, donnons aux animaux de refuge une chance de trouver enfin leur famille, en soutenant les petites associations d’adoption près de chez vous."              

                  }
                },
                {
                  picture: 
                  {
                    src: "/img/chien-triste.png", 
                    alt: "chien avec un regard triste" 
                  }
                }
              ]}
            />
            <DoubleColumns 
              columns={[
                {
                  picture: 
                  {
                    src: "/img/main-patte.png", 
                    alt: "une main tiens une patte de chien" 
                  }
                },
                {
                  paragraph:
                  {
                    title: "Qui sommes-nous?",
                    content: "Avant tout, de simples citoyens touchés par l’engagement sans relâche des petites associations. Nous avons créé cette plateforme pour les soutenir, leur donner la parole, et permettre à chaque animal vulnérable de trouver enfin sa famille."              

                  }
                }
              ]}
            />
          </div>
          <div className="highLight-animal-container flex flex-col gap-[40px]">
            <HighLightAnimals/>
          </div>
        </div>
      </main>
    </div>
  );
}
