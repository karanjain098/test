import "./bootstrap";
import React from "react";
import { createRoot } from "react-dom/client";
import { InertiaApp } from "@inertiajs/inertia-react";
import { InertiaProgress } from "@inertiajs/progress";

const el = document.getElementById("app");
const root = createRoot(el);

root.render(
    <InertiaApp
        initialPage={JSON.parse(el.dataset.page)}
        resolveComponent={(name) =>
            import(`./Pages/${name}`).then((module) => module.default)
        }
    />
);

InertiaProgress.init({
    color: '#ED8936', // Set the color of the progress bar
  
});
