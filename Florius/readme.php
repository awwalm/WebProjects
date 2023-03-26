<?php
/**
 * Using object-oriented programming, create a class structure based on the following requirements:
 * (Note: each property should be private - meaning it can't be accessed outside the class.)
 * 1. Create a Farm class with a unique name and country.
 * 2. Each Farm should have many Flowers, with name and color as properties for each Flower.
 * 3. Each Flower should have a Length that stores the flower's length in cm.
 * 4. Each Length should have different Boxes. The Box class should have properties that store the name and number of stems per box.
 * 
 * Once we have the structure, show us how we can use it through the following steps:
 * 1. Create a Farm object and set the name to Mullo and country to Ethiopia.
 * 2. Create a Flower object and set the name to Hypericum and color to pink.
 * 3. Add the Flower object to the Farm object.
 * 4. Create Length objects named 70cm and 50cm, then add them to the Flower object.
 * 5. Create two Box objects, set the names to Small and Medium, and the stems to 20 and 30, respectively.
 * 6. Add the small and medium Box objects to the 70cm object.
 * 7. Create another set of small and medium Box objects, set the names to Small and Medium, and the stems to 30 and 40, respectively.
 * 8. Add the second set of small and medium Box object to the 50cm object.
 * 
 * Finally, display the objects you have created.
 * 1. Using the the 50cm small Box object, show the name of the Farm.
 * 2. Using a foreach loop, iterate through each Length object, and iterate through each Box within the Lengths. Then, display the name and number of stems per Box.
 * 3. Convert the farm object to a JSON string with all the objects associated and display them as a JSON string. e.g. {"name": "Mullo", "country": "Ethiopia", "flowers":[..]}
 * 
 */