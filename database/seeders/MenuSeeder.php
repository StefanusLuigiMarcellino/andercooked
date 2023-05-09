<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Stuffed Peppers',
            'slug' => 'stuffed-peppers',
            "description" => 'Stuffed peppers hold a special place in our heart. From cheesesteak stuffed peppers to vegetarian stuffed peppers, this versatile veggie is one of our favorites to experiment with. Strong enough to hold their shape, peppers are large enough to hold a decent amount of filling while taking to a variety of flavors—they are the perfect vessel for a variety of fillings and ingredients.',
            'published_at' => '2023-03-08',
            'total_of_likes' => 78,
            'ingredients' => '1/2 c. uncooked rice
2 tbsp. extra-virgin olive oil, plus more for drizzling
1 medium onion, chopped
2 tbsp. tomato paste
3 cloves garlic, minced
1 lb. ground beef
1 (14.5-oz.) can diced tomatoes
1 1/2 tsp. dried oregano
Kosher salt
Freshly ground black pepper
6 bell peppers, tops and cores removed
1 c. shredded Monterey jack
Freshly chopped parsley, for garnish',
            'cooking_steps' => 'Step 1, Preheat oven to 400°. In a small saucepan, prepare rice according to package instructions. In a large skillet over medium heat, heat oil. Cook onion until soft, about 5 minutes. Stir in tomato paste and garlic and cook until fragrant, about 1 minute more. Add ground beef and cook, breaking up meat with a wooden spoon, until no longer pink, 6 minutes. Drain fat.
Step 2, Return beef mixture to skillet, then stir in cooked rice and diced tomatoes. Season with oregano, salt, and pepper. Let simmer until liquid has reduced slightly, about 5 minutes.
Step 3, Place peppers cut side-up in a 9"-x-13" baking dish and drizzle with oil. Spoon beef mixture into each pepper and top with Monterey jack, then cover baking dish with foil.
Step 4, Bake until peppers are tender, about 35 minutes. Uncover and bake until cheese is bubbly, 10 minutes more.
Step 5, Garnish with parsley before serving.',
            'calories' => 427,
            'carbohydrates' => 158,
            'protein' => 248,
            'fat' => 312,
            'menu_pics' => '1.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Best Guacamole',
            'slug' => 'best-guacamole',
            "description" => 'Whether you serve it as a simple dip, load it on top of your tacos, or smear it on a bun as a burger topping, we can all agree—it`s not a party without Mexico`s most famous dip. Though some recipes like to go wild with the mix-ins, we prefer to keep it simple to really let the avocados shine.',
            'published_at' => '2023-03-28',
            'total_of_likes' => 5,
            'ingredients' => '3 avocados, pitted
1 small jalapeño, seeds removed if desired, finely chopped
1/4 c. chopped fresh cilantro, plus more for serving
1/4 c. small white or red onion, finely chopped
Juice of 1 lime
1/2 tsp. (or more) kosher salt
Tortilla chips, for serving',
            'cooking_steps' => 'Step 1, In a large bowl, mix avocados, jalapeño, cilantro, onion, lime juice, and salt, then slowly turn bowl as you run a fork through mixture (this will ensure guacamole stays chunky) until desired consistency is reached; season with salt, if needed.
Step 2, Top with more cilantro. Serve with tortilla chips alongside.',
            'calories' => 217,
            'carbohydrates' => 40,
            'protein' => 12,
            'fat' => 153,
            'menu_pics' => '2.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Everything Bagel Crusted Salmon',
            'slug' => 'everything-bagel-crusted-salmon',
            "description" => 'A fluffy, chewy, everything bagel topped with cream cheese, smoked salmon, and all the fixin`s is my idea of a solid brunch. It`s time to bring the brunch vibes to dinnertime with everything bagel seasoning crusted salmon and a refreshing salad that`s reminiscent of the toppings on your favorite loaded lox sandwich. And if you`ve never turned cream cheese into a salad dressing, now is the time to start.
            If you don`t have everything bagel seasoning at your local grocery store, do not despair! We`ve got the recipe for the most delicious version of this savory, seedy blend.',
            'published_at' => '2023-02-25',
            'total_of_likes' => 2,
            'ingredients' => '4 (6-oz.) skin-on salmon fillets
Kosher salt
Freshly ground black pepper
2 tbsp. spicy harissa paste
3 tbsp. everything bagel seasoning
3 tbsp. extra-virgin olive oil, divided
1 1/2 oz. cream cheese (about 3 tbsp.), softened
1 small shallot, finely chopped, divided
1/4 c. coarsely chopped fresh dill, divided
2 tbsp. fresh lemon juice, divided
12 oz. arugula
6 oz. cherry tomatoes, halved
1 mini cucumber, sliced into 1/4"-thick rounds
1 tbsp. drained capers, coarsely chopped
1 oz. thin bagel chips',
            'cooking_steps' => 'Step 1, Arrange a rack in center of oven; preheat to 450°. Place a large cast-iron skillet on rack to preheat.
Step 2, Pat salmon dry; season all over with 1 teaspoon salt and a pinch of pepper. Spread harissa onto salmon flesh. Sprinkle each fillet with everythibagel seasoning.
Step 3, Carefully remove skillet from oven and drizzle with 2 tablespoons oil. Arrange salmon in skillet skin side down. Bake until flesh becomes opaque aeasily flakes with a fork, 10 to 12 minutes.
Step 4, Meanwhile, in a small bowl, whisk cream cheese, half of shallot, 1 tablespoon dill, 1 tablespoon lemon juice, 2 tablespoons water, and remainingtablespoon oil until smooth; season with a pinch of salt. In another small bowl, soak remaining shallots with remaining 1 tablespoon lemon juice.
Step 5, In a large bowl, toss arugula, tomato, cucumber, capers, marinated shallots, and remaining 3 tablespoons dill. Add half of dressing, toss combine, and top with bagel chips.
Step 6, Divide salmon among plates. Serve with salad and remaining dressing alongside.',
            'calories' => 569,
            'carbohydrates' => 52,
            'protein' => 160,
            'fat' => 156,
            'menu_pics' => '3.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Watermelon Quinoa Salad',
            'slug' => 'watermelon-quinoa-salad',
            "description" => 'We love to snack on bites of watermelon all summer long, but one of our favorite ways to enjoy the juicy, sweet fruit is in a refreshing salad. If you`re looking to bulk up the classic watermelon salad, this watermelon quinoa salad will be your new go-to. With mint, feta, red onion, cucumber, and a balsamic glaze, it`   s got everything you love about the traditional summer salad, but with an additional protein boost from one of our favorite grains, fluffy and nutritious quinoa. Perfect for a more-filling BBQ side or a light and refreshing summer lunch, this creative take on a classic is truly anything but boring.',
            'published_at' => '2023-03-22',
            'total_of_likes' => 1,
            'ingredients' => '2 c. quinoa, cooked and cooled
3 c. watermelon, cut in 1/2-inch cubes
1 c. cucumber, cut into 1/2-inch cubes
1/2 small red onion, thinly sliced
1/2 c. feta
1/2 c. mint leaves, torn
1/4 c. balsamic glaze
Kosher salt',
            'cooking_steps' => 'Step 1, Toss all ingredients together, reserving some feta, mint, and balsamic for garnish. Season with salt and top with extra feta, mint, and balsamic glaze.
Step 2, Serve',
            'calories' => 282,
            'carbohydrates' => 164,
            'protein' => 44,
            'fat' => 54,
            'menu_pics' => '4.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Avocado Tomato Salad',
            'slug' => 'avocado-tomato-salad',
            "description" => 'Don`t confuse this colorful salad with guac—there`s way more depth of flavor and variety of texture, which makes it one of our favorite summer sides of all time. But the real beauty? You`re totally welcome to still eat it with tortilla chips.',
            'published_at' => '2023-03-23',
            'total_of_likes' => 13,
            'ingredients' => '1/4 c. extra-virgin olive oil
Juice of 1 lemon
1/4 tsp. ground cumin
Kosher salt
Freshly ground black pepper
3 avocados, cubed
1 pt. cherry tomatoes, halved
1 small cucumber, sliced into half moons
1/3 c. corn
1 jalepeño, minced (optional)
2 tbsp. freshly chopped cilantro',
            'cooking_steps' => 'Step 1, In a small bowl, whisk together oil, lemon juice, and cumin. Season dressing with salt and pepper.
Step 2, In a large serving bowl, combine avocados, tomatoes, cucumber, corn, jalapeño, and cilantro.
Step 3, Gently toss with dressing and serve immediately. ',
            'calories' => 401,
            'carbohydrates' => 40,
            'protein' => 20,
            'fat' => 324,
            'menu_pics' => '5.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Baked Kale Chips',
            'slug' => 'baked-kale-chips',
            "description" => 'Imagine being able to munch as many crunchy snacks as you want while you`re binging that show you love without feeling guilty later. That`s the beauty of these homemade baked kale chips. Made by quickly tossing together three simple ingredients fresh kale, olive oil, and flaked sea salt and baked low and slow for only 20 minutes, these crispy kale chips are easy to make, there are no mystery additives, and even fussy eaters snap them up.',
            'published_at' => '2023-02-15',
            'total_of_likes' => 27,
            'ingredients' => '1 bunch kale
1 tablespoon olive oil
1 teaspoon flaked sea salt',
            'cooking_steps' => 'Step 1, Gather all ingredients.
Step 2, Preheat an oven to 300 degrees F (150 degrees C). Line a rimmed baking sheet with parchment paper.
Step 3, With a knife or kitchen shears carefully remove kale leaves from the thick stems and tear into bite size pieces.
Step 4, Wash and thoroughly dry kale with a salad spinner.
Step 5, Drizzle kale leaves with olive oil and toss to combine. Spread out in an even layer on the baking sheet without overlapping and sprinkle with salt.
Step 6, Bake until the edges start to brown but are not burnt, 20 to 30 minutes.
Step 7, Serve.',
            'calories' => 58,
            'carbohydrates' => 32,
            'protein' => 12,
            'fat' => 27,
            'menu_pics' => '6.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Shrimp Salsa',
            'slug' => 'shirmp-salsa',
            "description" => 'This is an awesomely simple, light, and refreshing salsa that goes great with tortilla chips.',
            'published_at' => '2023-03-20',
            'total_of_likes' => 14,
            'ingredients' => '½ pound salad shrimp
2 roma (plum) tomatoes, diced
½ red onion, diced
¼ cup minced cilantro
¼ cup fresh lime juice
1 teaspoon salt
1 teaspoon freshly ground black pepper
1 clove garlic, minced',
            'cooking_steps' => 'Step 1, Stir the salad shrimp, tomatoes, onion, cilantro, lime juice, salt, pepper, and garlic together in a large glass bowl.
Step 2, Cover with plastic wrap and refrigerate until the flavors combine, at least 1 hour.
Step 3, Serve cold.',
            'calories' => 26,
            'carbohydrates' => 8,
            'protein' => 16,
            'fat' => 0,
            'menu_pics' => '7.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Thai Basil Rolls with Hoisin-Peanut Sauce',
            'slug' => 'thai-basil-rolls-with-hosin-peanut-sauce',
            "description" => 'Shrimp and pork - layered with rice noodles, bean sprouts, and herbs - all rolled together in a fresh rice wrapper and served with a hoisin-peanut sauce for dipping. Great for an appetizer or lunch!',
            'published_at' => '2023-02-14',
            'total_of_likes' => 29,
            'ingredients' => 'Rolls
½ pound medium shrimp
½ pound pork loin
1 (8 ounce) package rice noodles
12 round rice wrapper sheets
1 bunch fresh Thai basil - leaves picked from stems
1 cup chopped fresh cilantro
1 cup chopped fresh mint
2 cups bean sprouts
Sauce
1 cup hoisin sauce
1 tablespoon creamy peanut butter
1 tablespoon water
chopped roasted peanuts',
            'cooking_steps' => 'Step 1, Bring a medium stockpot of lightly salted water to a low boil. Cook shrimp 2 to 3 minutes, or until opaque. Drain, allow to cool slightly, and pat dry with paper towel. Peel, devein, and slice in half.
Step 2, Bring another stockpot of lightly salted water to a boil. Cook pork at a low boil for approximately 10 minutes, to an internal temperature of 145 degrees F (63 degrees C). Allow to cool, and slice into thin strips.
Step 3, Again, bring a stockpot of water to a boil. Cook noodles until tender, stirring occasionally, approximately 7 to 8 minutes. Strain, and rinse to prevent sticking.
Step 4, Fill a medium bowl with warm water. Dip each wrapper in water for about 30 seconds until soft and flexible. Lay wrapper on a flat surface, and place 2 basil leaves in center, side by side, about 2 inches from edge of wrapper. Lay 4 to 5 shrimp halves on basil, followed by a small amount of pork, then a small amount of noodles. Sprinkle with cilantro, mint, and top with bean sprouts. Starting at one end, roll the wrapper over once, fold both sides in toward center, and continue rolling as tightly as possible without tearing. The end result should be a roll approximately 1 to 1 1/2 inches thick.
Step 5, Warm hoisin sauce, peanut butter, and water in a saucepan over medium-high heat. Bring to a boil, and immediately remove from heat. Garnish sauce with chopped peanuts, if desired, and serve with rolls for dipping.',
            'calories' => 195,
            'carbohydrates' => 116,
            'protein' => 40,
            'fat' => 36,
            'menu_pics' => '8.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Healthier Sloppy Joes II',
            'slug' => 'healthier-sloppy-joes-ii',
            "description" => 'This healthier version of sloppy joes includes more veggies and real garlic. Be sure to serve on whole wheat buns!',
            'published_at' => '2023-03-10',
            'total_of_likes' => 43,
            'ingredients' => '1 pound lean ground beef
¼ cup chopped onion
¼ cup chopped green bell pepper
2 carrots, finely chopped
2 cloves garlic, minced
1 teaspoon prepared yellow mustard
¾ cup ketchup
1 tablespoon brown sugar
salt and ground black pepper to taste',
            'cooking_steps' => 'Step 1, Heat skillet over medium-high heat;
Step 2, Cook and stir beef, onion, green bell pepper, carrots, and garlic until beef is browned, about 10 minutes.
Step 3, Drain off liquids.
Step 4, Stir in mustard, ketchup, and brown sugar and mix thoroughly. Reduce heat to low and simmer until sauce has thickened, about 30 minutes.
Step 5, Season with salt and pepper.',
            'calories' => 252,
            'carbohydrates' => 52,
            'protein' => 56,
            'fat' => 144,
            'menu_pics' => '9.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Maple Salmon',
            'slug' => 'maple-salmon',
            "description" => 'This maple glazed salmon is delicious and very easy to prepare. I love maple syrup in everything and decided to use it in the marinade. My husband totally loved it; he wasn`t a salmon fan until now.',
            'published_at' => '2023-03-12',
            'total_of_likes' => 21,
            'ingredients' => '¼ cup maple syrup
2 tablespoons soy sauce
1 clove garlic, minced
¼ teaspoon garlic salt
⅛ teaspoon ground black pepper
1 pound salmon',
            'cooking_steps' => 'Step 1, Stir maple syrup, soy sauce, garlic, garlic salt, and pepper together in a small bowl.
Step 2, Cut salmon into 4 equal-sized fillets; place in a shallow glass baking dish and coat with maple syrup mixture.
Step 3, Cover the dish and marinate salmon in the refrigerator for 30 minutes, turning once halfway.
Step 4, Preheat the oven to 400 degrees F (200 degrees C).
Step 5, Place the baking dish in the preheated oven and bake salmon uncovered until flesh easily flakes with a fork, about 20 minutes.',
            'calories' => 265,
            'carbohydrates' => 56,
            'protein' => 92,
            'fat' => 108,
            'menu_pics' => '10.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Vegetarian Sheet Pan Dinner with Chickpeas and Veggies',
            'slug' => 'vegetarian-sheet-pan-dinner-with-chickpeas-and-veggies',
            "description" => 'Adding chickpeas to root vegetables on a sheet pan makes for an easy dinner! Make sure to cut all the vegetables the same size or they won`t cook properly!',
            'published_at' => '2023-01-02',
            'total_of_likes' => 31,
            'ingredients' => '2 (15 ounce) cans chickpeas, rinsed and drained
½ butternut squash - peeled, seeded, and cut into 1-inch pieces
1 onion, diced
1 sweet potato, peeled and cut into 1-inch cubes
2 large carrots, cut into 1 inch pieces
3 medium russet potatoes, cut into 1-inch pieces
3 tablespoons vegetable oil
1 teaspoon salt
½ teaspoon ground black pepper
1 teaspoon onion powder
1 teaspoon garlic powder
1 teaspoon ground fennel seeds
1 teaspoon dried rubbed sage
2 green onions, chopped (Optional)',
            'cooking_steps' => 'Step 1, Preheat the oven to 350 degrees F (175 degrees C). Grease a large sheet pan.
Step 2, Place chickpeas, butternut squash, onion, sweet potato, carrots, and russet potatoes on the prepared sheet pan. Drizzle with vegetable oil and toss to coat.
Step 3, Combine salt, black pepper, onion powder, garlic powder, ground fennel seeds, and rubbed sage in a bowl. Sprinkle over vegetables on the sheet pan and toss to coat.
Step 4, Bake in the preheated oven for 25 minutes. Stir and bake until vegetables are soft and lightly browned and chickpeas are slightly crisp, 20 to 25 minutes more. Season with additional salt and black pepper to taste, and top with chopped green onion before serving.',
            'calories' => 273,
            'carbohydrates' => 200,
            'protein' => 28,
            'fat' => 54,
            'menu_pics' => '11.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Sheet Pan Citrus and Sage Chicken with Roasted Broccoli and Potatoes',
            'slug' => 'sheet-pan-citrus-and-sage-chicken-with-roasted-broccoli-and-potatoes',
            "description" => 'A whole meal made on one baking sheet! Clementine and sage are the main flavor components in this dish, but can be subbed for other citrus, herbs, or spices to change it up.',
            'published_at' => '2023-02-19',
            'total_of_likes' => 11,
            'ingredients' => '1 pound skinless, boneless chicken breast halves
1 pound small red potatoes, halved
1 tablespoon olive oil, or to taste
1 bunch fresh sage, chopped, or to taste, divided
salt and ground black pepper to taste
½ cup Italian-seasoned bread crumbs
¼ cup grated Parmesan cheese
3 clementines
¼ cup fresh lemon juice, or as needed
2 tablespoons melted butter
1 teaspoon Italian seasoning
¾ teaspoon garlic powder, or to taste, divided
2 cups broccoli florets
2 clementines, sliced',
            'cooking_steps' => 'Step 1, Preheat the oven to 450 degrees F (230 degrees C). Line a rimmed baking sheet with parchment paper or a silicone mat.
Step 2, Slice chicken breasts into 3 or 4 tenders about 2 inches wide.
Step 3, Toss potatoes with olive oil to coat; sprinkle with 1/3 the sage. Season with salt and pepper. Lay potatoes in a single layer on the prepared baking sheet.
Step 4, Bake in the preheated oven until golden, 20 to 25 minutes.
Step 5, Combine bread crumbs, Parmesan cheese, and another 1/3 the sage in a shallow bowl.
Step 6, Zest, halve, and juice 3 clementines. Add enough lemon juice to make 1/2 cup of citrus juice. Quarter juiced clementines; reserve.
Step 7, Combine citrus juice, melted butter, Italian seasoning, and 1/2 teaspoon garlic powder in another bowl. Dip chicken tenders one at a time into the juice mixture; coat with the bread crumb mixture.
Step 8, Toss broccoli with the remaining juice mixture and sage.
Step 9, Reduce oven temperature to 400 degrees F (200 degrees C).
Step 10, Scrape potatoes from the pan using a spatula; toss slightly to make room for chicken and broccoli. Add the coated chicken and top with 2 sliced clementines. Add broccoli in a single layer. Sprinkle remaining garlic powder on top; season with salt and pepper. Scatter reserved clementine quarters around the pan.
Step 11, Bake in the preheated oven until chicken is golden and broccoli is crispy and browned on the edges, about 20 minutes. An instant-read thermometer inserted into the chicken should read at least 165 degrees F (74 degrees C).',
            'calories' => 441,
            'carbohydrates' => 188,
            'protein' => 124,
            'fat' => 135,
            'menu_pics' => '12.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Easy Sheet Pan Beef Bulgogi',
            'slug' => 'easy-sheet-pan-beef-bulgogi',
            "description" => 'Learn how to cook beef bulgogi on a sheet pan in a super hot oven to deliver a delicious weeknight meal. For best results, you`ll want some meat with marbling. Serve over rice.',
            'published_at' => '2023-01-27',
            'total_of_likes' => 76,
            'ingredients' => '1 ½ pounds flat iron steak
¼ cup soy sauce
1 tablespoon brown sugar
1 tablespoon fish sauce
1 tablespoon minced ginger
1 tablespoon sesame oil
1 tablespoon chile paste
2 teaspoons sesame seeds
2 cloves garlic, minced
cooking spray
1 onion, sliced
1 (8 ounce) package sugar snap peas
2 tablespoons olive oil, or as needed
1 pinch salt and ground black pepper to taste
1 bunch green onions, thinly sliced on the diagonal',
            'cooking_steps' => 'Step 1, Slice steak across the grain as thinly as possible. Place soy sauce, brown sugar, fish sauce, ginger, sesame oil, chile paste, sesame seeds, and garlic in a large bowl; mix well. Add steak and marinate in the refrigerator for 1 hour to overnight.
 Step 2, Preheat the oven to 450 degrees F (230 degrees C). Remove steak from the refrigerator and bring to room temperature.
 Step 3, Spray a sheet pan with cooking spray. Arrange onion and sugar snap peas on one side of the prepared pan. Drizzle with enough olive oil to coat and season with salt and pepper. Gently shake off excess marinade on steak and place on the other side of the prepared pan.
 Step 4, Bake in the preheated oven until steak is slightly charred on the edges, 10 to 12 minutes. Garnish with green onions.',
            'calories' => 339,
            'carbohydrates' => 52,
            'protein' => 104,
            'fat' => 189,
            'menu_pics' => '13.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Best Turkey Meatloaf',
            'slug' => 'best-turkey-meatloaf',
            "description" => 'For a healthier turkey meatloaf, after much trial and error I came up with this recipe. It`s important to make this on a jelly-roll pan (rimmed baking sheet) so the liquids can be drained off. Also, don`t put the topping on before the meatloaf has cooked for 30 minutes; ground turkey creates a lot of juices, so if you put the topping on first it will become watery and runny.',
            'published_at' => '2023-03-22',
            'total_of_likes' => 87,
            'ingredients' => 'Meatloaf:
1 ½ pounds ground turkey
¾ cup crushed buttery round crackers
½ cup milk
1 small onion, chopped
1 egg
2 cloves garlic, minced
1 ½ teaspoons salt
¼ teaspoon ground black pepper
Topping:
½ cup ketchup
¼ cup brown sugar
1 tablespoon Worcestershire sauce',
            'cooking_steps' => 'Step 1, Preheat the oven to 350 degrees F (175 degrees C). Lightly grease a jelly-roll pan.
Step 2, Mix ground turkey, crushed crackers, milk, onion, egg, garlic, salt, and black pepper in a bowl. Shape mixture into a loaf and place on the prepared pan.
Step 3, Mix ketchup, brown sugar, and Worcestershire sauce in a separate bowl; set aside.
Step 4, Bake meatloaf in preheated oven for 30 minutes; remove from the oven and drain off liquids. Top meatloaf with ketchup topping.
Step 5, Return loaf to the oven and continue baking until no longer pink in the center, about 30 minutes more; an instant-read thermometer inserted into the center should read at least 160 degrees F (71 degrees C).',
            'calories' => 296,
            'carbohydrates' => 100,
            'protein' => 80,
            'fat' => 117,
            'menu_pics' => '14.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Garlic Chicken Stir Fry',
            'slug' => 'garlic-chicken-stir-fry',
            "description" => 'A stir fry recipe I developed to satisfy a family of garlic lovers.',
            'published_at' => '2023-02-22',
            'total_of_likes' => 65,
            'ingredients' => '2 tablespoons peanut oil
6 cloves garlic, minced
1 teaspoon grated fresh ginger
1 bunch green onions, chopped
1 teaspoon salt
1 pound boneless skinless chicken breasts, cut into strips
2 onions, thinly sliced
1 cup sliced cabbage
1 red bell pepper, thinly sliced
2 cups sugar snap peas
1 cup chicken broth
2 tablespoons soy sauce
2 tablespoons white sugar
2 tablespoons cornstarch',
            'cooking_steps' => 'Step 1, Heat peanut oil in a wok or large skillet.
Step 2, When oil begins to smoke, quickly stir in 2 cloves minced garlic, ginger root, green onions and salt.
Step 3, Stir fry until onion becomes translucent, about 2 minutes.
Step 4, Add chicken and stir until opaque, about 3 minutes.
Step 5, Add remaining 4 cloves minced garlic and stir.
Step 6, Add sweet onions, cabbage, bell pepper, peas and 1/2 cup of the broth/water and cover.
Step 7, In a small bowl, mix the remaining 1/2 cup broth/water, soy sauce, sugar and cornstarch.
Step 8, Add sauce mixture to wok/skillet and stir until chicken and vegetables are coated with the thickened sauce.
Step 9, Serve immediately, over hot rice if desired.',
            'calories' => 337,
            'carbohydrates' => 128,
            'protein' => 128,
            'fat' => 81,
            'menu_pics' => '15.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Spiralized Cucumber and Jicama Tostada Salad with Avocado',
            "description" => 'Amaze your friends with these easy-to-make spiralized veggies atop a creamy avocado-based tostada. Perfect for the summertime, paired with your favorite margarita. Change up the veggies or the dressing to suit your taste.',
            'published_at' => '2023-02-08',
            'total_of_likes' => 34,
            'ingredients' => '1 jicama, cut into spirals
