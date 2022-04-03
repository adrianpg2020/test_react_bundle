import React from "react";
import { renderToString } from "react-dom/server";

function Welcome(props) {
  return <div>Hello, {props.name}</div>;
}

export default (initialProps, context) => {
    const renderedHtml = {
        componentHtml: renderToString(
            <Welcome name="Adrian" />
        ),
    };
    return { renderedHtml };
};
