import type { NextConfig } from 'next';

const nextConfig: NextConfig = {
    images: {
        domains: [],
    },
};

if (process.env.NODE_ENV === 'development') {
    process.env.NODE_TLS_REJECT_UNAUTHORIZED = '0';
}

export default nextConfig;
