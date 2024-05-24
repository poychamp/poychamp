<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
</head>
<style>
    * {
        margin: 0;
    }

    *, *::before, *::after {
        box-sizing: border-box;
    }

    html {
      width: 100%;
      height: 100%;
    }

    body {
        margin: 0;
        padding: 0;
        background: transparent;
        -webkit-overflow-scrolling: touch;
        transform: translate3d(0, 0, 0);
        font-family: "Open Sans", sans-serif;
        font-optical-sizing: auto;
        font-weight: 400;
        font-size: 16px;
    }

    p,
    ul,
    ol,
    blockquote {
        line-height: 1.4;
        text-align: left;
    }

    pre {
        font-family: "Open Sans", sans-serif;
    }

    img {
        max-width: 100%;
    }

    a:link {
        color:inherit
    }

    a:active {
        color:inherit
    }

    a:visited {
        color:inherit
    }

    a:hover {
        color:inherit
    }

    h1 {
        font-weight: bold;
        font-size: 2.125rem;
        line-height: 1;
    }

    h2 {
        font-weight: 500;
        font-size: 1.875rem;
        line-height: 1.067;
    }

    h3 {
        font-weight: 500;
        font-size: 1.5rem;
        line-height: 1.083;
    }

    h4 {
        font-weight: 500;
        font-size: 1.25rem;
        line-height: 1.1;
    }

    h5 {
        font-weight: 500;
        font-size: 1.125rem;
        line-height: 1.111;
    }

    h6 {
        font-weight: 500;
        font-size: 1rem;
        line-height: 1.125;
    }

    h1, h2, h3, h4, h5, h6 {
        margin: 0 0 1rem 0;
    }

    p {
      margin-bottom: 1rem;
    }

    a, pre {
      white-space: pre-wrap;
      word-wrap: break-word;
    }

    @media only screen and (max-width: 550px) {
        #content {
            padding: 0 10px;
        }
    }
</style>
<body style="height: 100%;">
  <div style="display: flex; align-items: center; justify-content: center; height: 100%;">
    <div id="content" style="max-width: 100vw; margin: auto;">
      <h1>Champoy's Freelance</h1>
      <h2>Web Development and Programming</h2>
      <h4><?= intval(date('Y')) - 2024 + 7 ?> years’ professional experience</h4>
      <pre>Lot 3E Johnritz Subdivision,
Buena Oro, Macasandig,
Cagayan de Oro,
Misamis Oriental, Mindanao,
Philippines 9000
<a href="tel:+639971285404">(+63) 997 128 5404</a>
<a href="mailto:me@poychamp.com">me@poychamp.com</a>
<a href="https://github.com/poychamp/">https://github.com/poychamp</a>
<a href="https://www.linkedin.com/in/leoncio-cesar-polestico-b005a586/">https://www.linkedin.com/in/leoncio-cesar-polestico-b005a586/</a>
    </pre>
    </div>
  </div>
</body>
</html>
