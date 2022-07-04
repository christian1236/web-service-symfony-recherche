<?php

namespace App\Repository;

use Doctrine\ORM\EntityRepository;

class BaseRepository extends EntityRepository
{
    /**
    * @Route("/search", name="search")
    * @Method("GET")
    */
    public function search(Request $request, Client $client): Response
    {
        if (!$request->isXmlHttpRequest()) {
            return $this->render('search/search.html.twig');
        }

        $query = $request->query->get('q', '');
        $limit = $request->query->get('l', 10);

        $match = new MultiMatch();
        $match->setQuery($query);
        $match->setFields(["name", "prenom", "adr1", "ville", "pays"]);

        $bool = new BoolQuery();
        $bool->addMust($match);

        $elasticaQuery = new Query($bool);
        $elasticaQuery->setSize($limit);

        $foundPosts = $client->getIndex('search')->search($elasticaQuery);
        $results = [];
        foreach ($foundPosts as $post) {
            $results[] = $post->getSource();
        }

        return $this->json($results);
    }
}