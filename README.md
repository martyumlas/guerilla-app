
## Guerilla Test

- Token for routes is 'my-secret-token'
- sample request json used in postman
  {
    "token": "my-secret-token",
    "first_name": "Roberto",
    "last_name": "Ong",
    "address" : [
        {
            "street" : "Plaridel",
            "barangay" : "West Kamias",
            "city" : "Quezon City",
            "primary": 1
        },
        {
            "street" : "K9",
            "barangay" : "East Kamias",
            "city" : "Quezon City",
            "primary": 0
        },
        {
            "street" : "Obando",
            "barangay" : "Pagasa",
            "city" : "Quezon City",
            "primary": 0
        }
    ],
    "capabilities": [1, 2]
    
}

Capabilities

code = 1, description = Buyer
code = 2, description = Seller


if no capabilities sent if will be defaulted to 1



