import './bootstrap';

//This way we're telling vite the location of the images directory so it can be seen in (production) and development
//This is for cache busting
import.meta.glob([
    '../images/**'
]);
