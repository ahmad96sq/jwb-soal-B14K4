function Biodata() {
    return {
        nama: 'Ahmad Siddiq',
        age: 24,
        address: 'Jl. surya warna kec. keuning',
        hobbies: ['berenang', 'nonton film'],
        is_married: false,
        list_school: [{
                SMA: 'SMK Proklamasi',
                year_in: 2009,
                year_out: 2012
            },
            {
                Universitas: null,
                year_in: null,
                year_out: null
            }
        ],
        skills: [{
                name: 'Web Dev',
                level: 'beginner'
            },
            {
                name: 'UI/UX',
                level: 'beginner'
            }
        ],
        interest_in_coding: true
    }
}

let data = Biodata();

console.log(JSON.stringify(data));