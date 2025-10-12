import type { Metadata } from 'next';
import { Caveat, Handlee } from 'next/font/google';
import { Header } from '../Components/layout/header/Header';
import { Footer } from '../Components/layout/footer/Footer';

import './globals.scss';

const caveat = Caveat({
    variable: '--font-caveat',
    subsets: ['latin'],
    weight: ['500', '700'],
});

const handlee = Handlee({
    variable: '--font-handlee',
    subsets: ['latin'],
    weight: '400',
});

export const metadata: Metadata = {
    title: 'New-hope',
    description: '',
};

export default function RootLayout({
    children,
}: Readonly<{
    children: React.ReactNode;
}>) {
    return (
        <html lang="fr" className={`${caveat.variable} ${handlee.variable}`}>
            <body className={`flex min-h-screen flex-col antialiased`}>
                <Header />
                <div className="flex-1">{children}</div>
                <Footer font={caveat} />
            </body>
        </html>
    );
}
