<urlset  xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	<url>
		<loc>https://giadunggiadinh.vn/</loc>
	</url>

	@if(isset($data))
    @foreach($data as $datas)
    <url>
		<loc>{{ route('details',$datas->link) }}</loc>
	</url>	
	@endforeach    
    @endif
</urlset>