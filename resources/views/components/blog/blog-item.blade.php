@props([
    'title',
    'description',
    'image',
    'category' => 'IMMOBILIER',
    'date' => null,
    'blogLabel' => 'Lire l’article',
    'blogRoute' => null,
    'blogRouteParameter' => null,
])

<x-blog.blog-card
    :title="$title"
    :image="$image"
    :description="$description"
    :category="$category"
    :date="$date"
    :blogLabel="$blogLabel"
    :blogRoute="$blogRoute"
    :blogRouteParameter="$blogRouteParameter"
/>
