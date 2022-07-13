.landing-grid {
    display: grid;
    grid-gap: 0.2rem;
    grid-template-columns: 1fr;
    grid-template-rows: repeat(6, 1fr);
    color: #444;
    width: 100%;
    height: 120vh;
}

.a {
    grid-column: 1;
    grid-row: 1;
}

.b {
    grid-column: 1;
    grid-row: 2;
}

.c {
    grid-column: 1;
    grid-row: 3;
}

.d {
    grid-column: 1;
    grid-row: 4;
}

.e {
    grid-column: 1;
    grid-row: 5;
}

.f {
    grid-column: 1;
    grid-row: 6;
}

@media only screen and (min-width: 768px) {
    .landing-grid {
        grid-template-columns: 1fr 1fr 1fr 1fr;
        grid-template-rows: 1fr 1fr 1fr 1fr 1fr 1fr;
    }

    .a {
        grid-column: 1 / span 2;
        grid-row: 1 / span 2;
    }

    .b {
        grid-column: 3 / span 3;
        grid-row: 1 / span 2;
    }

    .c {
        grid-column: 1 /span 2;
        grid-row: 3 / span 2;
    }

    .d {
        grid-column: 3 / span 2;
        grid-row: 3 / span 2;
    }

    .e {
        grid-column: 3 / span 2;
        grid-row: 5 / span 2;
    }

    .f {
        grid-column: 1 / span 2;
        grid-row: 5 / span 2;
    }

}

@media only screen and (min-width: 1200px) {
    .landing-grid--broken.landing-grid {
        grid-template-columns: 1fr 1fr 1fr 1fr;
        grid-template-rows: 1fr 1fr 1fr 1fr 1fr 1fr;
    }

    .landing-grid--broken .a {
        grid-column: 1 / span 3;
        grid-row: 1 / span 2;
    }

    .landing-grid--broken .b {
        grid-column: 4;
        grid-row: 1 / span 4;
    }

    .landing-grid--broken .c {
        grid-column: 1;
        grid-row: 3 / span 2;
    }

    .landing-grid--broken .d {
        grid-column: 2 / span 2;
        grid-row: 3 / span 2;
    }

    .landing-grid--broken .e {
        grid-column: 3 / span 2;
        grid-row: 5 / span 2;
    }

    .landing-grid--broken .f {
        grid-column: 1 / span 2;
        grid-row: 5 / span 2;
    }
}

.landing-grid__item {
    position: relative;
    overflow: hidden;
    color: #fff;
    padding: 1.5rem;
    display: flex;
    justify-content: center;
    align-items: center;
}

.landing-grid__item-bg {
    background-repeat: no-repeat;
    background-size: cover;
    filter: brightness(0.7);
    transition: 200ms;
}

.landing-grid__item:hover> .landing-grid__item-bg {
    transform: scale(1.1);
    filter: brightness(0.62) blur(0px);
}

.landing-grid__icon {
    color: #fff;
    transition: 450ms;
}

.landing-grid__item:hover .landing-grid__icon {
    color: #E21F25;
}

.landing-grid__title {
    text-align: center;
    line-height: 110%;
    margin-bottom: 0;
}