1 English cucumber, cut into spirals
½ red onion, cut into spirals
2 mini sweet bell peppers, cut into matchstick pieces
1 large jalapeno, cut into spirals
1 lime, juiced
1 tablespoon avocado oil
2 avocados, mashed
1 pinch garlic salt, or to taste
4 prepared tostada shells
10 grape tomatoes, halved
¼ cup chopped cilantro (Optional)
1 lime, cut into wedges',
            'cooking_steps' => 'Step 1, Place jicama, cucumber, red onion, and bell peppers together in a mixing bowl.
Step 2, Toss with lime juice and avocado oil until combined; refrigerate until chilled, about 20 minutes.
Step 3, Season the mashed avocado with garlic salt.
Step 4, Spread the avocado mixture evenly over tostada shells.
Step 5, Top evenly with jicama mixture and grape tomatoes.
Step 6, Garnish with cilantro and serve with lime wedges.',
            'calories' => 175,
            'carbohydrates' => 112,
            'protein' => 12,
            'fat' => 54,
            'menu_pics' => '16.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Claire`s Curried Butternut Squash Soup',
            "description" => 'So easy and so perfect for fall, this one`s from the collection I created for my kiddo when she was a starving college student. I top it with toasted pumpkin seeds or curried almonds.',
            'published_at' => '2023-02-07',
            'total_of_likes' => 2,
            'ingredients' => '1 butternut squash
1 tablespoon olive oil, or as needed
1 onion, chopped
1 shallot, minced
2 tablespoons curry powder, or more to taste
1 teaspoon ground turmeric
1 apple, cored and chopped
1 slice fresh ginger, minced
water to cover
1 (14 ounce) can coconut milk
salt to taste',
            'cooking_steps' => 'Step 1, Preheat oven to 350 degrees F (175 degrees C). Pierce butternut squash and place on a baking sheet.
Step 2, Bake in the preheated oven until tender, about 45 minutes. Allow squash to cool until easily handled; cut in half, scoop the seeds, peel, and chop the flesh.
Step 3, Heat olive oil in a skillet over medium heat; cook and stir onion and shallot until translucent, about 10 minutes. Add curry powder and turmeric and cook until evenly coated, about 2 minutes.
Step 4, Mix squash, apple, and ginger into onion mixture; add enough water to cover. Bring liquid to a boil, reduce heat to medium-low, and simmer until squash and apples are softened, about 15 minutes. Mash soup using a potato masher or blend with an immersion blender until squash is broken up.
Step 5, Mix coconut milk and salt into soup and simmer until heated through, about 3 minutes more.',
            'calories' => 388,
            'carbohydrates' => 176,
            'protein' => 24,
            'fat' => 225,
            'menu_pics' => '17.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Zucchini Artichoke Summer Salad',
            "description" => 'I made up this salad because our garden is simply overflowing with zucchini! We ate it as a main dish for dinner tonight with Italian seasoning-covered rolls on the side, but it could easily be eaten as a side dish.',
            'published_at' => '2023-01-14',
            'total_of_likes' => 8,
            'ingredients' => '2 skinless, boneless chicken breast halves
salt and ground black pepper to taste
6 tablespoons olive oil, divided
4 zucchini, cut into 1 1/2-inch sticks
1 (15 ounce) can garbanzo beans, drained and rinsed
1 (6 ounce) can black olives, drained and sliced
1 (14 ounce) can artichoke hearts, drained and chopped
½ cup grated Parmesan cheese',
            'cooking_steps' => 'Step 1, Season both sides of chicken breasts with salt and black pepper.
Step 2, Heat 2 tablespoons olive oil in a skillet over medium heat; cook chicken breasts in the hot oil until they are no longer pink in the center and juices run clear, 5 to 10 minutes per side. An instant-read thermometer inserted into the thickest part of a breast should read at least 165 degrees F (74 degrees C). Cut chicken into 1/2-inch cubes and transfer to a large bowl.
Step 3, Heat remaining 4 tablespoons olive oil in the same skillet over medium heat; cook and stir zucchini in the hot oil until slightly tender, about 5 minutes. Season with salt and black pepper. Transfer zucchini to a paper towel-lined plate to drain.
Step 4, Mix zucchini, garbanzo beans, olives, artichoke hearts, and Parmesan cheese with chicken; toss to combine. Chill in refrigerator before serving, about 1 hour.',
            'calories' => 312,
            'carbohydrates' => 80,
            'protein' => 60,
            'fat' => 180,
            'menu_pics' => '18.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Ratatouille',
            "description" => 'This easy ratatouille recipe is a terrific side dish that`s loaded with healthy vegetables.',
            'published_at' => '2023-02-17',
            'total_of_likes' => 82,
            'ingredients' => '2 tablespoons olive oil, divided
3 cloves garlic, minced
1 eggplant, cut into 1/2 inch cubes
2 teaspoons dried parsley
salt to taste
1 cup grated Parmesan cheese
2 zucchini, sliced
2 large tomatoes, chopped
2 cups sliced fresh mushrooms
1 large onion, sliced into rings
1 green bell pepper, sliced',
            'cooking_steps' => 'Step 1, Preheat the oven to 350 degrees F (175 degrees C). Coat the bottom and sides of a 1 1/2-quart casserole dish with 1 tablespoon olive oil.
Step 2, Heat remaining 1 tablespoon olive oil in a medium skillet over medium heat. Cook and stir garlic until fragrant and golden brown. Add eggplant and parsley; cook and stir until eggplant is tender and soft, about 10 minutes. Season with salt to taste.
Step 3, Spread eggplant mixture evenly across the bottom of the prepared casserole dish; sprinkle with a few tablespoons of Parmesan cheese. Spread zucchini in an even layer over top. Lightly salt and sprinkle with a little more cheese. Continue layering in this fashion, with tomatoes, mushrooms, onion, and bell pepper, covering each layer with a sprinkling of salt and cheese.
Step 4, Bake in preheated oven until vegetables are tender, 45 minutes.',
            'calories' => 251,
            'carbohydrates' => 96,
            'protein' => 52,
            'fat' => 126,
            'menu_pics' => '19.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'White Chili II',
            "description" => 'This recipe can be made in a slow cooker, or on the stove top. White corn chips and shredded Jack cheese complete the meal. This is a nice low fat meal.',
            'published_at' => '2023-03-20-',
            'total_of_likes' => 46,
            'ingredients' => '1 ½ pounds skinless, boneless chicken breast halves - cubed
1 bunch green onions, thinly sliced
1 red bell pepper, chopped
1 yellow bell pepper, chopped
4 fresh jalapeno peppers, seeded and minced
1 clove garlic, minced
½ teaspoon ground ginger
½ teaspoon salt
½ teaspoon dried sage
½ teaspoon ground cumin
½ teaspoon ground white pepper
1 tablespoon olive oil
3 tablespoons butter
¼ cup all-purpose flour
2 cups chicken broth
2 (14 ounce) cans great Northern beans, undrained',
            'cooking_steps' => 'Step 1, In a large skillet, heat olive oil over medium heat. Add chicken, and saute until cooked through. Remove the chicken from the pan.
Step 2, Saute the onion, red bell pepper, yellow bell pepper, jalapeno chile peppers and garlic in the same skillet. Return the chicken, along with the ginger, salt, sage, cumin and white pepper. Mix thoroughly.
Step 3, In a separate small saucepan or skillet, melt butter or margarine over medium heat. Stir in flour to make a roux. Whisk in the chicken broth and mix all together. Stir this mixture into the sauteed chicken and vegetables.
Step 4, Stir in the beans with can liquid, and simmer all over low heat for 15 to 20 minutes or until cooked and heated through.',
            'calories' => 396,
            'carbohydrates' => 152,
            'protein' => 152,
            'fat' => 90,
            'menu_pics' => '20.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Vegan Pumpkin Pancakes',
            "description" => 'These vegan pancakes take on a hint of fall with the savory goodness of pumpkin, cinnamon, and pecans! Serve with toppings of choice, including additional pecans and maple syrup.',
            'published_at' => '2023-02-16',
            'total_of_likes' => 7,
            'ingredients' => '2 cups almond milk
2 tablespoons distilled white vinegar
5 tablespoons water
2 tablespoons flaxseed meal
2 cups all-purpose flour
2 tablespoons coconut sugar
1 tablespoon baking powder
1 tablespoon ground cinnamon
2 teaspoons baking soda
1 teaspoon salt
1 cup pumpkin puree
2 tablespoons coconut oil
¼ cup toasted chopped pecans',
            'cooking_steps' => 'Step 1, Combine almond milk and vinegar together in a measuring cup; set aside for 10 minutes.
Step 2, Combine water and flaxseed meal together in a bowl; allow to rest until gelatinous, about 5 minutes.
Step 3, Combine flour, coconut sugar, baking powder, cinnamon, baking soda, and salt in a medium bowl.
Step 4, Add almond milk mixture, flaxseed meal mixture, pumpkin puree, and coconut oil to the bowl with the flour mixture. Mix until well blended. Fold in pecans.
Step 5, Heat a lightly oiled griddle over medium-high heat. Drop batter by large spoonfuls onto the griddle and cook until bubbles form and the edges are dry, 3 to 4 minutes. Flip and cook until browned on the other side, 2 to 3 minutes. Repeat with remaining batter.',
            'calories' => 288,
            'carbohydrates' => 180,
            'protein' => 24,
            'fat' => 90,
            'menu_pics' => '21.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Quinoa Black Bean Burgers',
            "description" => 'These vegetarian black bean and quinoa burgers are delicious! Your carnivorous friends will be impressed. My favorite way to serve them is on a whole wheat bun with garlic-lemon mayonnaise, fresh spinach leaves, sliced tomato, and caramelized onions.',
            'published_at' => '2023-03-30',
            'total_of_likes' => 26,
            'ingredients' => '¼ cup quinoa
