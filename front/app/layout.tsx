import type { Metadata } from "next";
import { Caveat, Handlee } from "next/font/google";
import { Header } from "./Partials/header/Header";
import { Footer } from "./Partials/footer/Footer";

import "./globals.scss";

const caveat = Caveat({
  variable: "--font-cavea",
  subsets:["latin"],
  weight: ["500","700"]

})

const handlee = Handlee({
  variable: "--handlee",
  subsets: ["latin"],
  weight: "400"
});



export const metadata: Metadata = {
  title: "New-hope",
  description: "",
};

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <html lang="fr">
      <body
        className={`${caveat.variable} ${handlee.variable} antialiased`}
        >
        <Header font={caveat}/>
        {children}
        <Footer font={caveat}/>
      </body>
    </html>
  );
}
