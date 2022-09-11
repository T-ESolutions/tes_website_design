<?php echo '<?xml version="1.0" encoding="UTF-8"?>' ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">


    <url>
        <loc>{{ url("/") }}</loc>
        <lastmod>{{ gmdate(DateTime::W3C, strtotime($products->first()->created_at)) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>{{ url("projects") }}</loc>
        <lastmod>{{ gmdate(DateTime::W3C, strtotime($products->first()->created_at)) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc>{{ url("services") }}</loc>
        <lastmod>{{ gmdate(DateTime::W3C, strtotime($products->first()->created_at)) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc>{{ url("about-us") }}</loc>
        <lastmod>{{ gmdate(DateTime::W3C, strtotime($products->first()->created_at)) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>{{ url("contact-us") }}</loc>
        <lastmod>{{ gmdate(DateTime::W3C, strtotime($products->first()->created_at)) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>


</urlset>
