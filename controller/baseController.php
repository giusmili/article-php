<?php
class Article{
    static function userArticle(){
        
        $articles = [
        "cover"=>"./asset/cover.jpg",
        "title"=>"Description de l'article",
        "content"=>"No land in sight; we had doubled Cape Clear in the night, and around us was that vast circumference bounded by the line, where water and sky appear to meet. The slate-coloured sea broke in great foamless billows. The 'Great Eastern' struck amidships, and, supported by no sail, rolled frightfully, her bare masts describing immense circles in the air. There was no heaving to speak of, but the rolling was dreadful, it was impossible to stand upright. The officer on watch, clinging to the bridge, 
                    looked as if he was in a swing."
        ];

    return $articles;
    }
}
$articles = Article::userArticle();
 /*  
    // print_r($articles)  # test à regarder dans le tableau les données

    foreach ($articles as $key => $value) {
        $key === "cover" ? print "<img src=".$value.">" : false;
    }

    print "<figcaption>
                <h2>"
            .$articles["title"]."</h2>
            <p>".$articles["content"]."</p>
            <figcaption>"; */

?>



