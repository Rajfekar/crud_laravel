

use Faker\Generator as Faker;
use App\Person;

$factory->define(person::class, function (Faker $faker) {
    return [
        'name' =&gt; $faker-&gt;name,
        'firstName' =&gt; $faker-&gt;firstName,
        'lastName' =&gt; $faker-&gt;lastName
    ];
});