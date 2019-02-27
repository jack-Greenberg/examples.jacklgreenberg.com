import * as d3 from "d3";
import textures from 'textures';

var svg = d3.select("#example")
  .append("svg")
  .style("width", "150px")
  .style("height", "150px");

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
