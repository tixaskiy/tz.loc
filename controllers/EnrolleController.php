<?php

namespace app\controllers;

use Yii;
use app\models\Enrolle;
use app\models\EnrolleSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EnrolleController implements the CRUD actions for Enrolle model.
 */
class EnrolleController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Enrolle models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EnrolleSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->sort = ['defaultOrder' => ['points' => SORT_DESC]];
        $dataProvider->pagination->pageSize=50;

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Enrolle model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id=null)
    {
        // return $this->render('view', [
        //     'model' => $this->findModel($id),
        // ]);
        return $this->redirected(['index']);
    }

    /**
     * Creates a new Enrolle model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Enrolle();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $cookies = Yii::$app->response->cookies;
            $cookies->add(new \yii\web\Cookie([
                'name' => 'user',
                'value' => $model->email,
            ]));

            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->redirect(['enrolle/index']);

        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }
    public function actionResetcookie(){
      $cookies = Yii::$app->response->cookies;
      $cookies->remove('user');
      return $this->redirect(['index']);
    }

    /**
     * Updates an existing Enrolle model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate()
    {
        $cookies = Yii::$app->request->cookies;
        $id=$this->cookieToid($cookies->get('user'));

        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->redirect(['enrolle/index']);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }
    private function cookieToid($params){
      if (($model = Enrolle::findOne(['email'=>$params])) !== null) {
          return $model->id;
      } else {
          throw new NotFoundHttpException('Что-то пошло не так, страница не существует');
      }
    }

    /**
     * Deletes an existing Enrolle model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id=null)
    {
        // $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Enrolle model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Enrolle the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Enrolle::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
