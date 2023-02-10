<link rel="stylesheet" href="https://unpkg.com/terminal.css@0.7.2/dist/terminal.min.css" />
<!-- <link rel="stylesheet" href="https://unpkg.com/terminal.css@0.7.1/dist/terminal.min.css" /> -->
<!-- <link rel="stylesheet" href="/css/normalize.css" /> -->
<!-- <link rel="stylesheet" href="/terminal.min.css" /> -->
<style>
    .components-grid {
        display: grid;
        grid-column-gap: 1.4em;
        grid-template-columns: auto;
        grid-template-rows: auto;
    }

    .image-grid {
        display: grid;
        grid-template-rows: auto;
        display: grid;
        grid-gap: 1em;
        grid-template-rows: auto;
        grid-template-columns: repeat(auto-fit,
                minmax(calc(var(--page-width) / 12), 1fr));
    }

    @media only screen and (min-width: 70em) {
        .components-grid {
            grid-template-columns: 3fr 9fr;
        }
    }
</style>

<style>
    :root {
        --global-font-size: 15px;
        --global-line-height: 1.4em;
        --global-space: 10px;
        --font-stack: Menlo, Monaco, Lucida Console, Liberation Mono,
            DejaVu Sans Mono, Bitstream Vera Sans Mono, Courier New, monospace,
            serif;
        --mono-font-stack: Menlo, Monaco, Lucida Console, Liberation Mono,
            DejaVu Sans Mono, Bitstream Vera Sans Mono, Courier New, monospace,
            serif;
        --background-color: #222225;
        --page-width: 70em;
        --font-color: #e8e9ed;
        --invert-font-color: #222225;
        --secondary-color: #a3abba;
        --tertiary-color: #a3abba;
        --primary-color: #62c4ff;
        --error-color: #ff3c74;
        --progress-bar-background: #3f3f44;
        --progress-bar-fill: #62c4ff;
        --code-bg-color: #3f3f44;
        --input-style: solid;
        --display-h1-decoration: none;
    }
</style>