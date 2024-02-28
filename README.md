# Teorijas jautājumi:

**1. Kas ir API?**

- API ir Application Programming Interface, kas dod iespēju back-end sarunāties ar front-end.

**2. Kā deklarēt mainīgo PHP valodā?**

- `$name = "value";`

**3. Kādu arhitektūru izmanto Laravel, paskaidro kā tā strādā:**

- Laravel izmanto MVC (Model View Controller) arhitektūru, kas saistīta ar Controllers un izmanto Models, lai varētu sūtīt un dabūt informāciju.

**4. Kas ir ORM, kāpēc to izmanto tīra SQL vietā?**

- ORM ir Object Relational Mapping, kas palīdz ar datubāzes kartēšanu.

**5. Uzraksti Eloquent ORM pieprasījumu modelim User, kur nepieciešams iegūt visus lietotājus kuriem reitings ir lielāks par 4. Lietotāju tabulas struktūra:**

```
public function index()
    {
        return User::where('rating','>',4)->get();
    }
```
