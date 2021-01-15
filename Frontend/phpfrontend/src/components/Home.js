import {useState, useEffect, React} from 'react'
import {getMovies} from '../services/api'



export default function Home() {


  const [movieIds, setMovieIds] = useState([])

  // useEffect (() => {
  //   getMovies().then(data => data && setMovieIds(data))
  // }, [])

  useEffect(()=> {
    getMovies().then(data => data && setMovieIds(data))
},[])

const allMovies =  Object.keys(movieIds).map(data, i) => {
  console.log(data)
  return (
    <div className="card" style={{width : "18rem"}} key={data.id}>
    <img className="card-img-top" src= {data.image_url} alt="Card image cap"/>
    <div className="card-body">
    <h5 className="card-title">key:</h5>
    <h5 className="card-title">{data.title}</h5>
      <p className="card-text">{data.description}</p>
      <a href="#" className="btn btn-primary">Go somewhere</a>
    </div>
    </div>
  )
})



  return (
    <div>
      {allMovies}
    </div>
  )
}
