---
title: Textures.js
desc: SVG patterns
---
```javascript
var svg = d3.select("#example")
  .append("svg");

var t = textures.lines()
  .thicker();

svg.call(t);

svg.append("circle")
	.style("fill", t.url());
```