½ cup water
1 (15 ounce) can black beans, rinsed and drained
½ cup bread crumbs
¼ cup minced yellow bell pepper
1 large egg
2 tablespoons minced onion
1 large clove garlic, minced
1 ½ teaspoons ground cumin
½ teaspoon salt
1 teaspoon hot pepper sauce (such as Frank`s RedHot®)
3 tablespoons olive oil',
            'cooking_steps' => 'Step 1, Bring quinoa and water to a boil in a saucepan. Reduce heat to medium-low, cover, and simmer until quinoa is tender and water has been absorbed, about 15 to 20 minutes.
Step 2, Roughly mash black beans with a fork, leaving some whole black beans, to form a paste-like mixture. Mix quinoa, bread crumbs, bell pepper, egg, onion, garlic, cumin, salt, and hot pepper sauce into black beans using your hands. Form black bean mixture into 5 patties.
Step 3, Heat olive oil in a large skillet.
Step 4, Cook patties in hot oil until heated through, 2 to 3 minutes per side.',
            'calories' => 245,
            'carbohydrates' => 116,
            'protein' => 36,
            'fat' => 99,
            'menu_pics' => '22.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Sorghum Buddha Bowl',
            "description" => 'Sorghum grains, roasted vegetables, black beans, and a tangy miso dressing make up a filling meal in a bowl.',
            'published_at' => '2023-03-28',
            'total_of_likes' => 4,
            'ingredients' => '2 cups water
½ cup whole grain sorghum
1 cup Brussels sprouts, trimmed and halved
1 cup cubed butternut squash
1 jalapeno, halved lengthwise and seeded
2 tablespoons sesame seeds
2 tablespoons olive oil, divided
1 head radicchio, cut into eighths
1 leek, trimmed and chopped
Miso Dressing:
2 tablespoons sesame oil
1 tablespoon brown miso
1 tablespoon white rice vinegar
1 tablespoon toasted sesame oil
1 teaspoon grated fresh ginger
1 cup cooked black beans',
            'cooking_steps' => 'SStep 1, Preheat oven to 400 degrees F (200 degrees C). Line a baking sheet with parchment paper.
Step 2, Bring water and sorghum to a boil in a saucepan. Reduce heat to medium-low, cover, and simmer until sorghum is tender and liquid has been absorbed, 45 to 50 minutes.
Step 3, Combine Brussels sprouts and squash in a bowl; add jalapeno, sesame seeds, and 1 tablespoon olive oil; toss until evenly coated.
Step 4, Arrange radicchio and leek on the prepared baking sheet. Stir the squash mixture again and arrange on the baking sheet. Drizzle 1 tablespoon olive oil over radicchio and leek.
Step 5, Bake in the preheated oven until radicchio and leek are wilted and browned, about 10 minutes. Remove radicchio and leek from baking sheet and continue baking squash mixture until tender and browned, 5 to 10 minutes. Slice jalapeno into thin strips.
Step 6, Whisk sesame oil, brown miso, rice vinegar, toasted sesame oil, and ginger together in a bowl until dressing is smooth.
Step 7, Spoon sorghum into serving bowls. Arrange roasted vegetables on top and add black beans. Drizzle dressing over bowl.',
            'calories' => 768,
            'carbohydrates' => 356,
            'protein' => 76,
            'fat' => 369,
            'menu_pics' => '23.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Creamy Italian White Bean Soup',
            "description" => 'Hearty and healthy soup that is a favorite with friends and family. Sounds more difficult than it is. Try it! We`re positive you`ll be pleased. Serve with grated Parmesan cheese.',
            'published_at' => '2023-01-22',
            'total_of_likes' => 43,
            'ingredients' => '1 tablespoon vegetable oil
1 onion, chopped
1 stalk celery, chopped
1 clove garlic, minced
2 (16 ounce) cans white kidney beans, rinsed and drained
1 (14 ounce) can chicken broth
¼ teaspoon ground black pepper
⅛ teaspoon dried thyme
2 cups water
1 bunch fresh spinach, rinsed and thinly sliced
1 tablespoon lemon juice',
            'cooking_steps' => 'Step 1, In a large saucepan, heat oil. Cook onion and celery in oil for 5 to 8 minutes, or until tender. Add garlic, and cook for 30 seconds, continually stirring.
Step 2, Stir in beans, chicken broth, pepper, thyme and 2 cups water. Bring to a boil, reduce heat, and then simmer for 15 minutes.
Step 3, With slotted spoon, remove 2 cups of the bean and vegetable mixture from soup and set aside.
Step 4, In blender at low speed, blend remaining soup in small batches until smooth, (it helps to remove the center piece of the blender lid to allow steam to escape.)
Step 5, Once blended pour soup back into stock pot and stir in reserved beans.
Step 6, Bring to a boil, occasionally stirring. Stir in spinach and cook 1 minute or until spinach is wilted.
Step 7, Stir in lemon juice and remove from heat and serve with fresh grated Parmesan cheese on top.',
            'calories' => 245,
            'carbohydrates' => 152,
            'protein' => 48,
            'fat' => 45,
            'menu_pics' => '24.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Granola Bars',
            "description" => 'This granola bar recipe is super easy to make with oats, coconut, and peanut butter for a wholesome snack any time of the day!',
            'published_at' => '2023-02-10',
            'total_of_likes' => 20,
            'ingredients' => 'cooking spray
2 cups rolled oats
½ cup shredded coconut
½ cup honey
2 tablespoons creamy peanut butter
1 teaspoon vanilla extract
⅛ teaspoon salt',
            'cooking_steps' => 'Step 1, Preheat the oven to 325 degrees F (165 degrees C). Grease a 9-inch square baking dish.
Step 2, Spread oats and coconut evenly across a baking sheet.
Step 3, Toast oats and coconut in the preheated oven until browned, about 10 minutes; transfer to a large mixing bowl.
Step 4, Mix honey, peanut butter, vanilla, and salt in a saucepan over medium-low heat. Cook and stir until smooth. Pour honey mixture over oats and coconut. Stir to coat. Spread mixture evenly into the prepared baking dish.
Step 5, Bake in the preheated oven until beginning to dry, about 15 minutes for crunchy granola bars, less if you like them chewy. Cool completely before cutting.',
            'calories' => 188,
            'carbohydrates' => 136,
            'protein' => 16,
            'fat' => 45,
            'menu_pics' => '25.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Bourbon & Honey Gold Rush Cocktail',
            "description" => 'The Gold Rush is a modern classic whiskey cocktail that was invented by New York City bartender T.J. Siegal. This easy mix of bourbon, lemon and honey is made with ingredients you likely have in your pantry and makes a tasty addition to happy hour, no matter the season.',
            'published_at' => '2023-03-09',
            'total_of_likes' => 50,
            'ingredients' => '1 teaspoon honey
1 teaspoon water
1 ½ ounces bourbon
1 tablespoon fresh lemon juice
Ice
Lemon slice for garnish',
            'cooking_steps' => 'Step 1, Combine honey and water in a cocktail shaker; stir until the honey is dissolved.
Step 2, Add bourbon and lemon juice.
Step 3, Fill the shaker three-fourths full of ice, cover and shake until chilled, about 20 seconds.
Step 4, Strain the cocktail into a rocks glass filled with ice and garnish with lemon slice, if desired.',
            'calories' => 121,
            'carbohydrates' => 28,
            'protein' => 0,
            'fat' => 0,
            'menu_pics' => '26.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Healthy Honey Mint Lemonade',
            "description" => 'This yummy Healthy Honey Mint Lemonade recipe is an easy to make, refreshing drink to cool off with! Sweetened with honey & made with only 4 ingredients!',
            'published_at' => '2023-02-16',
            'total_of_likes' => 21,
            'ingredients' => '1/2 cup honey
1 cup lemon juice
1 cup fresh mint leaves
6 cups cold water
Optional: lemon slices and additional mint for garnish',
            'cooking_steps' => 'Step 1, In a small pot, warm 1 cup of water. Stir in honey until it is dissolved. Once honey is dissolved, add in fresh mint leaves + muddle.
Step 2, Add remaining 5 cups of cold water and lemon juice.
Step 3, Stir + serve over ice.',
            'calories' => 86,
            'carbohydrates' => 92,
            'protein' => 4,
            'fat' => 9,
            'menu_pics' => '27.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Healthy Hot Chocolate',
            "description" => 'Healthy Hot Chocolate is the perfect cozy winter drink. Dairy free, refined sugar free, low calorie & made with only 3 ingredients!',
            'published_at' => '2023-02-28',
            'total_of_likes' => 98,
            'ingredients' => '4 cups almond milk (dairy, almond, coconut milk all will work)
4 tablespoons cocoa powder
2 tablespoons maple syrup',
            'cooking_steps' => 'Step 1, In a sauce pot whisk together milk, cocoa powder and maple syrup vigorously until combined.
Step 2, Heat over medium high heat for 2-3 minutes, stirring occasionally.
Step 3, Once warm – pour into mug and enjoy!',
            'calories' => 73,
            'carbohydrates' => 44,
            'protein' => 8,
            'fat' => 36,
            'menu_pics' => '28.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'The Best Skinny Margarita Recipe',
            "description" => 'The best skinny margarita recipe that is so simple to make. Easy, fresh, low calorie and delicious – this is perfect for a healthy cocktail!',
            'published_at' => '2023-04-01',
            'total_of_likes' => 76,
            'ingredients' => 'Margarita
3 tablespoons silver tequila 1 shot
3 tablespoons lime juice about 2 limes freshly squeezed
2 tablespoons orange juice
1 teaspoon agave nectar optional
3-4 ice cubes
Pitcher
2 cups tequila
2 cups lime juice about 20 limes
1 ⅓ cup orange juice
3 tablespoons agave nectar
1 cup ice',
            'cooking_steps' => 'Step 1, In a cocktail shaker add ice, tequila, lime juice, orange juice and agave nectar.
Step 2, Shake and serve in a sugar or salt rimmed glass.',
            'calories' => 197,
            'carbohydrates' => 60,
            'protein' => 4,
            'fat' => 9,
            'menu_pics' => '29.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Best Green Protein Smoothie For Breakfast + Benefits',
            "description" => 'A Healthy Green Smoothie Recipe that is so easy to make. Learn how to make the best green smoothie recipe that is delicious and good for you!',
            'published_at' => '2023-04-02',
            'total_of_likes' => 73,
            'ingredients' => '2-3 cups fresh spinach
1/2 cup almond milk
1/3 cup frozen pineapple or mango
1/4 cup vanilla protein powder
1/2 cup nonfat greek yogurt optional',
            'cooking_steps' => 'Step 1, In a blender add all ingredients.
Step 2, Blend until smooth + enjoy!',
            'calories' => 218,
            'carbohydrates' => 56,
            'protein' => 132,
            'fat' => 18,
            'menu_pics' => '30.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Peppermint Mocha Recipe',
            "description" => 'This Healthy Peppermint Mocha is the perfect holiday drink! Requiring only 5 ingredients, it`s easy to make, paleo, vegan, and cheaper than Starbucks!',
            'published_at' => '2023-03-02',
            'total_of_likes' => 93,
            'ingredients' => '1 cup almond milk
1/4 cup espresso (1 large 1-2 oz shot)
1/8 teaspoon peppermint extract
1/2 teaspoon cacao powder
1 teaspoon maple syrup',
            'cooking_steps' => 'Step 1, In a pan or microwave, heat almond milk until warm.
Step 2, Whisk in peppermint extract, cocoa powder + maple syrup.
Step 3, Whisk until warm and frothy
Step 4, Pour milk mixture into a mug, and top with espresso.',
            'calories' => 63,
            'carbohydrates' => 28,
            'protein' => 4,
            'fat' => 27,
            'menu_pics' => '31.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Pumpkin Spice Latte Recipe',
            "description" => 'A Healthy Pumpkin Spice Latte Recipe that is dairy free, paleo, vegan and delicious! Made with only 5 simple ingredients in under 5 minutes. The perfect way to warm up on a chilly fall day!',
            'published_at' => '2023-04-05',
            'total_of_likes' => 103,
            'ingredients' => '1 cup almond milk
2 tablespoon pumpkin puree
1/4 teaspoon pumpkin pie spice
1 teaspoon maple syrup (omit if whole30)
1/4 cup espresso (1 large shot)',
            'cooking_steps' => 'Step 1, In a small sauce pan, warm almond milk. Whisk in pumpkin puree, spice and maple syrup until combined. Don `t bring to a boil unless you like your drinks piping hot!
Step 2, While milk mixture is heating, make espresso.
Step 3, If you`d like, froth using a small electric or cup frother. If you don `t have a frother you can also whisk the milk mixture vigorously in the pan. Pour milk mixture into a large mug and top with espresso. Stir gently + enjoy!',
            'calories' => 66,
            'carbohydrates' => 36,
            'protein' => 8,
            'fat' => 27,
            'menu_pics' => '32.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Immunity Smoothie',
            "description" => 'This Immunity Smoothie Recipe is easy to make and delicious. It can help boost your immune system* and is a yummy breakfast or snack! This post is sponsored by Rritual.',
            'published_at' => '2023-04-07',
            'total_of_likes' => 66,
            'ingredients' => '1/2 cup orange juice
1/2 cup water
1/4 cup carrots
1 inch fresh ginger (approx 1 teaspoon)
1 inch fresh turmeric (approx 1 teaspoon)
1 cup spinach
1/2 cup frozen mango
1 teaspoon Rritual Chaga Immune Powder',
            'cooking_steps' => 'Step 1, In a blender add all ingredients.
Step 2, Blend until smooth + enjoy',
            'calories' => 131,
            'carbohydrates' => 124,
            'protein' => 12,
            'fat' => 9,
            'menu_pics' => '33.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Healthy Gingerbread Latte',
            "description" => 'This Healthy Gingerbread Latte is Whole30, paleo, refined sugar free + easy to make! Simply delicious + a much healthier version of Starbucks holiday drink!',
            'published_at' => '2023-04-11',
            'total_of_likes' => 102,
            'ingredients' => '1 1/2 cup almond milk
1/4 cup espresso (1-2 oz shot)
1/8 teaspoon cinnamon
1/8 teaspoon ground ginger
sprinkle nutmeg
1/2 teaspoon molasses optional + recommended if not Whole30',
            'cooking_steps' => 'Step 1, Warm almond milk in the microwave or stovetop until it is at your preferred temperature.
Step 2, Whisk together almond milk, spices and molasses for approximately 30 seconds until everything is thoroughly combined. Pour into a mug + top with espresso.',
            'calories' => 65,
            'carbohydrates' => 20,
            'protein' => 8,
            'fat' => 45,
            'menu_pics' => '34.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'The Best Cucumber Vodka Cocktail With Lemonade',
            "description" => 'This Cucumber Cocktail with Vodka and lemonade is the best drink to cool off with! Low in sugar & super tasty-the perfect cucumber cocktail! Enjoy a cucumber vodka drink that requires only 5 ingredients and 5 minutes to make!',
            'published_at' => '2023-04-08',
            'total_of_likes' => 88,
            'ingredients' => '½ cup cucumber chopped in small pieces
¼ cup fresh mint leaves
4 oz vodka
2 cups lemonade
ice',
            'cooking_steps' => 'Step 1, In a pitcher or cocktail shaker muddle together cucumber and mint.
Step 2, Add in vodka + lemonade to the cocktail shaker
Step 3, Shake + serve over ice.',
            'calories' => 213,
            'carbohydrates' => 44,
            'protein' => 0,
            'fat' => 0,
            'menu_pics' => '35.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Healthy Strawberry Mojito',
            "description" => 'This Healthy Strawberry Mojito recipe is the perfect refreshing cocktail! Sweetened only with honey and fruit, it’s low in sugar and delicious!',
            'published_at' => '2023-04-18',
            'total_of_likes' => 38,
            'ingredients' => '1 cup strawberries chopped into small pieces
2 tablespoons honey
2 tablespoons warm water
1/4 cup lime juice
1/4 cup mint leaves packed
4 oz white rum
2 cups lime seltzer
2 cups ice
extra mint & lime for garnish (optional)',
            'cooking_steps' => 'Step 1, In a blender combine strawberries, honey and warm water. Blend for 1 minute on high until smooth. Pour strawberry mixture through a strainer or nut milk bag to remove any excess seeds.
Step 2, In a cocktail shaker, add lime juice and mint. Muddle mint, crushing it as best you can. Add in strawberry mixture and rum, shaking to combine.
Step 3, Fill high ball glasses with ice. Divide strawberry/lime/mint mixture amongst two glasses. Add 1 cup of club soda or seltzer to the mixture + garnish with extra mint + lime.',
            'calories' => 229,
            'carbohydrates' => 104,
            'protein' => 4,
            'fat' => 9,
            'menu_pics' => '36.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Lighter Watermelon Mojitos',
            "description" => 'These Watermelon Mojitos are made with only a few simple ingredients like honey, watermelon and lime juice. The perfect healthier, refreshing cocktail!',
            'published_at' => '2023-04-06',
            'total_of_likes' => 23,
            'ingredients' => '1 cup watermelon cubed
1/4 cup lime juice
3 tablespoons honey (or less, depending on your taste)
3 oz white rum
1/4 cup mint leaves
2 cups Lime Seltzer',
            'cooking_steps' => 'Step 1, In a blender puree watermelon, lime juice and honey.
Step 2, Muddle fresh mint into the pureed mixture. (Do not puree mint!)
Step 3, In a cocktail shaker combine watermelon puree, mint leaves, and rum.
Step 4, Prepare 2 glasses filled with ice.
Step 5, Evenly distribute watermelon/rum mixture in the glasses and top with seltzer or club soda. Garnish with lime slices + mint',
            'calories' => 260,
            'carbohydrates' => 172,
            'protein' => 0,
            'fat' => 0,
            'menu_pics' => '37.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Chinese Herbal Tea',
            "description" => 'Our Chinese Herbal Tea is the perfect way to balance your energy. Served hot or cold, it only needs 4 ingredients and can be easily modified!',
            'published_at' => '2023-03-08',
            'total_of_likes' => 58,
            'ingredients' => '30 g dried prunella vulgaris
2 1/2 Lcup water
30 g sweetened wintermelon
100 g carrot',
            'cooking_steps' => 'Step 1, Start by washing the prunella vulgaris in a bowl of cold water. Grab two handfuls and squeeze the water out, then put it in a colander. Do this until all the dried herbs are in the colander.
Step 2, Pour the water out and rinse it until clean, then refill with fresh water. Tip the herbs back in and repeat the washing another 2 times.
Step 3, Wash and peel the carrots.
Step 4, Pour the water into a pot and add the washed herbs in. Cut the carrots into 2cm (0.8") chunks and throw them into the pot. Bring it to a boil, then simmer on medium heat for 30 minutes.
Step 5, Add the sweetened wintermelon in and let it boil for 5 minutes. Turn off the heat and strain the tea into a teapot.
Step 6, Serve it hot as is or put the teapot in the fridge for a few hours to enjoy as a cold beverage!',
            'calories' => 18,
            'carbohydrates' => 16,
            'protein' => 4,
            'fat' => 9,
            'menu_pics' => '38.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Goji Berry and Red Dates Herbal Tea',
            "description" => 'Goji Berry and Red Dates Herbal Tea is a delicately sweet delicious nourishing tea to revitalize blood, balances mood and spirit, beautifies the skin, delays aging, filled with antioxidants and just what your body needs to recover and heal.',
            'published_at' => '2023-02-08',
            'total_of_likes' => 42,
            'ingredients' => '1 cup Goji Berries and Red Date Herbal Tea or about 8 dried Chinese red dates
½ cup dried goji berries
Root + Spring Goji Berries
Red Date "Blood Vitalizer" Herbal Tea
8-10 cups water',
            'cooking_steps' => 'Step 1, Give the goji berries and red dates a gentle rinse under cool, running water.
Step 2, In a pot, combine the goji berries, red dates and water.
Step 3, Cover and bring to a boil before lowering heat and simmering for an hour.
Step 4, If you prefer your tea sweeter, stir in rock sugar until dissolved.
Step 5, Goji berry and red dates herbal tea can be enjoyed hot or cold.',
            'calories' => 58,
            'carbohydrates' => 20,
            'protein' => 4,
            'fat' => 0,
            'menu_pics' => '39.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Mango & banana smoothie',
            "description" => 'Cool down this summer with a fresh and fruity smoothie',
            'published_at' => '2023-02-19',
            'total_of_likes' => 28,
            'ingredients' => '1 medium mango
1 banana
500ml orange juice
4 ice cubes',
            'cooking_steps' => 'Step 1, Cut the mango down either side of the flat stone, then peel and cut the flesh into chunks.
Step 2, Peel and chop the banana.
Step 3, Put all the ingredients into a food processor or blender, then process until smooth and thick. Keep in the fridge and use the day you make it.',
            'calories' => 107,
            'carbohydrates' => 104,
            'protein' => 4,
            'fat' => 9,
            'menu_pics' => '40.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Berry Kombucha Sangria',
            "description" => 'Add some sparkle to your Christmas with this non-alcoholic kombucha sangria.',
            'published_at' => '2023-01-10',
            'total_of_likes' => 49,
            'ingredients' => '1 cup ice
1 large orange, halved then sliced into half moons
1 large green apple, diced
2 kiwifruit, peeled and sliced
2 cups mixed berries, large berries halved or quartered if necessary
½ cup fresh mint, plus extra to garnish
1 cup pomegranate juice
1 cup sparkling water
2 x 11fl oz bottles raspberry/ lemon kombucha',
            'cooking_steps' => 'Step 1, In a large carafe or pitcher, place ice, fruit and mint.
Step 2, Pour juice, sparkling water and kombucha over fruit and stir gently.
Step 3, Serve immediately in tall glasses with mint sprigs.',
            'calories' => 71,
            'carbohydrates' => 60,
            'protein' => 4,
            'fat' => 0,
            'menu_pics' => '41.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Melon and ginger sparkler',
            "description" => 'A healthy drink made of refreshing melon and ginger sparkle. It`s easy to try at home with easily available ingredients',
            'published_at' => '2023-02-27',
            'total_of_likes' => 9,
            'ingredients' => '1 honeydew or cantaloupe melon (3 cups chopped)
2 stalks celery, chopped
1 apple, chopped
2" piece fresh ginger, grated
pinch of salt
1.5 litre bottle sparkling water or soda water
2 limes, sliced
12 mint and berry-filled ice cubes',
            'cooking_steps' => 'Step 1, Place melon, celery and apple in a blender with ginger and salt. Process until smooth. Mix with sparkling water.
Step 2, Place lime slices and ice cubes in each glass and pour drink over. Stir. Serve immediately.',
            'calories' => 54,
            'carbohydrates' => 40,
            'protein' => 42,
            'fat' => 0,
            'menu_pics' => '42.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Smoky Jalapeno Hibiscus Cooler',
            "description" => 'Light, fruity, flavorful mocktails are so simple—and good. Thanks to fruit, sparkling water, spices and herbs, you can make this alcohol-free, added-sugar free beverage shine with a refreshing taste. This recipe is a great alternative to both sugary and alcoholic drinks. Alcohol increases the risk of at least 6 types of cancer and consuming high amounts of added sugar especially from sugary beverages can contribute to weight gain, increasing the risk for cancer and other chronic diseases.',
            'published_at' => '2023-03-02',
            'total_of_likes' => 65,
            'ingredients' => 'Spice Glass Rim: (optional)
1/2 lime
1 tsp. sugar
1/4 tsp. cinnamon
1/4 tsp. smoked paprika
Cooler:
1/2 cup orange juice, unsweetened
1 small lime, juiced
1/4-1/2 small jalapeño, sliced (depending on heat preference)
1/2 tsp. smoked paprika
1 12-ounce can hibiscus flavored sparkling water, unsweetened*
1 large or 6 small ice cubes',
            'cooking_steps' => 'Step 1, Create a spice glass rim with two 12-ounce glasses by running lime halfway along edge of each glass.
Step 2, Mix sugar, cinnamon and paprika together in small saucer.
Step 3, Press each glass into spice mixture to coat rims. Allow to dry for a few minutes before adding liquid to glasses. Or use plain glasses.
Step 4, Place orange juice, lime juice, jalapeño and smoked paprika in blender. Process for 1-2 minutes until well blended.
Step 5, Place ice cubes in each glass. Divide blended juice mixture between each glass.
Step 6, Top each glass with half of hibiscus flavored sparkling water.
Step 7, Garnish with orange, lime and jalapeño slices and hibiscus flowers, if desired.',
            'calories' => 40,
            'carbohydrates' => 40,
            'protein' => 0,
            'fat' => 0,
            'menu_pics' => '43.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Celery Rosemary Tonic',
            "description" => 'Cool, herbal, vegetable-infused beverages are all the rage—and it’s a good thing. Simple beverages filled with puréed vegetables are a great way to hydrate, along with fitting in important servings of veggies into your diet. This healthful tonic includes celery, lemon juice and rosemary for a cool green drink with just a touch of spice, thanks to cayenne. With just the barest touch of sweetener, it’s a healthful drink you can feel good about enjoying. Plus, the ingredients provide you with fiber, antioxidant compounds, vitamins and minerals—so what’s.',
            'published_at' => '2023-01-16',
            'total_of_likes' => 110,
            'ingredients' => '2 medium stalks of celery with leaves, chopped into quarters
1/2 tsp. fresh rosemary
1 small lemon, juiced (about 2 tbsp)
1 tsp. agave nectar
Pinch cayenne pepper
Pinch salt
1 cup water
Ice cubes',
            'cooking_steps' => 'Step 1, Place celery, rosemary, lemon juice, agave nectar, cayenne pepper, salt and water in container of a high-power blender.
Step 2, Process for a few minutes, until mixture is finely liquified.
Step 3, Fill two glasses with ice and pour celery mixture into each glass.',
            'calories' => 20,
            'carbohydrates' => 20,
            'protein' => 0,
            'fat' => 0,
            'menu_pics' => '44.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Ginger Pink Lemonade',
            "description" => 'The spicy sweetness of ginger pairs beautifully in a tart lemonade, softened with red berries that lend a pretty pink shade and sweet flavor. With only a touch of agave nectar, the berries offer the bulk of the natural sweetness to compliment lemons in this thirst-quenching beverage, which is as beautiful as it is delicious. Serve it over ice in pitchers at parties, for a picnic on a sunny day or keep it in the fridge for a healthy hydration option during the week.',
            'published_at' => '2023-02-20',
            'total_of_likes' => 123,
            'ingredients' => '2 1/2 cups water
1 inch piece fresh ginger, peeled
2 Tbsp. agave nectar*
3/4 cup sliced raspberries or strawberries (fresh or frozen)
3/4 cup freshly squeezed lemon juice (6 medium lemons)',
            'cooking_steps' => 'SStep 1, Place water, ginger, agave nectar, berries and lemon juice in the container of a blender.
Step 2, Process for a few seconds until smooth.
Step 3, Transfer to a pitcher and store in the refrigerator until ready to serve. Serve over ice.',
            'calories' => 50,
            'carbohydrates' => 52,
            'protein' => 0,
            'fat' => 0,
            'menu_pics' => '45.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Caribbean Health Drink',
            "description" => 'Full of vitamins and minerals.',
            'published_at' => '2023-04-12',
            'total_of_likes' => 88,
            'ingredients' => '1 cup chopped carrot
1 banana
1 kiwi, peeled
1 apple - peeled, cored, and sliced
1 cup chopped pineapple
1 cup ice cubes',
            'cooking_steps' => 'Step 1, Blend the carrot, banana, kiwi, apple, pineapple, and ice cubes in a blender until smooth.
Step 2, Serve.',
            'calories' => 178,
            'carbohydrates' => 180,
            'protein' => 8,
            'fat' => 9,
            'menu_pics' => '46.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Ginger Shorts Recipe',
            "description" => 'Ginger Shots are spicy, healthy, and non-alcoholic wellness drinks. It is usually made with fresh ginger, lemon, orange, black pepper, and honey. The recipe I have shared here shows you how to make Ginger Shot with easy step-by-step instructions for you to try and enjoy at home.',
            'published_at' => '2023-02-24',
            'total_of_likes' => 80,
            'ingredients' => 'Ginger
Lemon Juice
Oranges
Black Pepper Powder
Honey',
            'cooking_steps' => 'Step 1, Wash the ginger knob in clean running water and pat it dry. Chop it into small pieces and reserve it for later use
Step 2, Peel the oranges and separate their segments and reserve them for blending
Step 3, In a blender jar, add chopped ginger, oranges, lemon juice, and water. Close the lid and secure the jar on the blender. Blend until everything turns smooth
Step 4, Now open the lid and filter the mixture using a fine-mesh strainer. Make sure to mix well to extract the last drop of the juice from the mixture
Step 5, Pour the Ginger Shots into shot glasses and add honey to sweeten the drink
Step 6, Serve this healthy Ginger Shot first thing in the morning on empty stomach to enjoy its full health benefits. It is also recommended not to drink more than 1 ounce (30 ml) per day by health experts',
            'calories' => 48,
            'carbohydrates' => 48,
            'protein' => 4,
            'fat' => 0,
            'menu_pics' => '47.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Cucumber Water',
            "description" => 'Cucumber Water is a healthy, refreshing, and hydrating weight loss drink loaded with good health benefits. It is usually made with fresh cucumber, filtered water, and sometimes with lemon and mint leaves. This Cucumber infused water is one of the best summer drinks to quench your thirst on regular or hot sunny days.',
            'published_at' => '2023-01-29',
            'total_of_likes' => 39,
            'ingredients' => '½ Cucumber, washed
Lemon, to garnish
2 sprig Mint Leaves
6 cups Water',
            'cooking_steps' => 'Step 1, Slice the cucumber into small circular shapes.
Step 2, Add the sliced cucumbers, and a handful of mint leaves into the pitcher, and gently mash them with a wooden spoon.
Step 3, Add 6 cups of filtered water into the pitcher and close and refrigerate until it is served. You can also infuse the water with cucumber at room temperature for the whole day.
Step 4, Add cucumber slice, and lemon slice into a serving glass and pour the refrigerated cucumber water. Now the refreshing cucumber-infused water is ready for you to taste and enjoy.
Step 5, Serve this healthy Cucumber infused water with cucumber and lemon slices and mint leaves.
            ',
            'calories' => 4,
            'carbohydrates' => 4,
            'protein' => 8,
            'fat' => 9,
            'menu_pics' => '48.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Hibiscus tea Recipe',
            "description" => 'Hibiscus Tea also called Agua De Jamaica is a sweet, tart, and refreshing Mexican iced drink. It is usually made with dried hibiscus flowers, lemon, ginger, cinnamon, and sugar. This Hibiscus Tea is a perfect detox drink to enjoy on hot summer days or hot to keep yourself warm on cold winter days. And the best part is it is also loaded with a lot of health benefits.',
            'published_at' => '2023-04-15',
            'total_of_likes' => 101,
            'ingredients' => '3 cups Water
1 tsp Ginger
2 Lemon slices
½ Cinnamon Stick, small
2 tbsp Sugar
¼ cup Dried Hibiscus Flower',
            'cooking_steps' => 'Step 1, In a saucepan, add 3 cups of water and add ginger, lemon slices, cinnamon sticks, and sugar
            Adding ginger, lemon, and other spices to water.
Step 2, Allow the mixture to boil for 2 to 3 minutes and switch off the heat
Step 3, Now add the dried hibiscus flowers and give a good mix
Step 4, Close the saucepan with its lid and allow the mixture to brew for 5 to 7 minutes
Step 5, Now open the lid and remove the Hibiscus tea from heat. You can filter and enjoy this Agua De Jamaica as it is hot
Step 6, Add a lot of ice cubes to enjoy the iced version of this hibiscus tea
Step 7, Serve this healthy Hibiscus Tea hot to comfort your body on cold winter days and iced to refresh yourself on hot summer days',
            'calories' => 36,
            'carbohydrates' => 40,
            'protein' => 0,
            'fat' => 0,
            'menu_pics' => '49.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Water',
            "description" => 'Water makes up so much of what we eat and drink—why not obsess a little bit over getting the best-tasting water possible?',
            'published_at' => '2023-03-05',
            'total_of_likes' => 88,
            'ingredients' => '2 liters distilled or purified water, divided
1.5g magnesium chloride
1g sodium bicarbonate
1g calcium chloride',
            'cooking_steps' => 'Step 1, Combine 1 liter water, magnesium chloride, baking soda, and calcium chloride in a large bottle or jug and stir to dissolve to form electrolyte solution.
Step 2, Add 10 grams of the electrolyte concentrate to remaining 1 liter of water to dilute.
Step 3, Serve or use for cocktails.
Step 4, Remaining electrolyte solution can be stored in a sealed container for future dilution.',
            'calories' => 0,
            'carbohydrates' => 0,
            'protein' => 0,
            'fat' => 0,
            'menu_pics' => '50.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Super Green Pasta',
            "description" => 'Pack in your veggies with this quick and easy green pasta. Plenty of kale and spinach transform into a vibrant green sauce once cooked and blended with basil, pine nuts and Parmesan cheese for a pesto-like flavor. Enjoy this easy vegetarian pasta as is, or add grilled chicken or white beans for a boost of protein.',
            'published_at' => '2023-03-05',
            'total_of_likes' => 129,
            'ingredients' => '8 ounces whole-wheat fettuccine or spaghetti
1 (8-ounce) bunch lacinato kale, stemmed
1 (5 ounce) package baby spinach
4 medium cloves garlic, peeled
1 ½ cups packed fresh basil leaves, plus more for garnish
¼ cup extra-virgin olive oil
½ teaspoon salt
¼ cup toasted pine nuts, divided
½ cup grated Parmigiano-Reggiano cheese, divided',
            'cooking_steps' => 'Step 1, Bring a large pot of water to a boil over high heat. Add pasta and cook according to package directions. Transfer the pasta with tongs to a colander set over a bowl.
Step 2, Add kale, spinach and garlic to the boiling water; cook until the greens are wilted, bright green and tender, 1 to 2 minutes. Drain, reserving 1 cup cooking water.
Step 3, Transfer the kale, spinach and garlic to a blender; add basil, oil, salt, 2 tablespoons pine nuts, 1/4 cup cheese and 3/4 cup reserved cooking water. Process until very smooth, about 1 minute.
Step 4, Transfer the pasta to a large bowl. Add the sauce and toss with tongs until well coated. (To thin the sauce further, if desired, add the remaining 1/4 cup cooking water.) Divide among 4 shallow bowls and top with the remaining 2 tablespoons pine nuts and 1/4 cup cheese. Sprinkle with additional basil before serving, if desired.',
            'calories' => 437,
            'carbohydrates' => 148,
            'protein' => 68,
            'fat' => 225,
            'menu_pics' => '51.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Carrot Soup',
            "description" => 'The easiest way to make your carrot soup creamy is to simply add cream after it`s blended (We prefer half-and-half to cut back on saturated fat.) If you want to skip the cream entirely, using a high-powered stand blender can give you light and creamy results. A regular stand blender works well too, but you may have to blend it for longer. When using any stand blender, be sure to remove the center piece from the lid and hold a clean towel over the hole to prevent burns. An immersion blender will blend the soup, but it tends to not blend it as finely so the result will be less creamy.',
            'published_at' => '2022-09-20',
            'total_of_likes' => 33,
            'ingredients' => '1 tablespoon butter
1 tablespoon extra-virgin olive oil
1 medium onion, chopped
1 stalk celery, chopped
2 cloves garlic, chopped
1 teaspoon chopped fresh thyme or parsley
5 cups chopped carrots
2 cups water
4 cups reduced-sodium chicken broth, "no-chicken" broth (see Note) or vegetable broth
½ cup half-and-half (optional)
½ teaspoon salt
Freshly ground pepper to taste',
            'cooking_steps' => 'Step 1, Heat butter and oil in a Dutch oven over medium heat until the butter melts.
Step 2, Add onion and celery; cook, stirring occasionally, until softened, 4 to 6 minutes.
Step 3, Add garlic and thyme (or parsley); cook, stirring, until fragrant, about 10 seconds. Stir in carrots.
Step 4, Add water and broth; bring to a lively simmer over high heat.
Step 5, Reduce heat to maintain a lively simmer and cook until very tender, about 25 minutes.
Step 6, Puree the soup in batches in a blender until smooth. (Use caution when pureeing hot liquids.) Stir in half-and-half (if using), salt and pepper. ',
            'calories' => 176,
            'carbohydrates' => 32,
            'protein' => 28,
            'fat' => 198,
            'menu_pics' => '52.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Weight-Loss Cabbage Soup',
            "description" => 'Loaded with cabbage, carrots, bell pepper, tomato and plenty of seasoning, this healthy cabbage soup recipe packs in lots of flavor and is ultra-satisfying. This easy recipe makes a big batch for lunches or veggie-packed snacks all week. If you want to bump up the satisfaction factor even more, top with a little cheese or avocado.',
            'published_at' => '2022-10-28',
            'total_of_likes' => 18,
            'ingredients' => '2 tablespoons extra-virgin olive oil
1 medium onion, chopped
2 medium carrots, chopped
2 stalks celery, chopped
1 medium red bell pepper, chopped
2 cloves garlic, minced
1 ½ teaspoons Italian seasoning
½ teaspoon ground pepper
¼ teaspoon salt
8 cups low-sodium vegetable broth
1 medium head green cabbage, halved and sliced
1 large tomato, chopped
2 teaspoons white-wine vinegar',
            'cooking_steps' => 'Step 1, Heat oil in a large pot over medium heat.
Step 2, Add onion, carrots and celery. Cook, stirring, until the vegetables begin to soften, 6 to 8 minutes.
Step 3, Add bell pepper, garlic, Italian seasoning, pepper and salt and cook, stirring, for 2 minutes.
Step 4, Add broth, cabbage and tomato; increase heat to medium-high and bring to a boil.
Step 5, Reduce heat to maintain a simmer, partially cover and cook until all the vegetables are tender, 15 to 20 minutes more.
Step 6, Remove from heat and stir in vinegar.',
            'calories' => 133,
            'carbohydrates' => 80,
            'protein' => 12,
            'fat' => 45,
            'menu_pics' => '53.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Ground Beef & Potatoes Skillet',
            "description" => 'In this healthy ground beef and potatoes recipe, ground beef and potatoes are paired with colorful veggies, including kale, tomato and peppers. Everything is cooked in one skillet, which allows for layers of flavor to build quickly while also cutting back on the number of dishes.',
            'published_at' => '2022-08-18',
            'total_of_likes' => 17,
            'ingredients' => '3 tablespoons extra-virgin olive oil, divided
1 pound 90% lean ground beef
2 teaspoons ground cumin
¾ teaspoon salt
¼ teaspoon ground pepper
3 medium Yukon Gold potatoes, diced (1/2-inch)
1 medium yellow onion, chopped
1 yellow bell pepper, diced (1/2-inch)
1 poblano pepper, diced (1/2-inch)
2 cloves garlic, minced
1 bunch lacinato kale, stemmed and roughly chopped
2 plum tomatoes, cored and diced (1/2-inch)
1 scallion, thinly sliced crosswise (optional)',
            'cooking_steps' => 'Step 1, Heat 1 tablespoon oil in a large cast-iron skillet over medium-high heat.
Step 2, Add beef, cumin, salt and pepper; cook, stirring often to break up the meat, until evenly browned, about 6 minutes.
Step 3, Using a slotted spoon, transfer the beef to a paper-towel-lined plate; do not wipe out the pan.
Step 4, Add 1 tablespoon oil to the drippings in the pan. Add potatoes; cook, stirring occasionally, until the potatoes begin to caramelize and are tender, about 20 minutes.
Step 5, Transfer the potatoes to the plate with the beef.
Step 6, Heat the remaining 1 tablespoon oil in the skillet over medium heat. Add onion, bell pepper and poblano; cook, stirring occasionally, until tender, about 6 minutes.
Step 7, Add garlic; cook, stirring often, until aromatic, about 1 minute.
Step 8, Add kale and tomatoes; cook, stirring often, until the kale is wilted and the tomatoes are heated through, about 3 minutes.
Step 9, Stir in the beef and potatoes. Sprinkle with scallions, if desired. ',
            'calories' => 332,
            'carbohydrates' => 120,
            'protein' => 80,
            'fat' => 135,
            'menu_pics' => '54.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Melting Potatoes',
            "description" => 'The name for this potato recipe hints at the creamy interior. Roasting these melting potatoes at high heat ensures they get crunchy on the outside. Then, adding a little broth at the end allows the potatoes to absorb the liquid, making the insides extra moist.',
            'published_at' => '2022-09-14',
            'total_of_likes' => 13,
            'ingredients' => '2 pounds Yukon Gold potatoes, peeled and cut into 1-inch slices
2 tablespoons butter, melted
2 tablespoons extra-virgin olive oil
2 teaspoons chopped fresh thyme
1 teaspoon chopped fresh rosemary
¾ teaspoon salt
½ teaspoon ground pepper
1 cup low-sodium vegetable broth or chicken broth
5 cloves garlic, peeled and smashed',
            'cooking_steps' => 'Step 1, Position rack in upper third of oven; preheat to 500°F.
Step 2, Toss potatoes, butter, oil, thyme, rosemary, salt and pepper in a large bowl. Arrange in a single layer in a 9-by-13-inch metal baking pan. (Do not use a glass dish, which could shatter.) Roast, flipping once, until browned, about 30 minutes.
Step 3, Carefully add broth and garlic to the pan. Continue roasting until most of the broth is absorbed and the potatoes are very tender, about 15 minutes more. Serve hot.',
            'calories' => 206,
            'carbohydrates' => 112,
            'protein' => 12,
            'fat' => 81,
            'menu_pics' => '55.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'American Goulash',
            "description" => 'American goulash, also known as old-fashioned goulash, is the perfect economical family meal. The pasta cooks right in the sauce, so this satisfying dish can cook in just one pot.',
            'published_at' => '2022-06-01',
            'total_of_likes' => 28,
            'ingredients' => '1 tablespoon extra-virgin olive oil
1 ½ cups chopped onion
1 pound lean ground beef
2 large cloves garlic, minced
2 teaspoons paprika
1 teaspoon Italian seasoning
1 teaspoon salt
¼ teaspoon ground pepper
1 (14 ounce) can no-salt-added diced tomatoes, undrained
1 (8 ounce) can no-salt-added tomato sauce
1 cup low-sodium beef or chicken broth
1 1/4 cups whole-wheat elbow macaroni
2 tablespoons grated Parmesan cheese',
            'cooking_steps' => 'Step 1, Heat oil in a large saucepan over medium-high heat.
Step 2, Add onion and beef; cook, breaking up meat with a wooden spoon, until no longer pink, about 5 minutes.
Step 3, Add garlic, paprika, Italian seasoning, salt and pepper; cook, stirring, for 1 minute.
Step 4, Stir in tomatoes and their juices, tomato sauce and broth. Bring to a boil.
Step 5, Reduce heat to medium-low, cover and cook for 5 minutes.
Step 6, Add macaroni and cook, uncovered, stirring occasionally, until tender, 6 to 9 minutes.
Step 7, Remove from heat and let stand for 5 minutes before serving.
Step 8, Sprinkle with Parmesan, if desired.',
            'calories' => 418,
            'carbohydrates' => 160,
            'protein' => 124,
            'fat' => 144,
            'menu_pics' => '56.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'One-Skillet Cheesy Ground Chicken Pasta',
            "description" => 'Make this cheesy ground chicken pasta recipe for a busy weeknight dinner. Serve with a simple side salad and a glass of red wine.',
            'published_at' => '2021-09-24',
            'total_of_likes' => 11,
            'ingredients' => '1 tablespoon extra-virgin olive oil
1 pound ground chicken
1 cup chopped red onion
1 cup halved grape tomatoes
2 teaspoons dried Italian seasoning
¼ teaspoon salt
8 ounces whole-wheat penne
2 cups unsalted chicken broth
1 cup marinara sauce
½ cup heavy whipping cream
5 ounces fresh baby spinach
½ cup chopped fresh basil, plus more for garnish
½ cup low-moisture part-skim shredded mozzarella cheese
Grated Parmesan cheese (optional)',
            'cooking_steps' => 'Step 1, Heat oil in a large, high-sided skillet or Dutch oven over medium-high heat. Add chicken; cook, stirring often to break up the meat, until cooked through and beginning to brown, 6 to 8 minutes.
Step 2, Add onion, tomatoes, Italian seasoning and salt; cook, stirring often, until the onion is softened and the tomatoes are breaking down, 4 to 5 minutes.
Step 3, Stir in pasta, broth, marinara and cream; bring to a simmer over medium-high heat. Cover and simmer, stirring occasionally, until the pasta is al dente, 10 to 12 minutes.
Step 4, Stir in spinach (in batches, if necessary), basil and mozzarella; cover and cook until the spinach wilts and the cheese melts, about 2 minutes.
Step 5, Garnish with more basil and Parmesan, if using.',
            'calories' => 410,
            'carbohydrates' => 152,
            'protein' => 96,
            'fat' => 171,
            'menu_pics' => '57.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Grilled Red Snapper',
            "description" => 'This simple grilled red snapper recipe has clean flavors and a nice char from the grill. It is well-seasoned but not overly spicy. Serve with grilled veggies or a green salad to make it a meal.',
            'published_at' => '2022-12-22',
            'total_of_likes' => 1,
            'ingredients' => '1 tablespoon smoked paprika
1 teaspoon ground pepper
1 teaspoon onion powder
1 teaspoon garlic powder
1 teaspoon dried oregano
1 teaspoon dried thyme
½ teaspoon salt
½ teaspoon cayenne pepper
4 (5 ounce) boneless, skinless red snapper fillets
1 tablespoon extra-virgin olive oil
Lemon wedges',
            'cooking_steps' => 'Step 1, Preheat grill to medium-high (400 degrees-450 degrees F).
Step 2, Combine paprika, pepper, onion powder, garlic powder, oregano, thyme, salt and cayenne in a small bowl.
Step 3, Brush fish all over with oil; sprinkle the seasoning evenly over both sides of fish, pressing to adhere.
Step 4, Oil the grill grates. Grill the fish, covered, until it flakes easily and a thermometer inserted in the thickest part registers 145 degrees F, 3 to 5 minutes per side.
Step 5, Serve with lemon wedges.',
            'calories' => 410,
            'carbohydrates' => 152,
            'protein' => 96,
            'fat' => 171,
            'menu_pics' => '58.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Spaghetti & Spinach with Sun-Dried Tomato Cream Sauce',
            "description" => 'To achieve flavor quickly in this sun-dried tomato pasta recipe, we use the oil from sun-dried tomatoes to create the base of the cream sauce. Meanwhile, the residual heat of the pasta wilts the spinach in record time for a fast weeknight dinner.',
            'published_at' => '2022-10-12',
            'total_of_likes' => 26,
            'ingredients' => '5 ounces baby spinach, coarsely chopped
8 ounces whole-wheat spaghetti
½ cup slivered oil-packed sun-dried tomatoes, plus 1 tablespoon oil from the jar
½ cup halved and thinly sliced onion
3 cloves garlic, minced
¼ teaspoon crushed red pepper
¼ teaspoon salt
¼ teaspoon ground pepper
1 cup low-sodium vegetable or chicken broth
½ cup sour cream
¼ cup grated Parmesan cheese
1 tablespoon unsalted butter',
            'cooking_steps' => 'Step 1, Place spinach in a large colander in the sink. Bring a large saucepan of water to a boil over high heat.
Step 2, Add spaghetti and cook according to package directions. Drain the pasta over the spinach; toss to wilt the spinach.
Step 3, Meanwhile, heat sun-dried tomato oil in a large skillet over medium heat.
Step 4, Add onion and sun-dried tomatoes; cook, stirring, until softened, about 3 minutes.
Step 5, Add garlic, crushed red pepper, salt and pepper; cook, stirring, for 1 minute.
Step 6, Increase heat to medium-high and add broth; cook, stirring, until reduced by about half, about 2 minutes.
Step 7, Stir in sour cream, Parmesan and butter.
Step 8, Add the spaghetti and spinach; toss to coat well.',
            'calories' => 380,
            'carbohydrates' => 204,
            'protein' => 52,
            'fat' => 144,
            'menu_pics' => '59.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Chhole (Chickpea Curry)',
            "description" => 'This healthy Indian recipe is a flavorful chickpea curry that you can make in just 20 minutes. If you want to add a vegetable, stir in some roasted cauliflower. Serve with brown basmati rice or warm naan. Also called chana masala, this dish is a comforting and delicious dinner.',
            'published_at' => '2023-03-23',
            'total_of_likes' => 53,
            'ingredients' => '1 medium serrano pepper, cut into thirds
4 large cloves garlic
1 2-inch piece fresh ginger, peeled and coarsely chopped
1 medium yellow onion, chopped (1-inch)
6 tablespoons canola oil or grapeseed oil
2 teaspoons ground coriander
2 teaspoons ground cumin
½ teaspoon ground turmeric
2 ¼ cups no-salt-added canned diced tomatoes with their juice (from a 28-ounce can)
¾ teaspoon  kosher salt
2 15-ounce cans chickpeas, rinsed
2 teaspoons garam masala
Fresh cilantro for garnish',
            'cooking_steps' => 'Step 1, Pulse serrano, garlic and ginger in a food processor until minced. Scrape down the sides and pulse again.
Step 2, Add onion; pulse until finely chopped, but not watery.
Step 3, Heat oil in a large saucepan over medium-high heat. Add the onion mixture and cook, stirring occasionally, until softened, 3 to 5 minutes.
Step 4, Add coriander, cumin and turmeric and cook, stirring, for 2 minutes.
Step 5, Pulse tomatoes in the food processor until finely chopped. Add to the pan along with salt.
Step 6, Reduce heat to maintain a simmer and cook, stirring occasionally, for 4 minutes.
Step 7, Add chickpeas and garam masala, reduce heat to a gentle simmer, cover and cook, stirring occasionally, for 5 minutes more.
Step 8, Serve topped with cilantro, if desired.',
            'calories' => 278,
            'carbohydrates' => 120,
            'protein' => 24,
            'fat' => 144,
            'menu_pics' => '60.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Creamy Garlic Skillet Chicken with Spinach',
            "description" => 'Quick-cooking chicken cutlets are coated in a garlic cream sauce, while spinach adds a boost of color and nutrition in this easy, one-skillet recipe.',
            'published_at' => '2021-12-29',
            'total_of_likes' => 12,
            'ingredients' => '1 pound chicken cutlets
½ teaspoon salt, divided
½ teaspoon ground pepper, divided
1 tablespoon extra-virgin olive oil
3 large cloves garlic, grated
½ cup dry white wine
2 cups coarsely chopped fresh spinach
½ cup heavy cream
1 pound chicken cutlets
½ teaspoon salt, divided
½ teaspoon ground pepper, divided
1 tablespoon extra-virgin olive oil
3 large cloves garlic, grated
½ cup dry white wine
2 cups coarsely chopped fresh spinach
½ cup heavy cream',
            'cooking_steps' => 'Step 1, Sprinkle chicken with 1/4 teaspoon each salt and pepper.
Step 2, Heat oil in a large skillet over medium heat.
Step 3, Add the chicken and cook, turning once, until browned and cooked through, about 6 minutes. Transfer to a plate.
Step 4, Add garlic to the pan and cook, stirring, for 30 seconds.
Step 5, Increase heat to medium-high and add wine. Cook until slightly reduced, about 1 minute.
Step 6, Return heat to medium and stir in spinach, cream and the remaining 1/4 teaspoon each salt and pepper. Simmer for 2 minutes.
Step 7, Return the chicken to the pan and turn to coat with the sauce.',
            'calories' => 301,
            'carbohydrates' => 12,
            'protein' => 108,
            'fat' => 153,
            'menu_pics' => '61.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Vegetable Weight-Loss Soup',
            "description" => 'A big bowl of this vegetable soup will leave you satisfied for hours without consuming a lot of calories, which is helpful when trying to lose weight. Plus, it is an easy way to boost your vegetable servings for the day—something all of us could benefit from. Top with a dollop of pesto before devouring this delicious vegetable soup and consider serving with a hunk of toasted whole-wheat bread to help round out the meal.',
            'published_at' => '2022-12-22',
            'total_of_likes' => 39,
            'ingredients' => '2 tablespoons extra-virgin olive oil
1 medium onion, chopped
2 medium carrots, chopped
2 stalks celery, chopped
12 ounces fresh green beans, cut into 1/2-inch pieces
2 cloves garlic, minced
8 cups no-salt-added chicken broth or low-sodium vegetable broth
2 (15 ounce) cans low-sodium cannellini or other white beans, rinsed
4 cups chopped kale
2 medium zucchini, chopped
4 Roma tomatoes, seeded and chopped
2 teaspoons red-wine vinegar
¾ teaspoon salt
½ teaspoon ground pepper
8 teaspoons prepared pesto',
            'cooking_steps' => 'Step 1, Heat oil in a large pot over medium-high heat. Add onion, carrot, celery, green beans and garlic. Cook, stirring frequently, until the vegetables begin to soften, about 10 minutes.
Step 2, Add broth and bring to a boil. Reduce heat to a simmer and cook, stirring occasionally, until the vegetables are soft, about 10 minutes more.
Step 3, Add white beans, kale, zucchini, tomatoes, vinegar, salt and pepper. Increase heat to return to a simmer; cook until the zucchini and kale have softened, about 10 minutes.
Step 4, Top each serving of soup with 1 teaspoon pesto.',
            'calories' => 225,
            'carbohydrates' => 112,
            'protein' => 52,
            'fat' => 72,
            'menu_pics' => '62.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Spinach Puffs',
            "description" => 'These bite-sized spinach puffs are reminiscent of artichoke dip, with a slight hint of spice from ground pepper and za`atar seasoning. Puff pastry surrounds the savory filling, adding a crispy golden crust on the outside.',
            'published_at' => '2023-03-10',
            'total_of_likes' => 5,
            'ingredients' => '1 tablespoon extra-virgin olive oil
¾ cup chopped yellow onion
2 large cloves garlic, grated
¾ cup canned chopped artichoke hearts, rinsed
8 cups lightly packed baby spinach, coarsely chopped
1 cup crumbled feta cheese
1 (8 ounce) package reduced-fat cream cheese
½ cup low-fat plain strained (Greek-style) yogurt
1 large egg
¼ cup grated Parmesan cheese
2 tablespoons chopped fresh herbs (such as dill, parsley and/or chives)
½ teaspoon za`atar
½ teaspoon ground pepper
1 (17.65-ounce) package frozen puff pastry sheets (2 sheets), thawed
All-purpose flour, for work surface',
            'cooking_steps' => 'Step 1, Preheat oven to 400°F. Coat a 24-cup mini muffin pan with cooking spray.
Step 2, Heat oil in a large skillet over medium heat. Add onion; cook, stirring occasionally, until tender, about 3 minutes.
Step 3, Add garlic; cook, stirring occasionally, until fragrant, about 30 seconds.
Step 4, Add artichokes; cook, stirring occasionally, until liquid has evaporated, about 1 minute.
Step 5, Add spinach; cook, stirring occasionally, until wilted, 1 to 2 minutes.
Step 6, Transfer the mixture to a large bowl and refrigerate, uncovered, until slightly cooled, about 10 minutes.
Step 7, Add feta, cream cheese, yogurt, egg, Parmesan, herbs, za`atar and pepper to the spinach mixture; stir until combined.
Step 8, Unfold 1 puff pastry sheet on a lightly floured surface and gently roll into a 9-by-12-inch rectangle. Cut into 12 (3-inch) squares. Gently press 1 pastry square into the bottom of each prepared muffin cup, letting the corners overhang. Repeat with the remaining puff pastry sheet. Divide the spinach mixture evenly among the pastry cups, about 2 tablespoons each.
Step 9, Gently stretch the 4 points of each puff pastry square together toward the center so that they cover the filling, then lightly press them together in the middle.
Step 10, Bake until puffed and golden, 30 to 35 minutes.
Step 11, Let cool in the pan for 10 minutes, then run a knife carefully around edges to gently loosen each pastry.
Step 12, Transfer to a wire rack and let cool for 10 minutes. Serve warm or at room temperature. ',
            'calories' => 150,
            'carbohydrates' => 52,
            'protein' => 20,
            'fat' => 90,
            'menu_pics' => '63.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Lemon-Garlic Marinated Shrimp',
            "description" => 'Marinating precooked shrimp in garlic- and lemon-infused oil is a simple yet elegant appetizer',
            'published_at' => '2019-08-26',
            'total_of_likes' => 5,
            'ingredients' => '3 tablespoons minced garlic
2 tablespoons extra-virgin olive oil
¼ cup lemon juice
¼ cup minced fresh parsley
½ teaspoon kosher salt
½ teaspoon pepper
1 ¼ pounds cooked shrimp',
            'cooking_steps' => 'Step 1, Place garlic and oil in a small skillet and cook over medium heat until fragrant, about 1 minute.
Step 2, Add lemon juice, parsley, salt and pepper. Toss with shrimp in a large bowl.
Step 3, Chill until ready to serve. ',
            'calories' => 81,
            'carbohydrates' => 8,
            'protein' => 44,
            'fat' => 27,
            'menu_pics' => '64.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Baked Breaded Eggplant',
            "description" => 'This breaded eggplant is baked to perfection with a crunchy outside and soft interior. It`s wonderful dipped in marinara. If you want to elevate it further, add a sweet and tangy drizzle of balsamic glaze and a sprinkle of fresh basil leaves.',
            'published_at' => '2020-06-19',
            'total_of_likes' => 3,
            'ingredients' => 'Olive oil cooking spray
3 tablespoons all-purpose flour
2 large egg whites
1 large egg
1 cup dry whole-wheat breadcrumbs
5 tablespoons grated Parmesan cheese
1 teaspoon dried oregano
1 large eggplant (about 1 pound), unpeeled, cut crosswise into (1/4-inch) rounds
½ teaspoon salt, divided
¾ cup reduced-sodium marinara sauce, warmed
Balsamic glaze for garnish
Fresh basil leaves for garnish',
            'cooking_steps' => 'Step 1, Preheat oven to 450 degrees F. Coat a large rimmed baking sheet with cooking spray.
Step 2, Spread flour in a shallow bowl. Lightly beat egg whites and egg in a second shallow bowl .
Step 3, Combine breadcrumbs, Parmesan and oregano in a third shallow bowl.
Step 4, Sprinkle eggplant with 1/4 teaspoon salt. Dredge the eggplant in the flour, dip in the egg and then dredge in the breadcrumb mixture. Arrange the eggplant slices in a single layer on the prepared baking sheet.
Step 5, Coat the tops of the slices with cooking spray and sprinkle evenly with the remaining 1/4 teaspoon salt.
Step 6, Bake for 10 minutes. Flip the eggplant and coat again with cooking spray. Bake until golden brown and crisp, about 10 minutes.
Step 7, Serve with warmed marinara. Drizzle with balsamic glaze, and sprinkle with basil leaves, if desired.',
            'calories' => 136,
            'carbohydrates' => 84,
            'protein' => 28,
            'fat' => 27,
            'menu_pics' => '65.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Baked Broccoli-Cheddar Quinoa Bites',
            "description" => 'These savory muffin-like quinoa bites are low in carbs and a good source of protein--plus we love their cheesy flavor.',
            'published_at' => '2019-08-20',
            'total_of_likes' => 9,
            'ingredients' => '½ cup quinoa
⅛ teaspoon salt plus 1/4 teaspoon, divided
¾ cup finely chopped broccoli
¾ cup shredded Cheddar cheese
½ teaspoon baking powder
½ teaspoon garlic powder
¼ teaspoon onion powder
¼ teaspoon ground pepper
1 large egg, lightly beaten
Cooking spray',
            'cooking_steps' => 'Step 1, Preheat oven to 350 degrees F. Line 16 cups of a 24-cup mini muffin pan with paper liners (see Tip) or coat with cooking spray.
Step 2, Cook quinoa with 1/8 tsp. salt according to package directions. Remove from heat and let stand, covered, for 5 minutes.
Step 3, Transfer to a large bowl and let cool for at least 10 minutes.
Step 4, Add broccoli, Cheddar, baking powder, garlic powder, onion powder, pepper, and the remaining 1/4 tsp. salt to the quinoa. Stir in egg.
Step 5, Divide the quinoa mixture among the prepared muffin cups, pressing firmly with lightly moistened fingers. Mist the tops with cooking spray.
Step 6, Bake until golden, 22 to 25 minutes.
Step 7, Let cool in the pan on a wire rack for 20 minutes, then remove to the rack to cool completely.',
            'calories' => 87,
            'carbohydrates' => 32,
            'protein' => 20,
            'fat' => 36,
            'menu_pics' => '66.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Loaded Black Bean Dip',
            "description" => 'This is 7-layer black bean dip simplified: just heat and season refried beans, then top with fresh vegetables for a texturally exciting dip.',
            'published_at' => '2020-04-16',
            'total_of_likes' => 4,
            'ingredients' => '1 (15 ounce) can reduced-sodium refried black beans
1 tablespoon lime juice
1 clove garlic, grated
½ teaspoon chili powder
½ teaspoon ground cumin
⅛ teaspoon salt
1 medium avocado, diced
½ cup finely chopped tomato
¼ cup finely chopped red onion
¼ cup crumbled cotija cheese or queso fresco
2 tablespoons diced pickled jalapeño
2 tablespoons chopped fresh cilantro',
            'cooking_steps' => 'Step 1, Combine beans, lime juice, garlic, chili powder, cumin and salt in a shallow bowl.
Step 2, Microwave on High until heated through, about 1 minute.
Step 3, Spread the mixture into an even layer and top with avocado, tomato, onion, cheese, pickled jalapeño and cilantro.
Step 4, To Make Ahead Cover and refrigerate for up to 3 hours.',
            'calories' => 58,
            'carbohydrates' => 24,
            'protein' => 8,
            'fat' => 27,
            'menu_pics' => '67.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Loaded Broccoli Salad',
            "description" => 'This is the broccoli salad you will get special requests for. The combination of bacon, sour cream, mayonnaise, scallions and Cheddar is hard to resist.',
            'published_at' => '2022-11-17',
            'total_of_likes' => 12,
            'ingredients' => '3 slices bacon
¼ cup sour cream
¼ cup mayonnaise
4 teaspoons rice vinegar or cider vinegar
¼ teaspoon ground pepper
4 cups finely chopped broccoli florets (11 ounces)
½ cup sliced scallions
½ cup shredded extra-sharp Cheddar cheese',
            'cooking_steps' => 'Step 1, Cook bacon in a large skillet over medium heat until crisp, 5 to 7 minutes.
Step 2, Transfer to a paper-towel-lined plate. Reserve 1 tablespoon bacon fat. Chop the bacon when cool enough to handle.
Step 3, Whisk sour cream, mayonnaise, vinegar, pepper and the reserved bacon fat together in a large bowl.
Step 4, Add broccoli, scallions, cheese and the chopped bacon. Stir to coat with the dressing.
Step 5, To Make Ahead Cover and refrigerate in an airtight container for up to 2 days.',
            'calories' => 191,
            'carbohydrates' => 16,
            'protein' => 24,
            'fat' => 153,
            'menu_pics' => '68.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Watermelon, Cucumber & Feta Salad',
            "description" => 'Here is a healthy salad recipe to make at the height of summer when watermelon and cucumbers are at their juiciest and most flavorful. Feta adds the perfect creamy, salty, tangy edge, and mint makes this salad taste even brighter. This is one easy side salad you will want to serve at all your summer BBQs.',
            'published_at' => '2020-06-19',
            'total_of_likes' => 6,
            'ingredients' => '½ cup red-wine vinegar
2 teaspoons honey
¼ teaspoon salt
¼ teaspoon ground pepper
¼ cup extra-virgin olive oil
5 cups cubed seedless watermelon
1 English cucumber, chopped
6 ounces feta cheese, cut into 3/4-inch cubes
½ cup thinly sliced red onion
2 tablespoons chopped fresh mint',
            'cooking_steps' => 'Step 1, Whisk vinegar, honey, salt and pepper in a small bowl; gradually whisk in oil until completely incorporated.
Step 2, Combine watermelon, cucumber, feta and onion in a large bowl. Gently stir in 1/2 cup of the vinaigrette.
Step 3, Refrigerate for at least 20 minutes or up to 2 hours.
Step 4, Just before serving, gently stir in mint; drizzle with the remaining vinaigrette.
Step 5, To Make Ahead Prepare through Step 2 and refrigerate for up to 2 hours. ',
            'calories' => 219,
            'carbohydrates' => 60,
            'protein' => 20,
            'fat' => 144,
            'menu_pics' => '69.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Chicken Cutlets with Sun-Dried Tomato Cream Sauce',
            "description" => 'Though a chicken cutlet may be a chicken breast cut in half, this recipe shows how to make chicken cutlets with double the deliciousness. A jar of sun-dried tomatoes does double duty for this healthy dinner idea. The flavorful oil they are packed in is used to sauté the chicken, and the tomatoes go into the cream sauce.',
            'published_at' => '2022-10-24',
            'total_of_likes' => 102,
            'ingredients' => '1 pound chicken cutlets
¼ teaspoon salt, divided
¼ teaspoon ground pepper, divided
½ cup slivered oil-packed sun-dried tomatoes, plus 1 tablespoon oil from the jar
½ cup finely chopped shallots
½ cup dry white wine
½ cup heavy cream
2 tablespoons chopped fresh parsley',
            'cooking_steps' => 'Step 1, Sprinkle chicken with 1/8 teaspoon each salt and pepper. Heat sun-dried tomato oil in a large skillet over medium heat.
Step 2, Add the chicken and cook, turning once, until browned and an instant-read thermometer inserted into the thickest part registers 165°F, about 6 minutes total. Transfer to a plate.
Step 3, Add sun-dried tomatoes and shallots to the pan. Cook, stirring, for 1 minute.
Step 4, Increase heat to high and add wine. Cook, scraping up any browned bits, until the liquid has mostly evaporated, about 2 minutes.
Step 5, Reduce heat to medium and stir in cream, any accumulated juices from the chicken and the remaining 1/8 teaspoon each salt and pepper; simmer for 2 minutes.
Step 6, Return the chicken to the pan and turn to coat with the sauce.
Step 7, Serve the chicken topped with the sauce and parsley.',
            'calories' => 324,
            'carbohydrates' => 32,
            'protein' => 100,
            'fat' => 171,
            'menu_pics' => '70.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Veggie & Hummus Sandwich',
            "description" => 'This mile-high vegetable and hummus sandwich makes the perfect heart-healthy vegetarian lunch to go. Mix it up with different flavors of hummus and different types of vegetables depending on your mood.',
            'published_at' => '2022-10-07',
            'total_of_likes' => 19,
            'ingredients' => '2 slices whole-grain bread
3 tablespoons hummus
¼ avocado, mashed
½ cup mixed salad greens
¼ medium red bell pepper, sliced
¼ cup sliced cucumber
¼ cup shredded carrot',
            'cooking_steps' => 'Step 1, Spread one slice of bread with hummus and the other with avocado.
Step 2, Fill the sandwich with greens, bell pepper, cucumber and carrot.
Step 3, Slice in half and serve.',
            'calories' => 325,
            'carbohydrates' => 160,
            'protein' => 52,
            'fat' => 126,
            'menu_pics' => '71.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Avocado-Egg Toast',
            "description" => 'Try it once and we think you will agree: Topping avocado toast with an egg is a near-perfect breakfast.',
            'published_at' => '2022-07-08',
            'total_of_likes' => 10,
            'ingredients' => '¼ avocado
¼ teaspoon ground pepper
⅛ teaspoon garlic powder
1 slice whole-wheat bread, toasted
1 large egg, fried
1 teaspoon Sriracha (Optional)
1 tablespoon scallion, sliced (Optional)',
            'cooking_steps' => 'Step 1, Combine avocado, pepper and garlic powder in a small bowl and gently mash.
Step 2, Top toast with the avocado mixture and fried egg. Garnish with Sriracha and scallion, if desired.',
            'calories' => 271,
            'carbohydrates' => 72,
            'protein' => 48,
            'fat' => 162,
            'menu_pics' => '72.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Old-Fashioned Oatmeal',
            "description" => 'Unlike quick-cooking oats, old-fashioned oatmeal has time to turn extra-creamy and luscious with just a few minutes more of cooking time. With a bit of milk and the toppings of your choice, this oatmeal recipe can be your go-to morning staple for a filling, healthy breakfast.',
            'published_at' => '2023-01-24',
            'total_of_likes' => 3,
            'ingredients' => '1 cup water or low-fat milk
Pinch of salt
½ cup rolled oats
2 tablespoons low-fat milk for serving
1 to 2 teaspoons honey, cane sugar or brown sugar for serving
Pinch of cinnamon',
            'cooking_steps' => 'Step 1, Combine water (or milk) and salt in a small saucepan. Bring to a boil.
Step 2, Stir in oats and reduce heat to medium; cook, stirring occasionally, for 5 minutes.
Step 3, Remove from heat, cover and let stand for 2 to 3 minutes.
Step 4, Top with milk, sweetener, cinnamon, dried fruits or nuts, if desired. ',
            'calories' => 150,
            'carbohydrates' => 108,
            'protein' => 20,
            'fat' => 27,
            'menu_pics' => '73.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Pesto Ravioli with Spinach & Tomatoes',
            "description" => 'This easy ravioli recipe calls for just five ingredients but is loaded with fresh flavors. By using grape tomatoes, prewashed spinach and prepared pesto, we eliminate all prep work, making this 15-minute Caprese-inspired ravioli the ideal weeknight meal.',
            'published_at' => '2022-11-17',
            'total_of_likes' => 12,
            'ingredients' => '2 8-ounce packages frozen or refrigerated cheese ravioli
1 tablespoon olive oil
1 pint grape tomatoes
1 5-ounce package baby spinach
⅓ cup pesto',
            'cooking_steps' => 'Step 1, Bring a large pot of water to a boil. Cook ravioli according to package directions; drain and set aside.
Step 2, Heat oil in a large nonstick skillet over medium heat. Add tomatoes; sauté until they begin to burst, 3 to 4 minutes.
Step 3, Add spinach and continue to cook, stirring frequently, until it wilts, 1 to 2 minutes.
Step 4, Add the cooked ravioli and pesto; stir gently to combine.',
            'calories' => 361,
            'carbohydrates' => 140,
            'protein' => 171,
            'fat' => 56,
            'menu_pics' => '74.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Loaded Sweet Potatoes',
            "description" => 'Cheddar cheese, scallions and bacon flavor these twice baked sweet potatoes. Quick and easy to make, this loaded sweet potato recipe is perfect for the holidays or a weeknight meal.',
            'published_at' => '2022-12-21',
            'total_of_likes' => 2,
            'ingredients' => '2 medium sweet potatoes (1 1/2 pounds)
½ cup shredded extra-sharp Cheddar cheese
3 scallions, sliced, divided
2 slices cooked bacon, chopped, divided
¼ teaspoon salt
¼ teaspoon ground pepper
4 tablespoons reduced-fat sour cream',
            'cooking_steps' => 'Step 1, Preheat oven to 400 degrees F.
Step 2, Prick sweet potatoes all over with a fork. Microwave on High until tender, about 12 minutes.
Step 3, When cool enough to handle, slice the potatoes in half lengthwise. Spoon the flesh into a medium bowl.
Step 4, Stir in cheese, all but 1 tablespoon of the scallions, half the bacon, salt and pepper.
Step 5, Place the potato shells on a rimmed baking sheet. Divide the mixture between the shells.
Step 6, Bake until the cheese is melted and the filling is hot, 12 to 15 minutes.
Step 7, Remove from the oven and top each half with 1 tablespoon sour cream.
Step 8, Sprinkle with the remaining 1 tablespoon scallions and the remaining bacon. ',
            'calories' => 148,
            'carbohydrates' => 56,
            'protein' => 24,
            'fat' => 72,
            'menu_pics' => '75.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Fruit & Yogurt Smoothie',
            "description" => 'This easy fruit smoothie recipe calls for just three ingredients: yogurt, fruit juice and frozen fruit. Mix up your fruit combinations from day to day for a healthy breakfast or snack that never gets boring.',
            'published_at' => '2022-12-20',
            'total_of_likes' => 8,
            'ingredients' => '3/4 cup nonfat plain yogurt
1/2 cup 100% pure fruit juice
1 1/2 cups (6 1/2 ounces) frozen fruit, such as blueberries, raspberries, pineapple or peaches',
            'cooking_steps' => 'Step 1, Puree yogurt with juice in a blender until smooth.
Step 2, With the motor running, add fruit through the hole in the lid and continue to puree until smooth.',
            'calories' => 279,
            'carbohydrates' => 224,
            'protein' => 48,
            'fat' => 18,
            'menu_pics' => '76.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Chocolate-Peanut Butter Protein Shake',
            "description" => 'This creamy high-protein shake will keep you satisfied for hours and tastes like a chocolate-peanut butter banana milkshake. You do not even need to add protein powder, thanks to the naturally occurring protein in the soymilk, Greek yogurt and peanut butter.',
            'published_at' => '2022-09-19',
            'total_of_likes' => 5,
            'ingredients' => '1 cup unsweetened vanilla soymilk
¾ cup sliced frozen banana
½ cup reduced-fat plain Greek yogurt
1 tablespoon cocoa powder
1 tablespoon natural peanut butter',
            'cooking_steps' => 'Step 1, Combine soymilk, banana, yogurt, cocoa powder and peanut butter in a blender
Step 2, blend until smooth.',
            'calories' => 402,
            'carbohydrates' => 164,
            'protein' => 104,
            'fat' => 144,
            'menu_pics' => '77.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Strawberry-Blueberry-Banana Smoothie',
            "description" => 'A smoothie with strawberries, blueberries and banana is delicately sweet and entirely kid-friendly, even with a boost of protein from hemp seeds. Freeze the fruits ahead of time for an extra frosty texture once blended.',
            'published_at' => '2020-06-19',
            'total_of_likes' => 1,
            'ingredients' => '½ cup frozen strawberries
½ cup frozen blueberries
1 small ripe banana (frozen, if desired)
¾ cup chilled unsweetened cashew milk, plus more if needed
1 tablespoon cashew butter
1 tablespoon hulled hemp seeds',
            'cooking_steps' => 'Step 1, Combine strawberries, blueberries, banana, cashew milk, cashew butter and hemp seeds in a blender.
Step 2, Process until smooth, adding more cashew milk, if needed, for desired consistency. Serve immediately. ',
            'calories' => 335,
            'carbohydrates' => 184,
            'protein' => 28,
            'fat' => 153,
            'menu_pics' => '78.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Strawberry-Banana Protein Smoothie',
            "description" => 'Greek yogurt and nut butter boost protein, and ground flaxseed adds omega-3s in this fresh fruit smoothie recipe. Use ice cubes if you like a frosty smoothie or opt for water if you don`t want it so cold.',
            'published_at' => '2020-06-19',
            'total_of_likes' => 3,
            'ingredients' => '1 cup hulled strawberries, fresh or frozen
½ medium banana
½ cup diced mango, fresh or frozen
½ cup nonfat plain Greek yogurt
1 tablespoon natural nut butter, such as cashew or almond
1 tablespoon ground flaxseed (flaxmeal)
¼ teaspoon vanilla extract
4 ice cubes or 1/2 cup water',
            'cooking_steps' => 'Step 1, Combine strawberries, banana, mango, yogurt, nut butter, flaxmeal, vanilla and ice cubes (or water) in a blender.
Step 2, Puree until smooth.',
            'calories' => 359,
            'carbohydrates' => 144,
            'protein' => 76,
            'fat' => 126,
            'menu_pics' => '79.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Pineapple-Grapefruit Detox Smoothie',
            "description" => 'Pineapple, grapefruit and spinach are packed with water and minerals, which can help hydrate you and supply your body with a bounty of fiber too. Electrolyte-rich coconut water is a refreshing dairy-free substitute for yogurt or milk. If you have time, freeze the coconut water into cubes for an extra-frosty smoothie.',
            'published_at' => '2019-07-09',
            'total_of_likes' => 4,
            'ingredients' => '1 cup plain coconut water
1 cup frozen diced pineapple
1 cup packed baby spinach
1 small grapefruit, peeled and segmented, plus any juice squeezed from the membranes
½ teaspoon grated fresh ginger
1 cup ice',
            'cooking_steps' => 'Step 1, Combine coconut water, pineapple, spinach, grapefruit and any juices, ginger and ice in a blender.
Step 2, Puree until smooth and frothy. ',
            'calories' => 102,
            'carbohydrates' => 100,
            'protein' => 8,
            'fat' => 0,
            'menu_pics' => '80.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Carrot-Apple Smoothie',
            "description" => 'This carrot and apple smoothie is creamy and has a light tropical flavor thanks to coconut milk. It is naturally sweetened from the carrots and apple, and the combination of ginger and lemon juice adds just a bit of spice and helps balance the flavor. The turmeric, fresh or dried, gives the smoothie a vibrant bright orange color.',
            'published_at' => '2020-12-15',
            'total_of_likes' => 3,
            'ingredients' => '2 large carrots, sliced (about 1 1/2 cups)
1 medium-ripe banana
1 large Honeycrisp apple, cored and quartered
1 cup light coconut milk
2 tablespoons fresh lemon juice
2 teaspoons minced fresh ginger
2 teaspoons minced fresh turmeric or 1 teaspoon ground turmeric
½ cup ice cubes',
            'cooking_steps' => 'Step 1, Combine carrots, banana, apple, coconut milk, lemon juice, ginger and turmeric in a blender.
Step 2, Process until smooth, about 45 seconds.
Step 3, Add ice cubes and process until smooth, about 30 seconds.
Step 4, Serve immediately. ',
            'calories' => 243,
            'carbohydrates' => 184,
            'protein' => 16,
            'fat' => 72,
            'menu_pics' => '81.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Almond Butter & Banana Protein Smoothie',
            "description" => 'Almond butter adds nutty flavor plus 7 grams of protein to this healthy, protein-rich banana smoothie.',
            'published_at' => '2019-08-15',
            'total_of_likes' => 6,
            'ingredients' => '1 small frozen banana
1 cup unsweetened almond milk
2 tablespoons almond butter
2 tablespoons unflavored protein powder
1 tablespoon sweetener of your choice (optional)
½ teaspoon ground cinnamon
4-6 ice cubes',
            'cooking_steps' => 'Step 1, Combine all ingredients in a blender and blend until smooth.',
            'calories' => 402,
            'carbohydrates' => 148,
            'protein' => 76,
            'fat' => 198,
            'menu_pics' => '82.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Spinach-Avocado Smoothie',
            "description" => 'This healthy green smoothie gets super creamy from the frozen banana and avocado. Make ahead (up to 1 day) and store it in the fridge until you need a veggie boost.',
            'published_at' => '2019-07-09',
            'total_of_likes' => 6,
            'ingredients' => '1 cup nonfat plain yogurt
1 cup fresh spinach
1 frozen banana
¼ avocado
2 tablespoons water
1 teaspoon honey',
            'cooking_steps' => 'Step 1, Combine yogurt, spinach, banana, avocado, water and honey in a blender. Puree until smooth.',
            'calories' => 357,
            'carbohydrates' => 232,
            'protein' => 72,
            'fat' => 72,
            'menu_pics' => '83.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Fresh mint tea',
            "description" => 'Grab a handful of fresh mint leaves and pour over boiling water to release its wonderful flavour and scent. Sweeten the tea with honey according to taste.',
            'published_at' => '2020-12-15',
            'total_of_likes' => 10,
            'ingredients' => 'handful of fresh mint (around ½ a pack)
honey to taste',
            'cooking_steps' => 'Step 1, Take a few leaves of the mint in one hand and sharply clap your other hand on top, then drop the leaves into a teapot or cafetiere.
Step 2, Repeat with the rest of the mint, saving a few small sprigs for each glass as a garnish.
Step 3, Fill up the pot with boiling water and let it infuse for 2-3 mins or until the liquid starts to take on a slight pale yellow/green hue.
Step 4, Strain the tea into cups or heatproof glasses and sweeten with honey to taste.
Step 5, Drop the reserved mint into the cups to decorate if you like.',
            'calories' => 13,
            'carbohydrates' => 12,
            'protein' => 0.4,
            'fat' => 0,
            'menu_pics' => '84.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Lemon & Ginger Tea',
            "description" => 'Combine lemon with root ginger to make this refreshing lemon and ginger tea that`s a great alternative to caffeinated drinks. Sweeten with honey if you like',
            'published_at' => '2021-08-08',
            'total_of_likes' => 9,
            'ingredients' => '1 lemon
2cm piece root ginger, finely sliced
honey to taste',
            'cooking_steps' => 'Step 1, Cut the lemon in half. Squeeze the juice from one half and slice the rest.
Step 2, Divide the lemon juice and slices between 2 mugs, along with the sliced ginger.
Step 3, Fill the mugs with boiling water and leave to steep for 3 mins or until cool enough to sip.
Step 4, Sweeten with honey if you like.',
            'calories' => 19,
            'carbohydrates' => 16,
            'protein' => 0.9,
            'fat' => 0.8,
            'menu_pics' => '85.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Turmeric latte',
            "description" => 'Making your own turmeric latte is easy with our recipe. Whizz together and benefit from the anti-inflammatory and antioxidant effects from the curcumin',
            'published_at' => '2019-03-23',
            'total_of_likes' => 57,
            'ingredients' => '350ml almond milk (or any milk of your choice)
¼ tsp ground turmeric
¼ tsp ground cinnamon
¼ tsp ground ginger
½ tsp vanilla extract
1 tsp maple syrup
grind of black pepper',
            'cooking_steps' => 'Step 1, Put all the ingredients in a saucepan and whisk constantly over a gentle heat, ideally with a milk frother if you have one.
Step 2, Once hot, pour into mugs and sprinkle with a little more cinnamon to serve.',
            'calories' => 38,
            'carbohydrates' => 12,
            'protein' => 4,
            'fat' => 18,
            'menu_pics' => '86.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Avocado & strawberry smoothie',
            "description" => 'A creamy breakfast-friendly blend that is high in calcium and low in calories.',
            'published_at' => '2023-03-08',
            'total_of_likes' => 39,
            'ingredients' => '½ avocado, stoned, peeled and cut into chunks
150g strawberry, halved
4 tbsp low-fat natural yogurt
200ml semi-skimmed milk
lemon or lime juice, to taste
honey, to taste',
            'cooking_steps' => 'Step 1, Put all the ingredients in a blender and whizz until smooth.
Step 2, If the consistency is too thick, add a little water.',
            'calories' => 197,
            'carbohydrates' => 60,
            'protein' => 36,
            'fat' => 99,
            'menu_pics' => '87.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Matcha with vanilla',
            "description" => 'Swap your regular tea or coffee for this delicious Japanese-style green matcha and vanilla tea. It is simple to make at home and takes just five minutes',
            'published_at' => '2020-11-19',
            'total_of_likes' => 1,
            'ingredients' => '½ tsp matcha powder
seeds from half a vanilla pod',
            'cooking_steps' => 'Step 1, Boil the kettle then pour 100ml of the water into a measuring jug.
Step 2, Pour half the hot water into a small bowl, to warm it, then add the matcha powder and vanilla seeds to the rest of the water in the jug.
Step 3, Whisk the mixture with a bamboo match whisk or mini electric whisk until it is smooth, lump-free and slightly bubbly.
Step 4, Discard the water in the warmed tea bowl, then pour in the prepared matcha tea.',
            'calories' => 12,
            'carbohydrates' => 4,
            'protein' => 4,
            'fat' => 1.8,
            'menu_pics' => '88.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Smoky ginger & honey tea',
            "description" => 'Swap your regular cup of tea for this smoky blend, which combines the flavour of lapsang souchong loose tea leaves with root ginger, green tea and honey',
            'published_at' => '2020-10-11',
            'total_of_likes' => 3,
            'ingredients' => 'thumbsized piece of root ginger, sliced
½ tsp lapsang souchong tea leaves
½ tsp green tea leaves
½-1 tsp honey',
            'cooking_steps' => 'Step 1, Set a slice of ginger aside and put the rest into your teapot, then add both types of tea leaves.
Step 2, Fill your cup with boiling water then pour it into the teapot - this allows the water to cool down a little bit first.
Step 3, Leave the tea to brew for 1 min then strain into your cup.
Step 4, Add honey to taste and the reserved ginger slice.',
            'calories' => 14,
            'carbohydrates' => 12,
            'protein' => 0.8,
            'fat' => 0,
            'menu_pics' => '89.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Mango & Spinach Smoothie',
            "description" => 'The sweet-tart taste of mango comes through in this simple smoothie, giving the tropical fruit the spotlight it deserves. Make it a mango morning!',
            'published_at' => '2021-04-21',
            'total_of_likes' => 18,
            'ingredients' => '1 ½ cups baby spinach
1 cup frozen mango chunks
¼ cup plain or vanilla low-fat Greek yogurt
1 cup unsweetened vanilla almond milk or other nondairy milk',
            'cooking_steps' => 'Step 1, Add spinach, mango, yogurt and almond milk (or other milk) to a blender.
Step 2, Blend on medium-low speed, using the tamper as necessary, until well combined.
Step 3, Increase speed to medium-high and blend until very smooth. ',
            'calories' => 210,
            'carbohydrates' => 120,
            'protein' => 40,
            'fat' => 63,
            'menu_pics' => '90.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Pineapple Green Smoothie',
            "description" => 'Use ripe bananas for this creamy Greek yogurt, spinach and pineapple smoothie. Chia seeds add healthy omega-3 fats, fiber and a little protein for an extra nutritional boost.',
            'published_at' => '2022-11-03',
            'total_of_likes' => 21,
            'ingredients' => '½ cup unsweetened almond milk
⅓ cup nonfat plain Greek yogurt
1 cup baby spinach
1 cup frozen banana slices (about 1 medium banana)
½ cup frozen pineapple chunks
1 tablespoon chia seeds
1-2 teaspoons pure maple syrup or honey (optional)',
            'cooking_steps' => 'Step 1, Add almond milk and yogurt to a blender, then add spinach, banana, pineapple, chia seeds and sweetener (if using);
Step 2, Blend until smooth.',
            'calories' => 297,
            'carbohydrates' => 216,
            'protein' => 52,
            'fat' => 54,
            'menu_pics' => '91.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Berry-Kefir Smoothie',
            "description" => 'Get a probiotic boost at breakfast when you add kefir to your smoothie. Feel free to use any berries and nut butter you have on hand in this healthy smoothie recipe.',
            'published_at' => '2017-04-18',
            'total_of_likes' => 6,
            'ingredients' => '1 ½ cups frozen mixed berries
1 cup plain kefir
½ medium banana
2 teaspoons almond butter
½ teaspoon vanilla extract',
            'cooking_steps' => 'Step 1, Combine berries, kefir, banana, almond butter and vanilla in a blender.
Step 2, Blend until smooth. ',
            'calories' => 304,
            'carbohydrates' => 212,
            'protein' => 60,
            'fat' => 63,
            'menu_pics' => '92.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Avocado & Banana Smoothie',
            "description" => 'If you love a creamy smoothie, this one is for you: avocado and banana combine for a thick and rich drink. Freeze your banana slices to make it more of an ice cream-style smoothie.',
            'published_at' => '2021-04-22',
            'total_of_likes' => 32,
            'ingredients' => '1 medium banana, sliced
½ avocado, pitted and sliced
2 teaspoons honey
5-6 ice cubes
⅔ cup unsweetened vanilla coconut milk or almond milk',
            'cooking_steps' => 'Step 1, Add banana, avocado, honey, ice cubes and coconut milk (or almond milk) to a blender.
Step 2, Blend on medium-low speed, using the tamper as necessary, until well combined.
Step 3, Increase speed to medium-high and blend until very smooth.',
            'calories' => 338,
            'carbohydrates' => 192,
            'protein' => 12,
            'fat' => 162,
            'menu_pics' => '93.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Kale & Spinach Smoothie',
            "description" => 'When you really need to eat your greens, go for this smoothie that packs both kale and spinach into every sip. Kiwi and dates add natural sweetness, and almond butter and almond milk keep you full.',
            'published_at' => '2021-04-21',
            'total_of_likes' => 28,
            'ingredients' => '1 cup baby kale
1 cup baby spinach
5 dates, pitted and roughly chopped
1 kiwi, peeled and sliced
2 tablespoons creamy almond butter
1 cup unsweetened vanilla almond milk',
            'cooking_steps' => 'Step 1, Add kale, spinach, dates, kiwi, almond butter and almond milk to a blender.
Step 2, Blend on medium-low speed, using the tamper as necessary, until well combined.
Step 3, Increase speed to medium-high and blend until very smooth. ',
            'calories' => 419,
            'carbohydrates' => 204,
            'protein' => 48,
            'fat' => 189,
            'menu_pics' => '94.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Cherry-Mocha Smoothie',
            "description" => 'For a fast-paced breakfast on the go, give your blender a whirl. Heart disease does not stand a chance thanks to the healthy fats from the almond butter and health-boosting phytonutrients in the cocoa powder and cherries in this tasty breakfast smoothie.',
            'published_at' => '2020-06-19',
            'total_of_likes' => 2,
            'ingredients' => '1 cup frozen unsweetened pitted dark sweet cherries
1 cup unsweetened chocolate almond milk
5.3 to 6-ounce carton vanilla fat-free Greek yogurt
½ medium banana
2 tablespoons unsweetened cocoa powder
2 tablespoons almond butter
1 teaspoon instant espresso coffee powder
1 teaspoon vanilla
2 cups ice cubes
1 tablespoon Dark chocolate shavings, chocolate-covered espresso beans',
            'cooking_steps' => 'Step 1, In a blender combine the cherries, almond milk, Greek yogurt, banana, cocoa powder, almond butter, espresso coffee powder and vanilla. Cover and blend until smooth.
Step 2, Add ice cubes; cover and blend until smooth.
Step 3, Peel remaining banana half, wrap tightly in plastic wrap, then in foil. Freeze for a later use.
Step 4, Pour into glasses and if desired, top with chocolate shavings, chocolate-covered espresso beans and/or additional banana slices. ',
            'calories' => 272,
            'carbohydrates' => 136,
            'protein' => 52,
            'fat' => 108,
            'menu_pics' => '95.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Anti-Inflammatory Beet Smoothie',
            "description" => 'This vibrant beet smoothie combines sweet and earthy beets with berries, banana and orange juice for a well-balanced flavor. Look for packaged cooked beets where the prepared fruits and vegetables are sold. Beets are high in belatins, an antioxidant that may help decrease inflammation in the body. Other nutrient-packed ingredients add even more anti-inflammatory power, like the anthocyanins in blueberries and the gingerol found in ginger.',
            'published_at' => '2023-03-16',
            'total_of_likes' => 1,
            'ingredients' => '1 cup frozen strawberries
1 cup frozen blueberries
1 cup orange juice
1 (8.8-ounce) package refrigerated cooked beets (such as Love Beets)
1 medium banana, peeled
1 medium carrot, peeled and sliced
1 (1/2 inch) piece fresh ginger, peeled and grated',
            'cooking_steps' => 'Step 1, Combine strawberries, blueberries, orange juice, beets, banana, carrot and ginger in a blender;
Step 2, process until combined, about 30 seconds.
Step 3, Divide between 2 glasses. Serve immediately. ',
            'calories' => 248,
            'carbohydrates' => 232,
            'protein' => 16,
            'fat' => 9,
            'menu_pics' => '96.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Carrot Smoothie',
            "description" => 'This type of drink tends to be pricey in the big city juice bars. Now you can make the recipe at home.',
            'published_at' => '2020-06-19',
            'total_of_likes' => 2,
            'ingredients' => '1 cup sliced carrots
½ teaspoon finely shredded orange peel
1 cup orange juice
1 ½ cups ice cubes
3 (1 inch) pieces Orange peel curls',
            'cooking_steps' => 'Step 1, In a covered small saucepan, cook carrots in a small amount of boiling water about 15 minutes or until very tender. Drain well. Cool.
Step 2, Place drained carrots in a blender. Add finely shredded orange peel and orange juice. Cover and blend until smooth.
Step 3, Add ice cubes; cover and blend until smooth.
Step 4, Pour into glasses. If desired, garnish with orange peel curls. ',
            'calories' => 55,
            'carbohydrates' => 52,
            'protein' => 4,
            'fat' => 0,
            'menu_pics' => '97.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Kale & Banana Smoothie',
            "description" => 'This simple and sweet kale and banana smoothie is also versatile: Use cow`s milk for a milkshake-style smoothie, oat milk for more sweetness, or a nut milk for more protein.',
            'published_at' => '2021-04-23',
            'total_of_likes' => 13,
            'ingredients' => '1 ½ cups baby kale
1 small banana, sliced
2 teaspoons honey
5-6 ice cubes
1 cup reduced-fat milk or nondairy milk',
            'cooking_steps' => 'Step 1, Add kale, banana, honey, ice cubes and milk (or nondairy milk) to a blender.
Step 2, Blend on medium-low speed, using the tamper as necessary, until well combined.
Step 3, Increase speed to medium-high and blend until very smooth.',
            'calories' => 266,
            'carbohydrates' => 192,
            'protein' => 40,
            'fat' => 45,
            'menu_pics' => '98.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Strawberry-Pineapple Smoothie',
            "description" => 'Blend almond milk, strawberry and pineapple for a smoothie that`s so easy you can make it on busy mornings. A bit of almond butter adds richness and filling protein. Freeze some of the almond milk for an extra-icy texture.',
            'published_at' => '2020-06-19',
            'total_of_likes' => 4,
            'ingredients' => '1 cup frozen strawberries
1 cup chopped fresh pineapple
¾ cup chilled unsweetened almond milk, plus more if needed
1 tablespoon almond butter',
            'cooking_steps' => 'Step 1, Combine strawberries, pineapple, almond milk and almond butter in a blender.
Step 2, Process until smooth, adding more almond milk, if needed, for desired consistency. Serve immediately',
            'calories' => 255,
            'carbohydrates' => 156,
            'protein' => 24,
            'fat' => 99,
            'menu_pics' => '99.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'menu_name' => 'Strawberry-Pineapple Smoothie',
            "description" => 'Whir up frozen bananas with peanut butter and cocoa in this sweet, creamy drink recipe to get all the delicious flavors of a milkshake with the health benefits of a smoothie.',
            'published_at' => '2016-11-12',
            'total_of_likes' => 4,
            'ingredients' => '1 cup frozen strawberries
1 cup chopped fresh pineapple
¾ cup chilled unsweetened almond milk, plus more if needed
1 tablespoon almond butter',
            'cooking_steps' => 'Step 1, Combine milk, banana, peanut butter, cocoa, chia or hemp seeds (if using) and vanilla in a blender.
Step 2, Puree until smooth ',
            'calories' => 211,
            'carbohydrates' => 96,
            'protein' => 36,
            'fat' => 81,
            'menu_pics' => '100.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Sautéed Striped Bass with Lemon and Herb Sauce Is the Perfect Summer Dinner',
            "description" => 'If you find sea bass to be strong-flavored, remove the pan drippings from the skillet before making the sauce for a milder final product. The wine-butter sauce is a good complement to the dish, especially with caramelized lemon notes.',
            'published_at' => '2023-04-03',
            'total_of_likes' => 1,
            'ingredients' => '4 (5 ounce) skin-on striped bass fillets (either hybrid striped bass or wild), patted dry
¼ teaspoon black pepper
1 teaspoon kosher salt, divided
1 lemon, halved lengthwise
3 tablespoons olive oil
2 tablespoons dry white wine
2 tablespoons cold unsalted butter
2 tablespoons chopped fresh parsley',
            'cooking_steps' => 'Step 1, Sprinkle fillets with pepper and 3/4 teaspoon salt; let stand 20 minutes.
Step 2, Heat a large nonstick skillet over medium-high. Add lemons, cut sides down, and cook until lightly charred, about 5 minutes.
Step 3, Add olive oil, and place fillets, skin sides down, in skillet with lemon. Cook, undisturbed, until sides of skin begin to brown and fish is almost fully opaque, 5 to 7 minutes.
Step 4, When the fillets appear to be approximately 90% cooked through, gently shake skillet.
Step 5, When cooked with patience, the fish will release itself from the pan, allowing you to flip the fillets without sticking. Flip fillets, and cook 1 minute.
Step 6, Transfer fish and lemons to plates. Cut each lemon half into 2 wedges. Wipe skillet clean.
Step 7, Reduce heat to medium-low, and add wine, remaining 1/4 teaspoon salt and butter.
Step 8, As butter melts, whisk to emulsify mixture. Spoon sauce over fillets. Sprinkle with parsley, and serve with a charred lemon wedge. ',
            'calories' => 290,
            'carbohydrates' => 76,
            'protein' => 104,
            'fat' => 27,
            'menu_pics' => '101.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Creamy Chicken Noodle Soup with Rotisserie Chicken',
            "description" => 'This creamy chicken noodle soup recipe has a delicious pot pie feel to it. We call for rotisserie chicken to streamline your prep time—look for a nice big one with lots of breast meat on it. Pair this comforting and easy soup recipe with a green salad, or, if you`re really hungry, a grilled cheese sandwich.',
            'published_at' => '2022-11-28',
            'total_of_likes' => 46,
            'ingredients' => '2 tablespoons unsalted butter
1 tablespoon olive oil
2 cups chopped yellow onion (from 1 large onion)
1 cup chopped carrots (from 2 medium carrots)
1 cup chopped celery (from 2 large stalks)
1 ¾ teaspoons kosher salt
3 tablespoons all-purpose flour
4 cups unsalted chicken stock
2 cups whole milk
4 ounces uncooked whole-wheat egg noodles
3 cups coarsely chopped rotisserie chicken breast (from 2 rotisserie chickens)
1 cup frozen green peas',
            'cooking_steps' => 'Step 1, Melt butter with olive oil in a large Dutch oven over medium-high heat.
Step 2, Add onion, carrots, celery and salt and cook, stirring often, until vegetables are slightly softened, 6 to 8 minutes.
Step 3, Add flour and stir to coat. Stir in broth and milk and let mixture come to a boil.
Step 4, Add uncooked noodles to boiling mixture. Cover and cook until noodles are al dente, about 8 minutes.
Step 5, Stir in chicken and peas and cook until pasta reaches desired doneness and chicken and peas are warmed through, about 1 to 2 more minutes. Serve immediately. ',
            'calories' => 258,
            'carbohydrates' => 96,
            'protein' => 92,
            'fat' => 81,
            'menu_pics' => '102.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Spinach & Mushroom Quiche',
            "description" => 'This healthy vegetarian quiche recipe is as simple as it gets. It`s a quiche without the fussy crust! It`s filled with sweet wild mushrooms and savory Gruyère cheese. Enjoy it for breakfast or brunch, or serve it with a light salad for lunch.',
            'published_at' => '2022-12-08',
            'total_of_likes' => 47,
            'ingredients' => '2 tablespoons extra-virgin olive oil
8 ounces sliced fresh mixed wild mushrooms such as cremini, shiitake, button and/or oyster mushrooms
1 ½ cups thinly sliced sweet onion
1 tablespoon thinly sliced garlic
5 ounces fresh baby spinach (about 8 cups), coarsely chopped
6 large eggs
¼ cup whole milk
¼ cup half-and-half
1 tablespoon Dijon mustard
1 tablespoon fresh thyme leaves, plus more for garnish
¼ teaspoon salt
¼ teaspoon ground pepper
1 ½ cups shredded Gruyère cheese',
            'cooking_steps' => 'Step 1, Preheat oven to 375 degrees F. Coat a 9-inch pie pan with cooking spray; set aside.
Step 2, Heat oil in a large nonstick skillet over medium-high heat; swirl to coat the pan.
Step 3, Add mushrooms; cook, stirring occasionally, until browned and tender, about 8 minutes.
Step 4, Add onion and garlic; cook, stirring often, until softened and tender, about 5 minutes.
Step 5, Add spinach; cook, tossing constantly, until wilted, 1 to 2 minutes. Remove from heat.
Step 6, Whisk eggs, milk, half-and-half, mustard, thFold in the mushroom mixture and cheese. Spoon into the prepared pie pan. Bake until set and golden brown, about 30 minutes.yme, salt and pepper in a medium bowl.
Step 7, Fold in the mushroom mixture and cheese. Spoon into the prepared pie pan. Bake until set and golden brown, about 30 minutes.
Step 8, Let stand for 10 minutes; slice. Garnish with thyme and serve. ',
            'calories' => 277,
            'carbohydrates' => 28,
            'protein' => 68,
            'fat' => 180,
            'menu_pics' => '103.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Egg, Hash Brown & Bacon Breakfast Skillet',
            "description" => 'This breakfast skillet with eggs and hash browns is reminiscent of the hashbrown bowl at Waffle House. It`s filling and tastes decadent, but is still a pretty low-calorie breakfast.',
            'published_at' => '2022-09-20',
            'total_of_likes' => 3,
            'ingredients' => '3 slices center-cut bacon, chopped
2 tablespoons canola oil, divided
16 ounces frozen southern-style diced hash browns (4 cups)
4 large eggs
¼ teaspoon kosher salt
¼ teaspoon black pepper
1 ½ ounces sharp Cheddar cheese, shredded (about 1/3 cup)
¼ cup chopped scallions (from 2 scallions)
1 teaspoon Mexican-style hot sauce (such as Cholula)',
            'cooking_steps' => 'Step 1, Cook bacon in a large (12-inch) cast-iron skillet over medium-low, stirring occasionally, until crisp, 8 to 10 minutes.
Step 2, Transfer bacon to a paper towel-lined plate using a slotted spoon; reserve drippings in skillet.
Step 3, Add 1 tablespoon of the canola oil to drippings in skillet; increase heat to medium-high.
Step 4, Add potatoes in a single layer; cook, covered, undisturbed, until potatoes are crisped on bottoms, about 7 minutes.
Step 5, Uncover; stir potatoes, and stir in remaining 1 tablespoon canola oil. Cook, covered, until potatoes are well browned, about 5 minutes.
Step 6, Uncover skillet; create 4 wells in potatoes using the back of a spoon. Crack 1 egg into each well.
Step 7, Sprinkle entire skillet with salt and pepper. Sprinkle potatoes with cheese, being careful not to cover eggs with cheese.
Step 8, Cook over medium-high, covered, until cheese is melted and egg whites are set but yolks are still mostly runny, about 3 minutes.
Step 9, Remove from heat; let stand 2 minutes. Sprinkle skillet with scallions and cooked bacon; drizzle with hot sauce.',
            'calories' => 280,
            'carbohydrates' => 76,
            'protein' => 52,
            'fat' => 153,
            'menu_pics' => '104.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Banana Pancakes',
            "description" => 'These delicious and unbelievably simple pancakes are best enjoyed right after cooking. With just eggs and a banana, you can have healthy grain-free pancakes with no added sugar. Serve with maple syrup and yogurt or ricotta cheese to add in some protein.',
            'published_at' => '2019-02-11',
            'total_of_likes' => 5,
            'ingredients' => '2 large eggs
1 medium banana',
            'cooking_steps' => 'Step 1, Puree eggs and banana in a blender until smooth.
Step 2, Lightly oil a large nonstick skillet (dab a piece of crumpled paper towel with oil and rub the oil over the surface of the skillet. ) and heat over medium heat.
Step 3, Using 2 tablespoons of batter for each pancake, drop 4 mounds of batter into the pan.
Step 4, Cook until bubbles appear on the surface and the edges look dry, 2 to 4 minutes.
Step 5, Using a thin spatula, gently flip the pancakes and cook until browned on the bottom, 1 to 2 minutes more.
Step 6, Transfer the pancakes to a plate. Lightly oil the pan again and repeat with the remaining batter. ',
            'calories' => 124,
            'carbohydrates' => 56,
            'protein' => 28,
            'fat' => 45,
            'menu_pics' => '105.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Muffin-Tin Quiches with Smoked Cheddar & Potato',
            "description" => 'Potatoes, cheese and greens make this mini quiche recipe delicious and satisfying. Bake up a batch over the weekend and you`ll have breakfast available in a hurry for the rest of the week.',
            'published_at' => '2018-06-08',
            'total_of_likes' => 36,
            'ingredients' => '2 tablespoons extra-virgin olive oil
1 ½ cups finely diced red-skinned potatoes
1 cup diced red onion
¾ teaspoon salt, divided
8 large eggs
1 cup shredded smoked Cheddar cheese
½ cup low-fat milk
½ teaspoon ground black pepper
1 ½ cups chopped fresh spinach',
            'cooking_steps' => 'Step 1, Preheat oven to 325 degrees F. Coat a 12-cup muffin tin with cooking spray.
Step 2, Heat oil in a large skillet over medium heat. Add potatoes, onion and 1/4 teaspoon salt and cook, stirring, until the potatoes are just cooked through, about 5 minutes.
Step 3, Remove from heat and let cool 5 minutes.
Step 4, Whisk eggs, cheese, milk, pepper and the remaining 1/2 teaspoon salt in a large bowl. Stir in spinach and the potato mixture.
Step 5, Divide the quiche mixture among the prepared muffin cups.
Step 6, Bake until firm to the touch, about 25 minutes.
Step 7, Let stand 5 minutes before removing from the tin. ',
            'calories' => 238,
            'carbohydrates' => 44,
            'protein' => 56,
            'fat' => 144,
            'menu_pics' => '106.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Blueberry-Lemon Ricotta Pound Cake',
            "description" => 'This healthy pound cake recipe isn`t just delicious—it also only requires one bowl to make. For the best cake texture, be sure to beat the sugar and butter together long enough in Step 2 to look creamy—the time it takes to get there varies according to the type of electric mixer you have. Serve with brunch or alongside a cup of coffee in the afternoon.',
            'published_at' => '2023-02-02',
            'total_of_likes' => 60,
            'ingredients' => '¾ cup granulated sugar
5 tablespoons unsalted butter, at room temperature
3 large eggs, at room temperature (see Tip)
¾ cup part-skim ricotta cheese
2 tablespoons lemon zest
2 tablespoons lemon juice plus 1 teaspoon, divided
1 teaspoon vanilla extract
1 ½ cups white whole-wheat flour
2 teaspoons baking powder
½ teaspoon salt
2 cups fresh blueberries
2 tablespoons packed confectioners` sugar',
            'cooking_steps' => 'Step 1, Preheat oven to 350 degrees F. Coat a 9-by-5-inch loaf pan with cooking spray and line the bottom with parchment paper.
Step 2, Beat sugar and butter in a large bowl with an electric mixer on medium-high speed until creamy. Beat in eggs, one at a time, until fully incorporated.
Step 3, Reduce the mixer speed to medium-low and beat in ricotta, lemon zest, 2 tablespoons lemon juice and vanilla until just combined.
Step 4, Sprinkle flour on top, then evenly sprinkle baking powder and salt over the flour. With the mixer on low speed, beat until almost combined.
Step 5, Add blueberries and gently fold into the batter. Transfer to the prepared pan.
Step 6, Bake the cake until starting to brown around the edges and a tester inserted in the center comes out clean, about 1 hour.
Step 7, Let cool in the pan on a wire rack for 20 minutes.
Step 8, Run a knife around the edge to loosen the cake, then invert it onto the rack. Carefully turn it right-side up. Let cool completely.
Step 9, Clean the bowl, add confectioners` sugar and whisk in the remaining 1 teaspoon lemon juice until smooth. Brush the glaze on the cake. ',
            'calories' => 303,
            'carbohydrates' => 180,
            'protein' => 32,
            'fat' => 99,
            'menu_pics' => '107.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Breakfast Tostada',
            "description" => 'This easy and satisfying Mexican-inspired breakfast recipe brings lots of flavor to your plate. Using a mix of fresh and store-bought ingredients, breakfast is on the table in 20 minutes.',
            'published_at' => '2022-04-12',
            'total_of_likes' => 13,
            'ingredients' => '¼ cup no-sodium-added black beans, rinsed
2 tablespoons water
2 tablespoons lime juice, divided
¼ teaspoon taco seasoning
¼ avocado, mashed
¼ cup diced Roma tomato
1 tablespoon diced white onion
1 (6-inch) whole-wheat or corn tortilla
Nonstick cooking spray
1 large egg
¼ cup shredded romaine lettuce',
            'cooking_steps' => 'Step 1, Combine black beans, water, 1 tablespoon lime juice and taco seasoning in a microwave-safe bowl. Microwave on High for 2 minutes.
Step 2, Using a fork, mash the beans into a paste; set aside.
Step 3, Mash avocado with a fork in a small bowl. Add tomato, onion, the remaining 1 tablespoon lime juice and a pinch of salt. Set aside.
Step 4, Coat tortilla on both sides with cooking spray. Heat a small nonstick skillet over medium heat.
Step 5, Add the tortilla to the pan and toast, flipping once, until crisp and lightly browned on both sides, 3 to 4 minutes. Transfer to a plate.
Step 6, Crack egg into the pan and reduce heat to medium-low. Cook, flipping once if desired, until the white is set, 2 to 3 minutes.
Step 7, To assemble the tostada, layer the bean mixture, avocado mixture and lettuce on the tortilla. Top with the egg. ',
            'calories' => 365,
            'carbohydrates' => 160,
            'protein' => 60,
            'fat' => 171,
            'menu_pics' => '108.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Spinach & Egg Scramble with Raspberries',
            "description" => 'This quick egg scramble with hearty bread is one of the best breakfasts for weight loss. It combines protein-packed eggs and superfood raspberries with filling whole-grain toast and nutrient-rich spinach. The protein and fiber help fill you up and keep you going through the morning.',
            'published_at' => '2019-07-09',
            'total_of_likes' => 2,
            'ingredients' => '1 teaspoon canola oil
1 ½ cups baby spinach (1 1/2 ounces)
2 large eggs, lightly beaten
Pinch of kosher salt
Pinch of ground pepper
1 slice whole-grain bread, toasted
½ cup fresh raspberries',
            'cooking_steps' => 'Step 1, Heat oil in a small nonstick skillet over medium-high heat.
Step 2, Add spinach and cook until wilted, stirring often, 1 to 2 minutes.
Step 3, Transfer the spinach to a plate. Wipe the pan clean, place over medium heat and add eggs.
Step 4, Cook, stirring once or twice to ensure even cooking, until just set, 1 to 2 minutes.
Step 5, Stir in the spinach, salt and pepper.
Step 6, Serve the scramble with toast and raspberries.',
            'calories' => 296,
            'carbohydrates' => 84,
            'protein' => 72,
            'fat' => 144,
            'menu_pics' => '109.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'White Bean & Avocado Toast',
            "description" => 'Mashed avocado and white beans make for a fiber-rich and creamy topping, the perfect partner for a crispy slice of toast. Try it for a quick breakfast or snack.',
            'published_at' => '2019-07-03',
            'total_of_likes' => 9,
            'ingredients' => '1 slice whole-wheat bread, toasted
¼ avocado, mashed
½ cup canned white beans, rinsed and drained
Kosher salt to taste
Ground pepper to taste
1 pinch Crushed red pepper',
            'cooking_steps' => 'Step 1, Top toast with mashed avocado and white beans.
Step 2, Season with a pinch each of salt, pepper and crushed red pepper. ',
            'calories' => 230,
            'carbohydrates' => 140,
            'protein' => 48,
            'fat' => 81,
            'menu_pics' => '110.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Spinach & Egg Tacos',
            "description" => 'Hard-boiled eggs are combined with spinach, cheese and salsa for a quick, flavorful breakfast. Mashed avocado provides a creamy element while a squeeze of lime juice brings acidity.',
            'published_at' => '2022-02-07',
            'total_of_likes' => 32,
            'ingredients' => '¼ avocado
1 teaspoon lime juice
2 hard-boiled eggs, chopped
2 corn tortillas, warmed
1 cup chopped spinach, divided
2 tablespoons shredded Cheddar cheese, divided
2 tablespoons salsa, divided',
            'cooking_steps' => 'Step 1, Smash avocado in a small bowl with lime juice and salt.
Step 2, Mix in eggs.
Step 3, Divide the mixture between tortillas and top each with 1/2 cup spinach and 1 tablespoon each cheese and salsa. ',
            'calories' => 421,
            'carbohydrates' => 128,
            'protein' => 85,
            'fat' => 216,
            'menu_pics' => '111.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Smoked Salmon & Cream Cheese Omelet',
            "description" => 'The key to this healthy smoked salmon omelet recipe is cooking the eggs over low heat so the curds set up nice and soft. A splash of milk in the eggs is added insurance to keep the salmon omelet from turning rubbery.',
            'published_at' => '2021-09-03',
            'total_of_likes' => 2,
            'ingredients' => '2 large eggs
1 teaspoon reduced-fat milk or water
⅛ teaspoon ground pepper, plus more for garnish
Pinch of salt
1 teaspoon butter
2 tablespoons chopped smoked salmon
1 tablespoon cream cheese, softened, or crumbled feta
1 tablespoon finely chopped red onion
1 ½ teaspoons chopped fresh dill, plus more for garnish',
            'cooking_steps' => 'Step 1, Whisk eggs, milk (or water), pepper and salt in a small bowl.
Step 2, Melt butter in a small nonstick skillet over medium-low heat, tilting the pan to make sure the entire bottom is coated.
Step 3, Add the egg mixture and cook for 1 minute without stirring.
Step 4, Sprinkle salmon, cheese, onion and dill over one half of the eggs. Cook for 1 minute.
Step 5, Using a flexible spatula, lift the bare side to let raw egg from the middle flow underneath; you may need to tilt the pan slightly.
Step 6, Continue lifting in different spots until there`s almost no raw egg on top. Cook 2 minutes more.
Step 7, Using the spatula, flip the bare side over the filling, folding the omelet in half, and cook for 1 minute. (If the eggs are starting to brown, lower the heat.)
Step 8, Carefully flip the omelet over and cook 1 minute more.
Step 9, Serve immediately, garnished with more dill and pepper, if desired. ',
            'calories' => 254,
            'carbohydrates' => 12,
            'protein' => 68,
            'fat' => 171,
            'menu_pics' => '112.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Avocado & Kale Omelet',
            "description" => 'Make this kale and avocado omelet for a satiating, high-protein breakfast. Fiber-rich kale will keep hunger at bay for longer in this healthy omelet recipe.',
            'published_at' => '2021-09-03',
            'total_of_likes' => 6,
            'ingredients' => '2 large eggs
1 teaspoon low-fat milk
Pinch of salt
2 teaspoons extra-virgin olive oil, divided
1 cup chopped kale
1 tablespoon lime juice
1 tablespoon chopped fresh cilantro
1 teaspoon unsalted sunflower seeds
Pinch of crushed red pepper
Pinch of salt
¼ avocado, sliced',
            'cooking_steps' => 'Step 1, Beat eggs with milk and salt in a small bowl.
Step 2, Heat 1 teaspoon oil in a small nonstick skillet over medium heat.
Step 3, Add the egg mixture and cook until the bottom is set and the center is still a bit runny, 1 to 2 minutes.
Step 4, Flip the omelet over and cook until set, about 30 seconds more. Transfer to a plate.
Step 5, Toss kale with the remaining 1 teaspoon oil, lime juice, cilantro, sunflower seeds, crushed red pepper and a pinch of salt.
Step 6, Top the omelet with the kale salad and avocado. ',
            'calories' => 339,
            'carbohydrates' => 36,
            'protein' => 60,
            'fat' => 252,
            'menu_pics' => '113.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Spinach & Feta Scrambled Egg Pitas',
            "description" => 'This meatless dinner comes together in only 15 minutes, thanks to the convenience of frozen chopped spinach and crumbled feta. We`ve added a flavorful burst of sun-dried tomato tapenade to spread over the whole-wheat pita before nestling the scrambled eggs inside. If you can`t find it, basil pesto or sun-dried tomato pesto also work well.',
            'published_at' => '2022-05-05',
            'total_of_likes' => 4,
            'ingredients' => '1 tablespoon extra-virgin olive oil
1 (10 ounce) block frozen chopped spinach, thawed, drained and squeezed dry
Pinch salt
8 large eggs, beaten
¼ cup finely crumbled feta cheese
Freshly ground pepper to taste
8 teaspoons sun-dried tomato tapenade or sun-dried tomato pesto
4 whole-wheat pitas (5-inch), cut in half, warmed if desired (Wrap in foil; bake in toaster oven at 350 degrees F until hot, 8 to 10 minutes. )',
            'cooking_steps' => 'Step 1, Heat oil in a large nonstick skillet over medium heat.
Step 2, Add spinach and salt and cook until steaming hot, stirring occasionally.
Step 3, Add eggs and cook, stirring the eggs as they set, until they form soft curds and are just moist, 4 to 5 minutes.
Step 4, Add feta and pepper and cook until set.
Step 5, Spread tapenade (or pesto) inside pita pockets, 2 teaspoons per pita.
Step 6, Divide the egg mixture among the pitas. ',
            'calories' => 303,
            'carbohydrates' => 84,
            'protein' => 80,
            'fat' => 144,
            'menu_pics' => '114.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Baked Banana-Nut Oatmeal Cups',
            "description" => 'Muffins meet oatmeal in these moist and tasty grab-and-go oatmeal cups.',
            'published_at' => '2022-09-19',
            'total_of_likes' => 37,
            'ingredients' => '3 cups rolled oats
1 ½ cups low-fat milk
2 ripe bananas, mashed (about 3/4 cup)
⅓ cup packed brown sugar
2 large eggs, lightly beaten
1 teaspoon baking powder
1 teaspoon ground cinnamon
1 teaspoon vanilla extract
½ teaspoon salt
½ cup toasted chopped pecans',
            'cooking_steps' => 'Step 1, Preheat oven to 375°F. Coat a muffin tin with cooking spray.
Step 2, Combine oats, milk, bananas, brown sugar, eggs, baking powder, cinnamon, vanilla and salt in a large bowl. Fold in pecans.
Step 3, Divide the mixture among the muffin cups (about 1/3 cup each).
Step 4, Bake until a toothpick inserted in the center comes out clean, about 25 minutes.
Step 5, Cool in the pan for 10 minutes, then turn out onto a wire rack.
Step 6, Serve warm or at room temperature. ',
            'calories' => 176,
            'carbohydrates' => 104,
            'protein' => 20,
            'fat' => 54,
            'menu_pics' => '115.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Spaghetti & Spinach with Sun-Dried Tomato Cream Sauce',
            "description" => 'To achieve flavor quickly in this sun-dried tomato pasta recipe, we use the oil from sun-dried tomatoes to create the base of the cream sauce. Meanwhile, the residual heat of the pasta wilts the spinach in record time for a fast weeknight dinner.',
            'published_at' => '2022-10-12',
            'total_of_likes' => 26,
            'ingredients' => '5 ounces baby spinach, coarsely chopped
8 ounces whole-wheat spaghetti
½ cup slivered oil-packed sun-dried tomatoes, plus 1 tablespoon oil from the jar
½ cup halved and thinly sliced onion
3 cloves garlic, minced
¼ teaspoon crushed red pepper
¼ teaspoon salt
¼ teaspoon ground pepper
1 cup low-sodium vegetable or chicken broth
½ cup sour cream
¼ cup grated Parmesan cheese
1 tablespoon unsalted butter',
            'cooking_steps' => 'Step 1, Place spinach in a large colander in the sink. Bring a large saucepan of water to a boil over high heat.
Step 2, Add spaghetti and cook according to package directions.
Step 3, Drain the pasta over the spinach; toss to wilt the spinach.
Step 4, Meanwhile, heat sun-dried tomato oil in a large skillet over medium heat.
Step 5, Add onion and sun-dried tomatoes; cook, stirring, until softened, about 3 minutes.
Step 6, Add garlic, crushed red pepper, salt and pepper; cook, stirring, for 1 minute.
Step 7, Increase heat to medium-high and add broth; cook, stirring, until reduced by about half, about 2 minutes.
Step 8, Stir in sour cream, Parmesan and butter.
Step 9, Add the spaghetti and spinach; toss to coat well.',
            'calories' => 380,
            'carbohydrates' => 204,
            'protein' => 52,
            'fat' => 144,
            'menu_pics' => '116.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Hearty Chickpea & Spinach Stew',
            "description" => 'This satisfying stew comes together in a snap. Mashed chickpeas add body to the broth, and tomato paste adds a savory note without piling on the sodium in this healthy recipe for weight loss.',
            'published_at' => '2022-11-30',
            'total_of_likes' => 23,
            'ingredients' => '2 (15 ounce) cans low-sodium chickpeas, rinsed, divided
1 tablespoon olive oil
12 ounces 93%-lean ground turkey
½ teaspoon dried oregano
½ teaspoon fennel seeds, crushed
½ teaspoon crushed red pepper
1 medium onion, chopped (1 cup)
2 medium carrots, diced (3/4 cup)
4 cloves garlic, minced, or 1/2 teaspoon garlic powder
3 tablespoons tomato paste
1 (32 ounce) carton low-sodium chicken broth (4 cups)
¼ teaspoon ground pepper
⅛ teaspoon salt
3 cups IQF (individually quick-frozen) spinach (8 oz.)
¼ cup grated Parmesan cheese (Optional)',
            'cooking_steps' => 'Step 1, Mash 1 can chickpeas with a potato masher or fork. Set aside.
Step 2, Heat oil in a large pot over medium-high heat. Add turkey, oregano, fennel seeds and crushed red pepper.
Step 3, Cook, crumbling with a wooden spoon, until the turkey is no longer pink, 2 to 3 minutes.
Step 4, Add onion, carrots and garlic (or garlic powder). Cook, stirring often, until softened and fragrant, 3 to 4 minutes.
Step 5, Add tomato paste. Cook, stirring, for 30 seconds.
Step 6, Add broth, the mashed and whole chickpeas, pepper and salt to the pot.
Step 7, Cover and bring to a simmer. Reduce heat to medium and cook, covered, at a brisk simmer until the vegetables are tender and the flavors have blended, about 10 minutes.
Step 8, Add spinach and increase heat to medium-high, Cook, stirring, until the spinach is heated through, 1 to 2 minutes.
Step 9, Ladle the soup into bowls. Garnish each serving with 1 tablespoon Parmesan, if desired.',
            'calories' => 401,
            'carbohydrates' => 164,
            'protein' => 128,
            'fat' => 117,
            'menu_pics' => '117.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Cucumber Sandwich',
            "description" => 'This creamy, crunchy cucumber sandwich recipe strikes a lovely balance between decadent and light. The cream cheese-yogurt spread complements the crisp refreshing cucumber while the hearty flavor and texture of the whole-wheat bread holds everything together.',
            'published_at' => '2022-11-17',
            'total_of_likes' => 29,
            'ingredients' => '2 ounces cream cheese, at room temperature
1 tablespoon low-fat plain Greek yogurt
1 tablespoon sliced fresh chives
1 tablespoon chopped fresh dill
¼ teaspoon ground pepper
2 slices whole-wheat sandwich bread
⅓ cup thinly sliced English cucumber',
            'cooking_steps' => 'Step 1, Stir cream cheese, yogurt, chives, dill and pepper together in a small bowl until well blended.
Step 2, Spread the mixture evenly on one side of each bread slice.
Step 3, Top 1 slice with cucumber slices, then top with the other bread slice, cream cheese-side down.
Step 4, Cut the crusts from the sandwich and cut it in half diagonally.',
            'calories' => 358,
            'carbohydrates' => 116,
            'protein' => 48,
            'fat' => 198,
            'menu_pics' => '118.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Peanut Butter-Oat Energy Balls',
            "description" => 'Sweet, sticky dates act as the glue for these no-bake energy balls. Perfect for hikes or during sports, this healthy snack travels well. For the best flavor and texture, use Medjool dates--the largest and most luscious date variety. Look for them in the produce department or near other dried fruits.',
            'published_at' => '2017-10-25',
            'total_of_likes' => 10,
            'ingredients' => '¾ cup chopped Medjool dates
½ cup rolled oats
¼ cup natural peanut butter
Chia seeds for garnish',
            'cooking_steps' => 'Step 1, Soak dates in a small bowl of hot water for 5 to 10 minutes. Drain.
Step 2, Combine the soaked dates, oats and peanut butter in a food processor and process until very finely chopped.
Step 3, Roll into 12 balls (a scant tablespoon each).
Step 4, Garnish with chia seeds, if desired.
Step 5, Refrigerate for at least 15 minutes and up to 1 week.',
            'calories' => 73,
            'carbohydrates' => 40,
            'protein' => 8,
            'fat' => 27,
            'menu_pics' => '119.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Mushroom Pate',
            "description" => 'Serve this vegetarian mushroom pâté recipe as an appetizer with crackers and pickled onions or try it as a sandwich spread.',
            'published_at' => '2019-08-16',
            'total_of_likes' => 2,
            'ingredients' => '1 teaspoon extra-virgin olive oil plus 2 tablespoons, divided
¼ cup minced shallots
1 pound cremini mushrooms (baby bella), coarsely chopped
2 tablespoons chopped fresh sage, plus more for garnish
¼ teaspoon salt
¼ teaspoon ground pepper
3 tablespoons dry sherry
½ cup walnuts, toasted (Place in a small dry skillet and cook over medium-low heat, stirring constantly, until fragrant, 2 to 4 minutes)
2 tablespoons nutritional yeast or Parmesan cheese',
            'cooking_steps' => 'Step 1, Heat 1 teaspoon oil in a large skillet over medium-high heat.
Step 2, Add shallots and cook, stirring, until starting to lightly brown, about 30 seconds.
Step 3, Add mushrooms and cook, stirring frequently, until their liquid is almost evaporated, 4 to 5 minutes.
Step 4, Add sage, salt and pepper and cook, stirring, for 2 minutes more.
Step 5, Add sherry, scraping up any browned bits, and cook until the liquid evaporates, 2 to 3 minutes.
Step 6, Transfer the mixture to a food processor.
Step 7, Add the remaining 2 tablespoons oil, walnuts and nutritional yeast (or Parmesan) and pulse until very finely chopped, about 30 seconds.
Step 8, Serve garnished with sage, if desired.',
            'calories' => 56,
            'carbohydrates' => 12,
            'protein' => 8,
            'fat' => 45,
            'menu_pics' => '120.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Baked Brie with Jam in Puff Pastry',
            "description" => 'This best baked Brie recipe is also the easiest. Serve this decadent yet simple appetizer with apple wedges and crackers and watch it disappear in seconds! It`s bound to be your new party go-to.',
            'published_at' => '2022-09-22',
            'total_of_likes' => 1,
            'ingredients' => '1 sheet frozen puff pastry (about 8 1/2 ounces), thawed
1 4- to 6-inch round Brie cheese (8 ounces), cold
3 tablespoons raspberry or red currant jam
1 teaspoon canola oil',
            'cooking_steps' => 'Step 1, Preheat oven to 400°F. Line a baking sheet with parchment paper.
Step 2, Lay puff pastry on the prepared baking sheet. Place Brie in the center.
Step 3, Spread jam over the top.
Step 4, Fold the pastry up and over the Brie, pleating as necessary to enclose it.
Step 5, Gently pinch the dough together at the center to seal.
Step 6, Flip the Brie over so the pastry is seam-side down. Brush the pastry with oil.
Step 7, Bake until nicely browned, 30 to 35 minutes.
Step 8, Let cool for 5 to 10 minutes and serve warm.',
            'calories' => 232,
            'carbohydrates' => 60,
            'protein' => 28,
            'fat' => 144,
            'menu_pics' => '121.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Roasted Honeynut Squash',
            "description" => 'Honeynut squash looks just like mini butternut squash, but on the inside you`ll find an even sweeter, deeper orange flesh. This winter squash has only been available at farmers` markets and in select grocery stores for a few years. If you see it, grab a few to try! This simple roasting method enhances the natural flavor of the squash with butter and spices.',
            'published_at' => '2022-09-19',
            'total_of_likes' => 6,
            'ingredients' => '2 medium honeynut squash, halved lengthwise and seeded
4 teaspoons butter
¼ teaspoon salt
¼ teaspoon ground pepper
¼ teaspoon ground cinnamon
4 teaspoons pure maple syrup (Optional)',
            'cooking_steps' => 'Step 1, Preheat oven to 425 degrees F.
Step 2, Arrange squash halves cut-side up on a baking sheet.
Step 3, Place 1 teaspoon butter in each cavity.
Step 4, Sprinkle with salt, pepper and cinnamon. Roast until tender, 25 to 30 minutes.
Step 5, Drizzle with maple syrup, if desired.',
            'calories' => 114,
            'carbohydrates' => 84,
            'protein' => 8,
            'fat' => 36,
            'menu_pics' => '122.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Maple-Roasted Sweet Potatoes',
            "description" => 'In this healthy side dish recipe, sweet potatoes are tossed with maple syrup, butter and lemon juice and roasted until tender and golden brown. The delicious glaze that forms on these maple-roasted sweet potatoes transforms this ultra-simple dish into something sublime.',
            'published_at' => '2019-10-17',
            'total_of_likes' => 15,
            'ingredients' => '2 ½ pounds sweet potatoes, peeled and cut into 1 1/2-inch pieces
⅓ cup pure maple syrup
2 tablespoons butter, melted
1 tablespoon lemon juice
½ teaspoon salt
Freshly ground pepper, to taste',
            'cooking_steps' => 'Step 1, Preheat oven to 400°F.
Step 2, Arrange sweet potatoes in an even layer in a 9-by-13-inch baking dish.
Step 3, Combine maple syrup, butter, lemon juice, salt and pepper in a small bowl.
Step 4, Pour the mixture over the sweet potatoes; toss to coat.
Step 5, Cover and bake the sweet potatoes for 15 minutes.
Step 6, Uncover, stir and cook, stirring every 15 minutes, until tender and starting to brown, 45 to 50 minutes more.',
            'calories' => 92,
            'carbohydrates' => 72,
            'protein' => 4,
            'fat' => 18,
            'menu_pics' => '123.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Roasted Brussels Sprouts & Potatoes',
            "description" => 'Roasted Brussels sprouts and potatoes make a great quick and easy side dish for dinner, or you can turn it into a breakfast hash served with an egg on top.',
            'published_at' => '2022-11-17',
            'total_of_likes' => 2,
            'ingredients' => '1 pound Brussels sprouts, trimmed and halved
12 ounces baby Yukon Gold potatoes, quartered
3 tablespoons extra-virgin olive oil
1 teaspoon salt
1 teaspoon chili powder
¾ teaspoon garlic powder
½ teaspoon ground pepper
¼ cup chopped fresh flat-leaf parsley',
            'cooking_steps' => 'Step 1, Preheat oven to 450°F.
Step 2, Toss Brussels sprouts, potatoes, oil, salt, chili powder, garlic powder and pepper together on a large rimmed baking sheet; spread in a single layer.
Step 3, Roast until the vegetables are tender and evenly browned, 20 to 25 minutes, stirring halfway through.
Step 4, Stir in parsley before serving.',
            'calories' => 106,
            'carbohydrates' => 52,
            'protein' => 12,
            'fat' => 45,
            'menu_pics' => '124.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Mug Brownie',
            "description" => 'You might want to keep a copy of this recipe in the pantry beside the cocoa for those moments when you crave a chocolaty treat. Cook this fudgy brownie in a mug in the microwave and it`s ready in less than a minute!',
            'published_at' => '2020-06-19',
            'total_of_likes' => 4,
            'ingredients' => '1 tablespoon coconut oil
2 tablespoons unsweetened coconut milk or low-fat milk
¼ teaspoon vanilla extract
1 ½ tablespoons all-purpose flour
1 tablespoon sugar
1 tablespoon unsweetened cocoa powder
⅛ teaspoon salt
2 teaspoons mini chocolate chips (Optional)',
            'cooking_steps' => 'Step 1, Place coconut oil in a small microwave-safe coffee mug and microwave on High until melted, 15 to 20 seconds.
Step 2, Cool for 1 minute.
Step 3, Whisk in coconut milk (or milk) and vanilla.
Step 4, Add flour, sugar, cocoa and salt; continue whisking until completely incorporated.
Step 5, Stir in chocolate chips, if using.
Step 6, Microwave on High until firm to the touch and no longer glossy, 30 to 40 seconds.
Step 7, Let stand for 8 to 10 minutes.',
            'calories' => 234,
            'carbohydrates' => 100,
            'protein' => 8,
            'fat' => 135,
            'menu_pics' => '125.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Big-batch breakfast potatoes',
            "description" => 'Treat yourself to a comforting brunch featuring Ree Drummond`s big-batch breakfast potatoes. The combination of tender red potatoes, garlic, onion and chopped bell peppers will remind you of your favorite diner hash, but better.',
            'published_at' => '2023-02-19',
            'total_of_likes' => 4,
            'ingredients' => '5 pounds red potatoes, roughly chopped/diced
4 cloves garlic, minced
1 onion, chopped
1 green bell pepper, seeded and roughly chopped
1 red bell pepper, seeded and roughly chopped
1/4 cup olive oil
1/2 stick butter, melted
1 teaspoon seasoned salt
1/2 teaspoon cayenne pepper
Kosher salt and freshly ground pepper',
            'cooking_steps' => 'Step 1, Preheat the oven to 425 degrees F.
Step 2, In a large bowl, toss together the potatoes, garlic, onion, green bell pepper, red bell pepper, olive oil, butter, seasoned salt, cayenne pepper and some kosher salt and pepper.
Step 3, Bake for 20 to 25 minutes, shaking the pan twice.
Step 4, Raise the heat to 500 degrees and bake until crisp and brown, 10 to 15 minutes.
Step 5, Sprinkle with a little more salt and pepper before serving',
            'calories' => 328,
            'carbohydrates' => 196,
            'protein' => 24,
            'fat' => 117,
            'menu_pics' => '126.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Cheesy potato casserole',
            "description" => 'Break out the stretchy pants, because this cheesy potato casserole is nearly impossible to put down. The combination of melted Cheddar and Jack cheeses, plus bacon, puts this dish over the edge.',
            'published_at' => '2023-02-20',
            'total_of_likes' => 40,
            'ingredients' => '1 pound thin bacon
16 russet potatoes
6 tablespoons canola oil
4 sticks (1 pound) salted butter, plus more for buttering baking dish
2 cups sour cream
2 cups grated Cheddar or Jack (or a mix of both), plus more for topping
2 cups whole milk
4 teaspoons seasoned salt
6 green onions, sliced
Kosher salt and freshly ground black pepper',
            'cooking_steps' => 'Step 1, Preheat the oven to 400 degrees F.
Step 2, Cook the bacon in a saute pan until crispy; let cool and then crumble.
Step 3, Scrub the potatoes, then place them on baking sheets. Rub the potatoes with the canola oil and bake until tender, 45 minutes to 1 hour. Remove the potatoes and lower the oven temperature to 350 degrees F.
Step 4, Slice the butter into pats and transfer to a large mixing bowl. Add the bacon and sour cream. With a sharp knife, cut each potato in half lengthwise and scrape out the insides into the mixing bowl. Tear up 3 of the skins and throw them in. Smash the potatoes with a potato masher. Add the cheese, milk, seasoned salt, green onions and some salt and pepper and mix together well.
Step 5, Butter a baking dish, and then spoon the mixture into the dish, top with more grated cheese and bake until warmed through, 25 to 30 minutes.',
            'calories' => 707,
            'carbohydrates' => 192,
            'protein' => 60,
            'fat' => 468,
            'menu_pics' => '127.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Tater tot pie',
            "description" => 'Haters will say it`s cheating, but the fact that this tater tot pie calls for frozen tots makes it all the more endearing in our eyes. Your weekend of comfort food should also be about ease, after all. Pop it in the oven, fry up some eggs, call over your friends, then pop the cork on a bottle of Prosecco and have yourselves a time.',
            'published_at' => '2023-01-28',
            'total_of_likes' => 24,
            'ingredients' => '1 pound (about 3 cups) frozen Tater Tots
Nonstick cooking spray
4 slices bacon
1 cup shredded cheddar cheese (about 4 ounces)
1/4 cup sour cream
1/4 cup mayonnaise
2 tablespoons Sriracha
Chopped fresh chives, for topping',
            'cooking_steps' => 'Step 1, Bake the Tater Tots as the label directs. Reduce the oven temperature to 400 degrees F and lightly coat a 9-inch pie plate with cooking spray.
Step 2, Cook the bacon in a medium skillet over medium-low heat, turning once, until crisp, about 8 minutes. Remove to a paper towel-lined plate to drain, then roughly chop.
Step 3, Lightly press the Tater Tots into the prepared dish. Top with the cheese and bacon. Bake until the cheese melts, about 5 minutes.
Step 4, Meanwhile, combine the sour cream and mayonnaise with the Sriracha. Drizzle the pie with the spicy mayonnaise and sprinkle with chives.',
            'calories' => 187,
            'carbohydrates' => 4,
            'protein' => 20,
            'fat' => 117,
            'menu_pics' => '128.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Healthy Lentil Chili',
            "description" => 'This hearty vegetarian chili is both nutritious and satisfying, thanks to the protein-packed navy beans and brown lentils. We added a generous dose of dried spices and other pantry staples to boost the flavor and make this dish accessible for any night of the week.',
            'published_at' => '2023-04-19',
            'total_of_likes' => 92,
            'ingredients' => '1 tablespoon olive oil
1 large onion, diced
1 red, orange or yellow bell pepper, diced
4 cloves garlic, minced
Kosher salt and freshly ground black pepper
2 tablespoons tomato paste
2 tablespoons chili powder
1 1/2 teaspoons dried oregano
1/2 teaspoon ground cumin
4 cups low-sodium vegetable broth
Two 14.5-ounce cans fire-roasted diced tomatoes
One 15-ounce can navy beans or another small white bean (do not drain)
1 cup dried brown lentils
1 dried bay leaf
1 tablespoon red wine vinegar
Shredded reduced-fat Cheddar, plain yogurt, pickled jalapenos and crushed tortilla chips, for serving (all are optional)',
            'cooking_steps' => 'Step 1, Heat the olive oil in a large pot or Dutch oven over medium-high heat until shimmering.
Step 2, Add the onion, bell pepper, garlic, 1/2 teaspoon salt and several grinds of black pepper.
Step 3, Cook until vegetables are just tender and browned in spots, stirring occasionally, about 6 minutes.
Step 4, Stir in the tomato paste, chili powder, oregano and cumin, then continue to cook until fragrant and brick-red in color, stirring frequently, about 2 minutes.
Step 5, Stir in the vegetable broth, diced tomatoes, beans (and their liquid), lentils, bay leaf, 1/2 teaspoon salt and a couple grinds of black pepper. Bring to a steady simmer, then reduce the heat to medium-low.
Step 6, Partially cover with a lid and gently simmer, stirring occasionally, until the lentils are tender and the chili has thickened slightly, 35 to 45 minutes.
Step 7, Remove the bay leaf and stir in the vinegar. Season with salt and black pepper. Ladle into bowls and serve with toppings as desired. ',
            'calories' => 311,
            'carbohydrates' => 200,
            'protein' => 80,
            'fat' => 45,
            'menu_pics' => '129.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Lentil Soup',
            "description" => 'Made with hearty lentils and lots of vegetables, Alton`s soup is comforting and satisfying.',
            'published_at' => '2023-04-27',
            'total_of_likes' => 107,
            'ingredients' => '2 tablespoons olive oil
1 cup finely chopped onion
1/2 cup finely chopped carrot
1/2 cup finely chopped celery
2 teaspoons kosher salt
1 pound lentils, picked and rinsed
1 cup peeled and chopped tomatoes
2 quarts chicken or vegetable broth
1/2 teaspoon freshly ground coriander
1/2 teaspoon freshly ground toasted cumin
1/2 teaspoon freshly ground grains of paradise',
            'cooking_steps' => 'Step 1, Place the olive oil into a large 6-quart Dutch oven and set over medium heat.
Step 2, Once hot, add the onion, carrot, celery and salt and sweat until the onions are translucent, approximately 6 to 7 minutes.
Step 3, Add the lentils, tomatoes, broth, coriander, cumin and grains of paradise and stir to combine.
Step 4, Increase the heat to high and bring just to a boil.
Step 5, Reduce the heat to low, cover and cook at a low simmer until the lentils are tender, approximately 35 to 40 minutes.
Step 6, Using a stick blender, puree to your preferred consistency. Serve immediately.',
            'calories' => 372,
            'carbohydrates' => 220,
            'protein' => 96,
            'fat' => 72,
            'menu_pics' => '130.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Stuffed Honeynut Squash',
            "description" => 'Honeynuts look like baby butternut squash but are sweeter and with a thinner skin -- making them perfect for stuffing. This recipe makes a hearty vegetarian main course or flavor-packed side to a roast or steak.',
            'published_at' => '2023-04-15',
            'total_of_likes' => 76,
            'ingredients' => '2 pounds Honeynut squash (6 to 8), halved and seeded
6 tablespoons olive oil
Kosher salt and freshly ground black pepper
8 ounces cremini mushrooms, chopped
4 ounces kale, stemmed and chopped
1 teaspoon chopped fresh rosemary
1 clove garlic, chopped
1/2 medium yellow onion, chopped
1/4 cup dry white wine
1 cup frozen brown rice
6 ounces shredded Gruyere',
            'cooking_steps' => 'Step 1, Position an oven rack in the center of the oven and preheat to 425 degrees F.
Step 2, Toss the squash with 3 tablespoons of the oil and season with 1 teaspoon salt and 1/4 teaspoon pepper.
Step 3, Arrange cut-side up on a rimmed baking sheet and bake until tender and browned in spots, 30 to 40 minutes.
Step 4, Meanwhile, pulse the mushrooms, kale, rosemary, garlic and onion in a food processor until very finely chopped but not paste-like.
Step 5, Heat the remaining 3 tablespoons oil in a large nonstick skillet over medium high and cook the mushroom mixture until the vegetables are tender and beginning to brown, 10 to 12 minutes; season with salt and pepper.
Step 6, Add the wine and scrape up the brown bits that cling to the bottom of the skillet with a wooden spoon; cook until all of the liquid has evaporated.
Step 7, Add the rice and 1 cup water and cook until the water has evaporated. Season with salt and pepper.
Step 8, Divide the filling among the squash and mound into the cavity of each. Divide the Gruyere among the squash and sprinkle on top of the filling.
Step 9, Bake until the cheese is melted and browned in spots, about 10 minutes.',
            'calories' => 333,
            'carbohydrates' => 136,
            'protein' => 44,
            'fat' => 162,
            'menu_pics' => '131.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Broccoli Balls with Harissa-Yogurt Sauce',
            "description" => 'These falafel-inspired broccoli balls are perfectly crisp on the outside, creamy on the inside and loaded with vibrant fresh herbs and spices. Paired with a tangy and spicy harissa-yogurt sauce, they can be perfect guilt-free hors d`oeuvres for your next party, a fiber-packed vegetable side dish or a crunchy addition to a salad. Since harissa pastes can vary widely in spiciness, feel free to adjust to your liking. They freeze really well, so make a double batch and freeze some for another night.',
            'published_at' => '2023-04-12',
            'total_of_likes' => 76,
            'ingredients' => '5 cups broccoli florets
One 15-ounce can chickpeas
1 cup roughly chopped fresh parsley leaves and stems
1 cup roughly chopped fresh cilantro leaves and stems
1 tablespoon fresh lemon juice
1 teaspoon ground cumin
1 teaspoon ground coriander
1 teaspoon baking powder
3 cloves garlic
1 small onion, diced
Kosher salt and freshly ground black pepper
3/4 cup panko breadcrumbs
3/4 cup full-fat plain Greek yogurt
1 tablespoon extra-virgin olive oil
3 to 6 teaspoons harissa paste
Olive oil cooking spray, for coating the broccoli balls',
            'cooking_steps' => 'Step 1, Pour about 1 inch of water into a large skillet and bring to a boil over medium-high heat.
Step 2, Put the broccoli florets in a steamer basket in an even layer.
Step 3, Set the steamer basket over the boiling water and cook until crisp-tender, about 8 minutes (depending on the size of the florets).
Step 4, Transfer the broccoli to a large plate to cool slightly. Line a baking sheet with paper towels.
Step 5,  Making sure to reserve the liquid, drain the chickpeas and rinse thoroughly under cold water.
Step 6, Spread the chickpeas evenly on one half of the prepared baking sheet and the broccoli florets on the other half.
Step 7, Pat the chickpeas and broccoli with additional paper towels to remove excess liquid.
Step 8, Put the parsley, cilantro, lemon juice, cumin, coriander, baking powder, garlic, onion, 1 teaspoon salt, several grinds of pepper and 3 tablespoons of the reserved chickpea liquid into a food processor.
Step 9, Pulse the ingredients until finely chopped, about 30 seconds. Add the chickpeas and broccoli and pulse again, stopping and scraping down the sides as needed, until the chickpeas and broccoli are finely minced, about 2 minutes.
Step 10, Transfer the mixture to a medium bowl and stir in the panko. Cover and refrigerate for 30 minutes.
Step 11, Meanwhile, combine the yogurt, olive oil, harissa (to preferred spice level), 2 teaspoons water, 1/2 teaspoon salt and several grinds of pepper in a small bowl. Refrigerate to chill.
Step 12, Preheat the oven to 375 degrees F; set a wire rack inside a baking sheet.
Step 13, Using a tablespoon or medium scoop, form the chickpea-broccoli mixture into 1 1/2-inch balls, each about 1 heaping tablespoon. Evenly space the balls on the wire rack and spray generously with olive oil spray.
Step 14, Bake, rotating the baking sheet halfway through and coating the balls again with olive oil spray, until deep golden and crisp, about 45 minutes.
Step 15, Serve warm with the yogurt sauce. ',
            'calories' => 209,
            'carbohydrates' => 116,
            'protein' => 44,
            'fat' => 63,
            'menu_pics' => '132.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Lemon-Herb Rice Salad',
            "description" => 'Fresh herbs, like mint and basil, add bursts of fresh flavor to this simple salad. Make sure you leave room for leftovers — the dish tastes even better the next day!',
            'published_at' => '2023-02-19',
            'total_of_likes' => 80,
            'ingredients' => '2 lemons
Kosher salt and freshly ground pepper
1/2 medium red onion, thinly sliced
1 medium carrot, shredded
1/4 cup vegetable oil
2 cups long-grain white rice
2 tablespoons rice wine vinegar
2 teaspoons packed light brown sugar
1 Kirby cucumber, seeded and diced
1/2 cup chopped salted roasted peanuts
1/2 cup fresh cilantro, roughly chopped
1/2 cup fresh mint, roughly chopped
1/2 cup fresh basil, roughly chopped
1 bunch watercress, tough stems removed, leaves torn',
            'cooking_steps' => 'Step 1, Remove 2 wide strips zest from 1 lemon with a vegetable peeler.
Step 2, Combine 1 strip zest with the vegetable oil in a small saucepan over medium heat and cook until the edges of the zest turn slightly golden, about 5 minutes. Let the lemon oil cool.
Step 3, Meanwhile, cook the rice as the label directs, adding the remaining strip lemon zest to the water. Transfer the rice to a large bowl, discarding the zest, and fluff with a fork. Let cool to room temperature.
Step 4, Meanwhile, make the dressing: Juice both lemons into a medium bowl. Add the vinegar, brown sugar, 1 1/4 teaspoons salt and 1/2 teaspoon pepper and whisk until the sugar dissolves.
Step 5, Discard the zest from the lemon oil, then whisk the oil into the dressing. Add the onion slices and let marinate 15 minutes.
Step 6, Add the carrot, cucumber, peanuts, cilantro, mint, basil and watercress to the bowl with the rice. Add the dressing mixture and gently toss.',
            'calories' => 378,
            'carbohydrates' => 220,
            'protein' => 139,
            'fat' => 0,
            'menu_pics' => '133.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Green Beans Gremolata',
            "description" => 'When it comes to dinner, the side dishes can make or break your meal — especially when you`re eating healthy. As much as we love simple steamed veggies or a quick tossed salad, both can get boring when they`re your weeknight go-to. Filling your table with wholesome choices can (and should be!) so much more interesting. With the right recipes you can rotate between healthy whole grains, vitamin-packed potatoes, cruciferous gems like cauliflower or broccoli and, of course, lots of flavorful takes on veggies. Not sure where to start? We love Ina`s green beans, dressed with a homemade Gremolata including lemon zest, grated Parmesan, minced garlic and parsley, plus toasted pine nuts for a buttery crunch.',
            'published_at' => '2023-01-20',
            'total_of_likes' => 70,
            'ingredients' => '1 pound French green beans, trimmed
2 teaspoons minced garlic (2 cloves)
1 tablespoon grated lemon zest (2 lemons)
3 tablespoons minced fresh flat-leaf parsley
3 tablespoons freshly grated Parmesan cheese
2 tablespoons toasted pine nuts
2 1/2 tablespoons good olive oil
Kosher salt and freshly ground black pepper',
            'cooking_steps' => 'Step 1, Bring a large pot of water to a boil. Add the green beans and blanch them for 2 to 3 minutes, until tender but still crisp.
Step 2, Drain the beans in a colander and immediately put them into a bowl of ice water to stop the cooking and preserve their bright green color.
Step 3, For the gremolata, toss the garlic, lemon zest, parsley, parmesan, and pine nuts in a small bowl and set aside.
Step 4, When ready to serve, heat the olive oil in a large saute pan over medium-high heat. Drain the beans and pat them dry.
Step 5, Add the beans to the pan and saute, turning frequently, for 2 minutes, until coated with olive oil and heated through. Off the heat, add the gremolata and toss well.
Step 6, Sprinkle with 3/4 teaspoon salt and 1/4 teaspoon pepper and serve hot.',
            'calories' => 159,
            'carbohydrates' => 40,
            'protein' => 16,
            'fat' => 117,
            'menu_pics' => '134.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Buttery Radishes with Honey and Chives',
            "description" => 'Radishes are often overlooked, but we give them the star treatment in this recipe. A bit spicy raw, radishes that are cooked take on a much mellower flavor. A touch of butter and a drizzle of honey make these downright decadent. Serve them alongside pan-roasted chicken for a quick and healthy meal.',
            'published_at' => '2023-04-20',
            'total_of_likes' => 50,
            'ingredients' => '1 pound medium red radishes (about 20)
3 tablespoons unsalted butter
Kosher salt
1 tablespoon thinly sliced chives or scallions
1 teaspoon honey
1 tablespoon toasted and salted pepitas',
            'cooking_steps' => 'Step 1, Trim both the root and tip ends off of the radishes and halve them lengthwise. (If any radishes are larger, quarter them to keep all the pieces at a similar size so that they cook evenly.)
Step 2, Add the butter and 1/2 teaspoon salt to a 2-quart baking dish.
Step 3, Microwave on high until the butter is melted, 30 seconds to 1 minute.
Step 4, Remove the dish from the microwave and add the radishes, gently tossing to coat. Cover tightly with plastic wrap and use a sharp paring knife to poke 6 small holes in the top.
Step 5, Microwave on high for 5 minutes. Carefully uncover and give the radishes a stir. Cover again and microwave on high until the radishes are tender, about 5 additional minutes.
Step 6, Carefully uncover and stir the chives and honey into the radishes.
Step 7, Scoop the radishes into a serving bowl and pour any remaining butter over the top.
Step 8, Sprinkle with the pepitas and serve immediately.',
            'calories' => 110,
            'carbohydrates' => 24,
            'protein' => 4,
            'fat' => 54,
            'menu_pics' => '135.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Sauteed Carrots',
            "description" => 'Ina makes a 15-minute side dish that`s sure to please. Sweet carrots go perfectly with a little butter and chopped fresh dill.',
            'published_at' => '2023-02-10',
            'total_of_likes' => 12,
            'ingredients' => '2 pounds carrots
1 teaspoon kosher salt
1/4 teaspoon freshly ground black pepper
2 tablespoons unsalted butter
1 1/2 tablespoons chopped fresh dill or flat-leaf parsley',
            'cooking_steps' => 'Step 1, Peel the carrots and cut them diagonally in 1/4-inch slices.
Step 2, Place the carrots, 1/3 cup water, the salt, and pepper in a large (10- to 12-inch) saute pan and bring to a boil.
Step 3, Cover the pan and cook over medium-low heat for 7 to 8 minutes, until the carrots are just cooked through.
Step 4, Add the butter and saute for another minute, until the water evaporates and the carrots are coated with butter.
Step 5, Off the heat, toss with the dill or parsley.
Step 6, Sprinkle with salt and pepper and serve.',
            'calories' => 96,
            'carbohydrates' => 60,
            'protein' => 4,
            'fat' => 36,
            'menu_pics' => '136.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Vegan Wild-Rice-Stuffed Butternut Squash',
            "description" => 'This impressive autumn-inspired dish can be served as a main course for vegan and vegetarian eaters or can be enjoyed by everyone at the table as a side dish. The small amount of curry powder gives the squash a nice warmth and depth.',
            'published_at' => '2023-04-25',
            'total_of_likes' => 32,
            'ingredients' => '2 medium butternut squash (2 to 2 1/4 pounds each)
3 tablespoons apple cider vinegar
2 tablespoons pure maple syrup
4 tablespoons olive oil
Kosher salt and freshly ground black pepper
1 small onion, chopped
1/2 cup wild rice
1/2 teaspoon mild curry powder
1/2 teaspoon ground cinnamon
1/4 teaspoon cayenne pepper
3 tablespoons dried unsweetened cherries
1 cup loosely packed fresh parsley leaves, chopped, plus more for garnish
1 tablespoon chopped fresh sage
1/4 cup walnuts, coarsely chopped',
            'cooking_steps' => 'Step 1, Position an oven rack in the middle of the oven and preheat to 400 degrees F.
Step 2, Cut each squash in half lengthwise and scoop out and discard the seeds.
Step 3, Arrange the halves in a large baking dish, flesh-side up.
Step 4, Whisk together the vinegar, maple syrup and 2 tablespoons oil.
Step 5, Brush the flesh-side of the squash halves with some of the maple-oil and sprinkle with 1/4 teaspoon salt and a few grinds of pepper.
Step 6, Put the squash flesh-side down in the baking dish, then brush the skin side with the maple-oil mixture and sprinkle with 1/4 teaspoon salt and a few grinds of pepper.
Step 7, Roast until the squash is fork-tender, 30 to 40 minutes. Let the squash rest until cool enough to handle. Scoop some of the flesh out into a large bowl, leaving about 1/4-inch border of flesh all around.
Step 8, Leave the scooped-out flesh in relatively large chunks.
Step 9, Meanwhile, heat 1 tablespoon oil in a medium saucepan over medium-high heat, then add the onions and cook, stirring occasionally, until soft and golden brown, about 6 minutes.
Step 10, Add the rice, curry powder, cinnamon, cayenne and 1/2 teaspoon salt and stir until the spices are toasted, about 1 minute. Add 2 cups water and bring to a simmer covered, stirring occasionally, until the rice is tender and most of the liquid is absorbed, 30 to 40 minutes (different brands of wild rice may vary in cooking times; add more water if needed). Remove from heat and add to the chunks of butternut squash along with the remaining maple-oil, cherries, parsley, sage, 1/2 teaspoon salt and a few grinds of black pepper.
            Evenly stuff the scooped-out squash halves with the filling, then drizzle with the remaining 1 tablespoon oil and bake, uncovered, until the filling is warmed through, about 30 minutes. Cut each in half crosswise and transfer to a serving platter. Sprinkle with walnuts and parsley. Serve warm.',
            'calories' => 480,
            'carbohydrates' => 312,
            'protein' => 36,
            'fat' => 171,
            'menu_pics' => '137.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Herb and Apple Stuffing',
            "description" => 'Before you reach for the white loaf, opt for whole-wheat bread for a well-rounded apple-studded stuffing from Ina Garten.',
            'published_at' => '2023-04-23',
            'total_of_likes' => 45,
            'ingredients' => '16 cups 1-inch bread cubes, white or whole wheat (2 baguettes)
4 tablespoons unsalted butter (1/2 stick)
2 cups medium-diced yellow onion (2 large)
2 cups medium-diced celery (3 large stalks)
2 Granny Smith apples, unpeeled, cored and large diced
2 tablespoons chopped flat-leaf parsley
1 1/2 teaspoons minced fresh rosemary leaves
2 teaspoons kosher salt
1/2 teaspoon freshly ground black pepper
1 cup chicken stock
1/2 cup sliced blanched almonds, toasted, optional',
            'cooking_steps' => 'Step 1, Preheat oven to 300 degrees F.
Step 2, Put the bread cubes on a 13 by 18 by 1-inch baking sheet and bake them in the oven for 7 minutes.
            In a large saute pan, melt the butter and add the onion, celery, apples, parsley, rosemary, salt, and pepper. Saute for 10 minutes, until the mixture is soft.
Step 3, Combine the bread cubes and cooked vegetables in a large bowl and add the chicken stock, and almonds, if desired.
Step 4, Place the stuffing into the main cavity of the turkey and into the neck of the bird. I cook a 12-pound turkey for 2 1/2 hours at 350 degrees F in a preheated oven.
Step 5, Make sure the stuffing in the cavity is secured by wrapping the legs tightly with string.',
            'calories' => 370,
            'carbohydrates' => 244,
            'protein' => 52,
            'fat' => 81,
            'menu_pics' => '138.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Green Bean Casserole With Crispy Shallots',
            "description" => 'Skip the soup in a can in this quintessential Thanksgiving side dish and make a creamy sauce using low-fat milk instead.',
            'published_at' => '2023-04-10',
            'total_of_likes' => 19,
            'ingredients' => '1/4 cup olive oil
6 medium shallots, sliced into rings (about 1 cup)
1 1/2 pounds thin fresh string beans or haricots verts, trimmed
1 pound button mushrooms, sliced
6 large cloves garlic, minced
1 tablespoon chopped fresh thyme
3 cups low-fat (1 percent) milk
3 tablespoons all-purpose flour
1/3 cup plus 2 tablespoons freshly grated parmesan cheese
1/2 cup finely chopped fresh parsley
1/4 teaspoon ground nutmeg
Salt and freshly ground pepper
Olive oil cooking spray',
            'cooking_steps' => 'Step 1, Preheat the oven to 375 degrees F.
Step 2, Heat the olive oil in a small skillet over medium-high heat until very hot but not smoking. Add 1/4 cup shallots and cook, stirring, until golden brown and crisp, about 2 minutes.
Step 3, Transfer with a slotted spoon to paper towels to drain. Repeat with the remaining shallots, cooking 1/4 cup at a time. Reserve the oil in the skillet.
Step 4, Place the green beans in a steamer basket fitted over a pot of boiling water. Cover and steam until bright green and still crisp, about 3 minutes.
Step 5, Heat 1 tablespoon of the reserved shallot oil in a large, deep nonstick skillet over medium-high heat.
Step 6, Add the mushrooms and cook, stirring occasionally, until the mushroom liquid is evaporated and they begin to brown, about 12 minutes.
Step 7, Add the garlic and thyme and cook, stirring, 1 minute.
Step 8, Transfer the mushroom mixture to a bowl. Whisk together the milk and flour until the flour is dissolved. Add the mixture to the skillet and, whisking constantly, bring to a simmer.
Step 9, Reduce the heat to medium low, whisking occasionally, until thickened, 10 to 15 minutes.
Step 10, Remove the pan from the heat and stir in the green beans, mushroom mixture, 1/3 cup parmesan cheese, the parsley, nutmeg, 3/4 teaspoon salt and 1/2 teaspoon pepper.
Step 11, Coat a 2-quart baking dish with cooking spray.
Step 12, Spoon the green bean mixture into the prepared dish and sprinkle the top with the crispy shallots and the remaining 2 tablespoons cheese.
Step 13, Bake until golden on top and bubbling, about 20 minutes.',
            'calories' => 186,
            'carbohydrates' => 171,
            'protein' => 36,
            'fat' => 81,
            'menu_pics' => '139.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Alton`s Lentil Soup',
            "description" => 'Cozy up with a bowl of lentil soup. Alton`s version is packed with fiber, potassium, folate and other B-vitamins.',
            'published_at' => '2023-04-11',
            'total_of_likes' => 83,
            'ingredients' => '2 tablespoons olive oil
1 cup finely chopped onion
1/2 cup finely chopped carrot
1/2 cup finely chopped celery
2 teaspoons kosher salt
1 pound lentils, picked and rinsed
1 cup peeled and chopped tomatoes
2 quarts chicken or vegetable broth
1/2 teaspoon freshly ground coriander
1/2 teaspoon freshly ground toasted cumin
1/2 teaspoon freshly ground grains of paradise',
            'cooking_steps' => 'Step 1, Place the olive oil into a large 6-quart Dutch oven and set over medium heat.
Step 2, Once hot, add the onion, carrot, celery and salt and sweat until the onions are translucent, approximately 6 to 7 minutes.
Step 3, Add the lentils, tomatoes, broth, coriander, cumin and grains of paradise and stir to combine.
Step 4, Increase the heat to high and bring just to a boil.
Step 5, Reduce the heat to low, cover and cook at a low simmer until the lentils are tender, approximately 35 to 40 minutes.
Step 6, Using a stick blender, puree to your preferred consistency.
Step 7, Serve immediately.',
            'calories' => 372,
            'carbohydrates' => 220,
            'protein' => 96,
            'fat' => 9,
            'menu_pics' => '140.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Hearty Italian Chicken and Vegetable Soup',
            "description" => 'This chicken soup is packed with lots of good-for-you vegetables. Enhance store-bought broth with herbs and lemon for a quick soup that tastes like you simmered it all day long.',
            'published_at' => '2023-04-14',
            'total_of_likes' => 73,
            'ingredients' => '1 tablespoon extra-virgin olive oil
1 onion, chopped
Pinch crushed red pepper flakes
6 whole sprigs, plus 1 tablespoon chopped flat-leaf parsley
6 (3-inch) strips lemon zest, cut from 1 lemon
1 small head fennel, thinly sliced (2 cups), fennel tops reserved
1 1/2 pounds bone-in chicken breasts, skin removed
8 cups low-sodium chicken broth
A 2-3 inch piece Parmesan rind, optional
2 carrots, sliced (1 cup)
2 stalks celery, sliced (1 cup)
Kosher salt
2 cups, whole-wheat extra-wide noodle style pasta, 2 3/4 ounces
3 cups baby spinach
2 tablespoons grated Parmesan, plus extra for passing
Lemon juice',
            'cooking_steps' => 'Step 1, Heat the oil in a Dutch oven set over medium heat.
Step 2, Add the onion and crushed red pepper flakes and cook until the onions begin to soften, 5 minutes.
Step 3, Meanwhile, tie the parsley sprigs, lemon zest, and fennel tops together.
Step 4, Add the herb bundle, broth, 2 cups of water, and, if using, the cheese rind.
Step 5, Bring to a very gentle simmer and simmer until the chicken is just cooked through, about 8 minutes.
Step 6, Transfer the chicken to a cutting board and set aside until cool enough to handle.
Step 7, Remove the meat from the bones in large strips, and set aside.
Step 8, Meanwhile, add the sliced fennel, carrots, and celery to the broth and season with salt, to taste.
Step 9, Continue to simmer until the vegetables are just tender, 5 minutes.
Step 10, Stir in the noodles and cook until just al dente, about 5 minutes.
Step 11, Stir in the reserved chicken, baby spinach, and Parmesan until the chicken is heated through and the spinach is wilted.
Step 12, Discard the herb bundle and cheese rind.
Step 13, Stir in lemon juice, to taste.
Step 14, Ladle the soup into serving bowls and serve.',
            'calories' => 261,
            'carbohydrates' => 92,
            'protein' => 124,
            'fat' => 54,
            'menu_pics' => '141.jpg'
        ]);

        DB::table('menus')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'menu_name' => 'Minestrone with Parmigiano-Reggiano',
            "description" => 'Swiss chard, carrots, cannellini beans and spinach come together in Bobby`s version of this hearty vegetable soup.',
            'published_at' => '2023-03-20',
            'total_of_likes' => 50,
            'ingredients' => '3 tablespoons extra-virgin olive oil
