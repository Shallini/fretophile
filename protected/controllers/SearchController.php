<?php
class SearchController extends Controller
{
    private $_indexFiles = '../runtime/search';
	
    public function init(){
        Yii::import('application.vendors.*');
        require_once('Zend/Search/Lucene.php');
        parent::init();
    }
	
    public function actionCreate()
    {
        $index = new Zend_Search_Lucene(Yii::getPathOfAlias('application.' . $this->_indexFiles), true);
        $posts = Instrument::model()->findAll();
		
        foreach($posts as $post){
            $doc = new Zend_Search_Lucene_Document(); 
            $doc->addField(Zend_Search_Lucene_Field::Text('model',CHtml::encode($post->model), 'utf-8'));	
            $doc->addField(Zend_Search_Lucene_Field::Keyword('year',CHtml::encode($post->year), 'utf-8'));	
			$doc->addField(Zend_Search_Lucene_Field::Text('description',CHtml::encode($post->description), 'utf-8'));	
			
            $index->addDocument($doc);
			
			/* $doc = new Zend_Search_Lucene_Document(); 
			$doc->addField(Zend_Search_Lucene_Field::Text('year',CHtml::encode($post->year), 'utf-8'));
            $index->addDocument($doc); */			
        }
        $index->commit();			
        $this->render(array('posts'=>$posts));
    }
 
    public function actionSearch()
    {
        $this->layout='login';
				
        $model =  new Instrument;
        if(isset($_REQUEST['q'])){
         if (($term = Yii::app()->getRequest()->getParam('q', null)) !== null) {
            //$index = new Zend_Search_Lucene(Yii::getPathOfAlias('application.' . $this->_indexFiles));
			$index = new Zend_Search_Lucene(Yii::getPathOfAlias('application.' . $this->_indexFiles));
			$results = $index->find($term);		
		
            $query = Zend_Search_Lucene_Search_QueryParser::parse($term);       
            $this->render('search', compact('results', 'term', 'query'));
        }
       }
    }
}
