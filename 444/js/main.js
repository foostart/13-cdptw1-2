$(document).ready(function() {
    if (document.getElementById("price-range")) {

        var nonLinearSlider = document.getElementById('price-range');

        noUiSlider.create(nonLinearSlider, {
            connect: true,
            behaviour: 'tap',
            start: [1, 10000],
            range: {
                // Starting at 500, step the value by 500,
                // until 4000 is reached. From there, step by 1000.
                'min': [0],
                '10%': [1, 10],
                '50%': [100, 100],
                'max': [10000]
            }
        });
        var nodes = [
            document.getElementById('lower-value'), // 0
            document.getElementById('upper-value') // 1
        ];

        // Display the slider value and how far the handle moved
        // from the left edge of the slider.
        nonLinearSlider.noUiSlider.on('update', function(values, handle, unencoded, isTap, positions) {
            nodes[handle].innerHTML = values[handle];
        });

    }
});