1 large red onion, chopped
2 large stalks celery, chopped
4 cloves garlic, chopped
2 large carrots, diced
1/4 pound thinly sliced pancetta, cut into thin strips
1/2 head Savoy cabbage, finely sliced, blanched and drained
1/2 bunch Swiss chard, finely sliced
1 large waxy potato, cut into 1/2-inch cubes
4 cups low-sodium chicken stock
3 medium tomatoes, seeded and diced
1 bouquet garni (1 sprig rosemary, 4 sprigs thyme, 1 bay leaf and 1 bunch parsley, tied together with kitchen twine)
3 cups cannellini beans (canned or cooked dried beans)
1 cup spinach, coarsely chopped
Kosher salt and freshly ground pepper
Grated Parmigiano-Reggiano cheese, for topping',
            'cooking_steps' => 'Step 1, Heat the olive oil in a 4-quart pot over medium-high heat.
Step 2, Add the onion, celery, garlic, carrots and pancetta and cook, stirring, until soft, about 5 minutes.
Step 3, Add 4 cups water, the cabbage, chard, potato, chicken stock, tomatoes and bouquet garni.
Step 4, Bring the soup to a gentle simmer and cook 25 to 30 minutes.
Step 5, Place half of the beans (1 1/2 cups) in a food processor and process until smooth.
Step 6, Add the bean puree and the whole beans to the soup and simmer 10 minutes.
Step 7, Add the spinach and cook 2 more minutes.
Step 8, Season generously with salt and pepper.
Step 9, Ladle the soup into bowls and garnish with cheese. ',
            'calories' => 275,
            'carbohydrates' => 112,
            'protein' => 48,
            'fat' => 117,
            'menu_pics' => '142.jpg'
        ]);
    }
}
