<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BankTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banksData = [
            [
                'name' => 'Akbank',
                'description' => 'Akbank, geniş bir ürün yelpazesi ile müşterilerine kredi hizmetleri sunan öncü bir bankadır. Uygun faiz oranları ve esnek ödeme seçenekleri ile finansal ihtiyaçlarınıza çözüm bulur.',
                'detail' => '
            <h2>Bireysel İhtiyaç Kredisi</h2>
            <p>Acil nakit ihtiyaçlarınız için uygun faiz oranları ve esnek ödeme seçenekleri.</p>

            <h2>Konut Kredisi</h2>
            <p>Ev sahibi olma hayalinizi gerçekleştirmek için avantajlı konut kredisi seçenekleri.</p>

            <h2>Taşıt Kredisi</h2>
            <p>Yeni bir araç almak veya mevcut aracınızı değiştirmek için uygun faizli taşıt kredisi fırsatları.</p>

            <h2>Kredi Kartları</h2>
            <p>Günlük alışverişlerinizden tutun, yurt içi ve yurt dışı harcamalarınızı karşılamak için çeşitli kredi kartı seçenekleri.</p>

            <h2>İş Yeri Kredileri</h2>
            <p>İşletmenizi büyütmek veya yeni bir iş kurmak için özel iş yeri kredi seçenekleri.</p>
        ',
            ],
            [
                'name' => 'Garanti BBVA',
                'description' => 'Garanti BBVA, müşterilerine geniş bir finansal hizmet yelpazesi sunan bir bankadır. Uygun faiz oranları ve çeşitli kredi seçenekleri ile finansal ihtiyaçlara çözüm sağlar.',
                'detail' => '
            <h2>Bireysel Krediler</h2>
            <p>Çeşitli ihtiyaçlarınız için uygun faiz oranları ve esnek geri ödeme seçenekleri sunan bireysel kredi fırsatları.</p>

            <h2>Konut Finansmanı</h2>
            <p>Ev sahibi olmak isteyenlere özel konut finansmanı seçenekleri ile hayallerinizi gerçekleştirin.</p>

            <h2>Taşıt Kredisi</h2>
            <p>Yeni bir araç almak için uygun faizli taşıt kredisi seçenekleri ile bütçenizi koruyun.</p>

            <h2>İhtiyaç Kartları</h2>
            <p>Günlük ihtiyaçlarınız için özel avantajlar sunan kredi kartı seçenekleri.</p>

            <h2>KOBİ Kredileri</h2>
            <p>Küçük ve orta ölçekli işletmeler için uygun şartlarda iş yeri kredisi seçenekleri.</p>
        ',
            ],
            [
                'name' => 'Denizbank',
                'description' => 'Denizbank, müşterilerine çeşitli finansal ürünler ve kredi seçenekleri sunan bir bankadır. Uygun faiz oranları ve kolay başvuru imkanları ile dikkat çeker.',
                'detail' => '
            <h2>Bireysel Krediler</h2>
            <p>Farklı ihtiyaçlara uygun bireysel kredi seçenekleri ve avantajlı faiz oranları.</p>

            <h2>Konut Kredisi</h2>
            <p>Ev sahibi olmak isteyenlere özel konut kredisi fırsatları.</p>

            <h2>İş Yeri Finansmanı</h2>
            <p>İşletmenizi büyütmek veya yeni bir iş kurmak için uygun iş yeri finansmanı seçenekleri.</p>

            <h2>Deniz Bonus Kredi Kartları</h2>
            <p>Alışverişlerinizden kazançlı çıkmanız için özel Bonus kart seçenekleri.</p>
        ',
            ],
            [
                'name' => 'TEB Bankası',
                'description' => 'TEB Bankası, müşterilerine özel finansal çözümler sunan bir bankadır. Yatırım ürünleri, kredi seçenekleri ve diğer bankacılık hizmetleri ile bilinir.',
                'detail' => '
            <h2>Bireysel Krediler</h2>
            <p>Çeşitli ihtiyaçlarınız için uygun faiz oranları ve esnek geri ödeme seçenekleri sunan bireysel kredi fırsatları.</p>

            <h2>İhtiyaç Kredisi</h2>
            <p>Acil nakit ihtiyaçlarınız için hızlı ve kolay başvuru imkanı ile ihtiyaç kredisi seçenekleri.</p>

            <h2>Mortgage Kredisi</h2>
            <p>Ev sahibi olmak isteyenlere özel mortgage kredisi seçenekleri.</p>

            <h2>Kobi Kredileri</h2>
            <p>Küçük ve orta ölçekli işletmeler için özel KOBİ kredisi seçenekleri.</p>
        ',
            ],
            [
                'name' => 'İş Bank',
                'description' => 'İş Bankası, geniş bir müşteri kitlesine hitap eden köklü bir bankadır. Bireysel ve kurumsal müşterilere özel kredi seçenekleri sunar.',
                'detail' => '
            <h2>Bireysel İhtiyaç Kredisi</h2>
            <p>Acil nakit ihtiyaçlarınız için uygun faiz oranları ve esnek ödeme seçenekleri.</p>

            <h2>Konut Kredisi</h2>
            <p>Ev sahibi olma hayalinizi gerçekleştirmek için avantajlı konut kredisi seçenekleri.</p>

            <h2>İş Yeri Kredileri</h2>
            <p>İşletmenizi büyütmek veya yeni bir iş kurmak için özel iş yeri kredi seçenekleri.</p>

            <h2>Taşıt Kredisi</h2>
            <p>Yeni bir araç almak veya mevcut aracınızı değiştirmek için uygun taşıt kredisi seçenekleri.</p>

            <h2>Kredi Kartları</h2>
            <p>Günlük alışverişlerinizden tutun, yurt içi ve yurt dışı harcamalarınızı karşılamak için çeşitli kredi kartı seçenekleri.</p>
        ',
            ],
            [
                'name' => 'Yapıkredi',
                'description' => 'Yapıkredi, yenilikçi hizmet anlayışı ve geniş şube ağı ile müşterilerine çeşitli finansal çözümler sunan bir bankadır. Kredi kartları ve bireysel kredi seçenekleri ile öne çıkar.',
                'detail' => '
            <h2>Bireysel İhtiyaç Kredisi</h2>
            <p>Acil nakit ihtiyaçlarınız için uygun faiz oranları ve esnek ödeme seçenekleri.</p>

            <h2>Konut Kredisi</h2>
            <p>Ev sahibi olmak isteyenlere özel konut kredisi seçenekleri.</p>

            <h2>Taşıt Kredisi</h2>
            <p>Yeni bir araç almak veya mevcut aracınızı değiştirmek için uygun taşıt kredisi seçenekleri.</p>

            <h2>Kredi Kartları</h2>
            <p>Günlük alışverişlerinizden tutun, yurt içi ve yurt dışı harcamalarınızı karşılamak için çeşitli kredi kartı seçenekleri.</p>

            <h2>İş Yeri Kredileri</h2>
            <p>İşletmenizi büyütmek veya yeni bir iş kurmak için özel iş yeri kredi seçenekleri.</p>
        ',
            ],
            [
                'name' => 'Fibabanka',
                'description' => 'Fibabanka, müşterilerine kurumsal ve bireysel finansal çözümler sunan bir bankadır. Uygun faiz oranları ve özel kredi seçenekleri ile dikkat çeker.',
                'detail' => '
            <h2>İhtiyaç Kredisi</h2>
            <p>Acil nakit ihtiyaçlarınız için hızlı ve kolay başvuru imkanı ile ihtiyaç kredisi seçenekleri.</p>

            <h2>Konut Kredisi</h2>
            <p>Ev sahibi olmak isteyenlere özel konut kredisi fırsatları.</p>

            <h2>İş Yeri Kredileri</h2>
            <p>İşletmenizi büyütmek veya yeni bir iş kurmak için özel iş yeri kredi seçenekleri.</p>

            <h2>Taşıt Kredisi</h2>
            <p>Yeni bir araç almak veya mevcut aracınızı değiştirmek için uygun taşıt kredisi seçenekleri.</p>
        ',
            ],
            [
                'name' => 'Türkiye Finans',
                'description' => 'Türkiye Finans, faizsiz finans prensibi ile çalışan katılım bankalarından biridir. Bireysel ve kurumsal müşterilere özel finansal çözümler sunar.',
                'detail' => '
            <h2>Bireysel Finansman Ürünleri</h2>
            <p>Çeşitli ihtiyaçlarınıza uygun faizsiz finansman ürünleri.</p>

            <h2>Kurumsal Bankacılık Hizmetleri</h2>
            <p>KOBİ\'lerden büyük ölçekli işletmelere özel kurumsal finansman çözümleri.</p>

            <h2>Taşıt ve Konut Finansmanı</h2>
            <p>Ev sahibi olmak veya yeni bir araç sahibi olmak isteyenlere özel finansman seçenekleri.</p>
    ',
    ],
    [
        'name' => 'Enpara',
        'description' => 'Enpara, dijital bankacılık alanında faaliyet gösteren bir bankadır. Kolay ve hızlı işlem imkanları, avantajlı faiz oranları ve kredi kartı seçenekleri ile bilinir.',
        'detail' => '
    <h2>Bireysel Krediler</h2>
            <p>Çeşitli ihtiyaçlarınız için uygun faiz oranları ve esnek ödeme seçenekleri sunan bireysel kredi fırsatları.</p>

            <h2>Konut ve Taşıt Kredileri</h2>
            <p>Ev sahibi olmak veya yeni bir araç sahibi olmak isteyenlere özel finansman seçenekleri.</p>

            <h2>Kredi Kartları</h2>
            <p>Günlük alışverişlerinizden tutun, yurt içi ve yurt dışı harcamalarınızı karşılamak için çeşitli kredi kartı seçenekleri.</p>
    ',
    ],
    [
        'name' => 'QNB Finans',
        'description' => 'QNB Finansbank, geniş şube ağı ve çeşitli finansal ürünleri ile müşterilerine hizmet veren bir bankadır. Bireysel ve kurumsal müşterilere özel kredi seçenekleri sunar.',
        'detail' => '
    <h2>Bireysel Krediler</h2>
            <p>Çeşitli ihtiyaçlarınız için uygun faiz oranları ve esnek geri ödeme seçenekleri sunan bireysel kredi fırsatları.</p>

            <h2>Konut Finansmanı</h2>
            <p>Ev sahibi olmak isteyenlere özel konut finansmanı seçenekleri ile hayallerinizi gerçekleştirin.</p>

            <h2>Taşıt Kredisi</h2>
            <p>Yeni bir araç almak için uygun faizli taşıt kredisi seçenekleri ile bütçenizi koruyun.</p>

            <h2>İhtiyaç Kartları</h2>
            <p>Günlük ihtiyaçlarınız için özel avantajlar sunan kredi kartı seçenekleri.</p>

            <h2>KOBİ Kredileri</h2>
            <p>Küçük ve orta ölçekli işletmeler için uygun şartlarda iş yeri kredisi seçenekleri.</p>
    ',
    ],
    [
        'name' => 'Vakıfbank',
        'description' => 'Vakıfbank, köklü geçmişi ve geniş şube ağı ile müşterilerine çeşitli finansal hizmetler sunan bir bankadır. Uygun faiz oranları ve kredi seçenekleri ile dikkat çeker.',
        'detail' => '
    <h2>Bireysel Krediler</h2>
            <p>Çeşitli ihtiyaçlarınız için uygun faiz oranları ve esnek geri ödeme seçenekleri sunan bireysel kredi fırsatları.</p>

            <h2>Konut Kredisi</h2>
            <p>Ev sahibi olmak isteyenlere özel konut kredisi seçenekleri ile hayallerinizi gerçekleştirin.</p>

            <h2>Taşıt Kredisi</h2>
            <p>Yeni bir araç almak için uygun faizli taşıt kredisi seçenekleri ile bütçenizi koruyun.</p>

            <h2>İhtiyaç Kartları</h2>
            <p>Günlük ihtiyaçlarınız için özel avantajlar sunan kredi kartı seçenekleri.</p>

            <h2>KOBİ Kredileri</h2>
            <p>Küçük ve orta ölçekli işletmeler için uygun şartlarda iş yeri kredisi seçenekleri.</p>
    ',
    ],
    [
        'name' => 'Halkbank',
        'description' => 'Halkbank, geniş bir müşteri kitlesine hitap eden kamu bankalarından biridir. Ekonomik kredi seçenekleri ve uygun faiz oranları ile dikkat çeker.',
        'detail' => '
    <h2>Bireysel Krediler</h2>
            <p>Çeşitli ihtiyaçlarınız için uygun faiz oranları ve esnek geri ödeme seçenekleri sunan bireysel kredi fırsatları.</p>

            <h2>Konut Kredisi</h2>
            <p>Ev sahibi olmak isteyenlere özel konut kredisi seçenekleri ile hayallerinizi gerçekleştirin.</p>

            <h2>Taşıt Kredisi</h2>
            <p>Yeni bir araç almak için uygun faizli taşıt kredisi seçenekleri ile bütçenizi koruyun.</p>

            <h2>İhtiyaç Kartları</h2>
            <p>Günlük ihtiyaçlarınız için özel avantajlar sunan kredi kartı seçenekleri.</p>

            <h2>KOBİ Kredileri</h2>
            <p>Küçük ve orta ölçekli işletmeler için uygun şartlarda iş yeri kredisi seçenekleri.</p>
    ',
    ],
    [
        'name' => 'Ziraat Bankası',
        'description' => 'Ziraat Bankası, tarım ve kırsal kalkınma alanında özel hizmetler sunan bir bankadır. Bireysel ve kurumsal müşterilere geniş bir finansal yelpaze sunar.',
        'detail' => '
    <h2>Bireysel Krediler</h2>
            <p>Çeşitli ihtiyaçlarınız için uygun faiz oranları ve esnek geri ödeme seçenekleri sunan bireysel kredi fırsatları.</p>

            <h2>Konut Kredisi</h2>
            <p>Ev sahibi olmak isteyenlere özel konut kredisi seçenekleri ile hayallerinizi gerçekleştirin.</p>

            <h2>Taşıt Kredisi</h2>
            <p>Yeni bir araç almak için uygun faizli taşıt kredisi seçenekleri ile bütçenizi koruyun.</p>

            <h2>İhtiyaç Kartları</h2>
            <p>Günlük ihtiyaçlarınız için özel avantajlar sunan kredi kartı seçenekleri.</p>

            <h2>KOBİ Kredileri</h2>
            <p>Küçük ve orta ölçekli işletmeler için uygun şartlarda iş yeri kredisi seçenekleri.</p>
    ',
    ],
];



        foreach ($banksData as $bank) {
            $bank['slug'] = Str::slug($bank['name']);
            $bank['created_at'] = now();
            $bank['updated_at'] = now();

            DB::table('banks')->insert($bank);
        }
    }
}

