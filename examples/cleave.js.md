---
title: Cleave.js
desc: Input formatting
---
### index.html
```html
<input class="js-cleave" type="text" placeholder="YYYY/MM/DD" />
```
### index.js
```javascript
import Cleave from 'cleave.js';

var cleave = new Cleave('.js-cleave', {
    phone: true,
    phoneRegionCode: '{country}'
});
```

<div class="results" style="align-items: center;">
    <input class="js-cleave" type="text" placeholder="YYYY/MM/DD" />
</div>

<div class="details">
    <p>Fairly straight-forward. Also includes options for credit card, phone numbers (with i18n), and manual delimiters/character-blocks.</p>
    <ul>
        <li><a href="https://nosir.github.io/cleave.js/">Cleave.js</a></li>
    </ul>
</div>
