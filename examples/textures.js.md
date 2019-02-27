---
title: Textures.js
desc: SVG patterns
---
### index.html
```html
<div id="example">
</div>
```
### index.js
```javascript
import * as d3 from "d3";
import textures from 'textures';

var svg = d3.select("#example")
  .append("svg");

var t = textures.lines()
  .thicker()
  .stroke("darkorange");

svg.call(t);

svg.append("circle")
	.style("fill", t.url())
    .attr("cx", 75)
    .attr("cy", 75)
    .attr("r", 60)
    .style("stroke", "darkorange")
    .style("stroke-width", 2);

```

<div class="results" style="align-items: center;">
    <div id="example" style="background-color: #343434;text-align: center;"></div>
</div>

<div class="details">
    <p>This can be used to generate textures for svgs and divs. It's built atop d3, and installed with npm.</p>
    <ul>
        <li><a href="https://riccardoscalco.it/textures/">Home page</a></li>
        <li><a href="https://github.com/d3/d3/wiki">d3 Github</a></li>
    </ul>
</div>
