import type { GetStaticProps, NextPage } from 'next'
import Head from 'next/head'
import styles from '../styles/Home.module.css'
import { LandingPage } from '../types'
import App from '../components/App'
import { Suspense } from 'react'
import { Spinner } from 'react-bootstrap'
const Home: NextPage<{results: LandingPage[]}> = ({results}) => {
  return (
    <div className={styles.container}>
      <Head>
        <title>Landing Page</title>
        <meta name="description" content="Landing Page" />
        <link rel="icon" href="/favicon.ico" />
      </Head>
      <Suspense fallback={<Spinner animation="grow" variant="info" />}>
        <App landingInfos={results[0]}/>
      </Suspense>
    </div>
  )
}
export const getStaticProps: GetStaticProps = async (context) => {
  const res = await fetch("http://localhost:8001/landing_infos")
  const resultsStr: string  = await res.text()
  const results: LandingPage = JSON.parse(resultsStr)
  return {
    props: {results}
  }
}

export default Home
