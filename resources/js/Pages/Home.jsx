import React from 'react';
import { InertiaLink } from '@inertiajs/inertia-react';

const Home = ({ authenticated }) => {
    return (
        <div>
            <h1>Home Paged</h1>
            {authenticated ? (
                <InertiaLink as="button" href="/contact">Go to Contact</InertiaLink>
            ) : (
                <InertiaLink as="button" href="/login">Login</InertiaLink>
            )}
        </div>
    );
};
export default Home;